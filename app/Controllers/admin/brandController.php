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
          $rows = $this->controller->getAll();
          $this->render('admin/brands/allbrands',compact('rows'));
          }else{
            $data = [];
    $rows =  $this->controller->getAll();
    $this->render('admin/brands/allbrands', compact('rows'));
    
          }
        }


    public function delete($id){
      $this->controller->deleteModel($id);
      $rows = $this->controller->getAll();
      $this->render('admin/brands/allbrands',compact('rows'));

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
        if(!empty($_FILES['image']['name'])){
        $image =$_FILES['image']['name'];
        $target = 'img/brand/'.basename($_FILES['image']['name']); 

       $data = [

         'title' => $_POST['title'],
         'notes' => $_POST['notes'],
         'image' => $target
           ];

         $this->controller->edit($id,$data);
          move_uploaded_file($_FILES['image']['tmp_name'], $target);
          $rows = $this->controller->getAll();
          $this->render('admin/brands/allbrands',compact('rows'));
          }else{
            $data = [

              'title' => $_POST['title'],
              'notes' => $_POST['notes']
             
                ];
     
              $this->controller->edit($id,$data);
               $rows = $this->controller->getAll();
               $this->render('admin/brands/allbrands',compact('rows'));
          }
      }else{
        $rows = $this->controller->getAll();
        $this->render('admin/brands/allbrands',compact('rows'));

     
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