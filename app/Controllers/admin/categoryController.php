<?php
include 'app/Models/admin/categoryModel.php';
class categoryController{
    private $controller;

    public function __construct()
    {
      $this->controller = new categoryModel();
    }

    public function index()
    {
      $rows = $this->controller->getAll();
      $this->render('admin/categories/allcategory',compact('rows'));
    }
    public function create()
    {
     $this->render('admin/categories/addcategory');
    }
//this method to add category in database
public function add(){
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $image = $_FILES['mainimg']['name'];
      $target = 'img/category/'.basename($_FILES['mainimg']['name']);
       
      $data = [
        
        'title' => $_POST['title'],
        'notes' => $_POST['notes'],
        'description' => $_POST['description'],
        'image' => $target
        
          ];
       if( $this->controller->add($data)){
        move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
        $rows = $this->controller->getAll();
      $this->render('admin/categories/allcategory',compact('rows'));
       }
        }else{
          $rows = $this->controller->getAll();
          $this->render('admin/categories/allcategory',compact('rows'));
  
        }
      }
// this method to delete category from database
    public function delete($id)
    {
     $this->controller->deleteModel($id);
     $rows = $this->controller->getAll();
     $this->render('admin/categories/allcategory',compact('rows'));
    }
// this method to edit category from database 
    public function edit($id)
    {
        $data = [
        
            'id' => $id
                  ];
        $rows = $this->controller->getById($id);
        $this->render('admin/categories/editcategory', compact('rows','data'));
      
    }
    public function update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          if(!empty($_FILES['mainimg']['name'])){
          $image = $_FILES['mainimg']['name'];
          $target = 'img/category/'.basename($_FILES['mainimg']['name']);
  
         $data = [
  
           'title' => $_POST['title'],
           'notes' => $_POST['notes'],
           'descrip' => $_POST['description'],
           'image' =>$target
             ];
             
           $this->controller->edit($id,$data);
            move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
            $rows = $this->controller->getAll();
            $this->render('admin/categories/allcategory',compact('rows'));

            }else{


              $data = [
  
                'title' => $_POST['title'],
                'notes' => $_POST['notes'],
                'descrip' => $_POST['description']
                  ];
                 
       
                $this->controller->edit($id,$data);
                 $rows = $this->controller->getAll();
                 $this->render('admin/categories/allcategory',compact('rows'));


            }
        
        }else{
  
          $rows = $this->controller->getAll();
          $this->render('admin/categories/allcategory',compact('rows'));

     
      }
        }
      
  
  
     
    public function render($view, $varible = [])
{ 
    ob_start();
    extract($varible);
    include "app/Views/". $view . ".php";
    $content = ob_get_clean();
    include "app/Views/template/adminTamplate.php";
}
}