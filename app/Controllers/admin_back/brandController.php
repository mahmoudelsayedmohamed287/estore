<?php
include "app/Models/admin/brandModel.php";

class brandController
{
    private $controller;
    public function __construct(){
        $this->controller = new brandModel();

    }

    public function index()
    {
      $_SESSION['error'] = 'plese provide your name';
       unset($_SESSION['error']);        
        $rows = $this->controller->getAll();
        $this->render('admin/brands/allbrands',compact('rows'));
    }
    public function create(){

      $this->render('admin/brands/addbrand');

    }
    public function add(){
 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $image =$_FILES['image']['name'];
        $target = 'img/brand/'.basename($_FILES['image']['name']); 
        $data = [
          
          'title' => $_POST['title'],
          'notes' => $_POST['notes'],
          'image' => $target
          
            ];
          $this->controller->add($data);
          move_uploaded_file($_FILES['image']['tmp_name'], $target);
          header('Location: ' . $_SERVER['HTTP_REFERER']);
          }else{
            $data = [];
    $rows =  $this->controller->getAll();
    $this->render('admin/brands/allbrands', compact('rows'));
    
          }
        }


    public function delete($id){
      $this->controller->deleteModel($id);
      header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
    public function edit($id){

      $data = [
        'id' => $id
              ];
          $rows =  $this->controller->getById($id);

      $this->render('admin/brands/editbrand',compact( 'data', 'rows'));
    }
    public function update($id){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){

       $data = [

         'title' => $_POST['title'],
         'notes' => $_POST['notes']
           ];

          $this->controller->edit($id,$data);
          header('Location: ' . $_SERVER['HTTP_REFERER']);
      }else{
     $rows =  $this->controller->getById($id);
      $data = [];

     $this->render('admin/brands/allbrands',$data);
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