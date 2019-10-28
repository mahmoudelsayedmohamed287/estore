<?php
include "app/Models/admin/productModel.php";

class ProductController
{
    private $controller;
    public function __construct(){
        $this->controller = new productModel();

    }

    public function index()
    {
        
        $rows = $this->controller->getAll();
        $this->render('admin/products/allProduct',compact('rows'));
    }

    public function edit($id){

          $rows =  $this->controller->getById($id);

      $this->render('admin/products/editproduct',compact( 'rows'));
    }
    
 
    public function delete($id){
            $this->controller->deleteModel($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

   public function create(){

      $this->render('admin/products/addProduct');

      }
  
public function add(){

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $image = $_FILES['mainimg']['name'];
    $target = 'img/product/'.basename($_FILES['mainimg']['name']);
    $img = $_FILES['img']['name'];
      $latest = $_POST['order'];
    $data = [
      
      'title' => $_POST['title'],
      'price_before' => $_POST['pricebefore'],
      'price_after' => $_POST['priceafter'],
      'description' => $_POST['description'],
      'specs' => $_POST['specs'],
      'notes' => $_POST['notes'],
      'status' => $_POST['status'],
      'attributes' => $_POST['attributes'],
      'quantity' => $_POST['quantity'],
      'smalldescription' => $_POST['smalldescription'],
      'img' => $target,
      'order' => $latest,
      'images' => serialize($img) 
      
        ];
        
      $this->controller->add($data);
      move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    
     



    }else{
      $data = [];
      $rows =  $this->controller->getAll();
      $this->render('admin/products/allproduct', compact('rows'));

    }


}

public function update($id){

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $image = $_FILES['mainimg']['name'];
       $target = 'img/product/'.basename($_FILES['mainimg']['name']);

      $data = [
          'title' => $_POST['title'],
          'price_before' => $_POST['pricebefore'],
          'price_after' => $_POST['priceafter'],
          'description' => $_POST['description'],
          'specs' => $_POST['specs'],
          'notes' => $_POST['notes'],
          'status' => $_POST['status'],
          'attributes' => $_POST['attributes'],
          'quantity' => $_POST['quantity'],
          'small_description' => $_POST['smalldescription'],
          'img' => $target,
          'order' => $_POST['order']
            ];

     $this->controller->edit($id,$data);
     move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
     header('Location: ' . $_SERVER['HTTP_REFERER']);
  
  }else{
 $rows =  $this->controller->getById($id);
  $data = [];

 $this->render('admin/settings/allsetting',$data);
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