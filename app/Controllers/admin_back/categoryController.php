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
      $data = [
        
        'title' => $_POST['title'],
        'notes' => $_POST['notes'],
        'description' => $_POST['description']
        
          ];
        $this->controller->add($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
          $data = [];
  $rows =  $this->controller->getAll();
  $this->render('admin/categories/allcategory', compact('rows'));
  
        }
      }
// this method to delete category from database
    public function delete($id)
    {
     $this->controller->deleteModel($id);
     header('Location: ' . $_SERVER['HTTP_REFERER']);
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
  
         $data = [
  
           'title' => $_POST['title'],
           'notes' => $_POST['notes'],
           'descrip' => $_POST['description']
             ];
  
            $this->controller->edit($id,$data);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
                     
  
  
  
        }else{
       $rows =  $this->controller->getById($id);
        $data = [];
  
       $this->render('admin/categories/allcategory',$data);
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