<?php
include "app/Models/admin/productModel.php";

class ProductController
{
    private $controller;
   
    public function __construct(){
        $this->controller = new productModel();
        // put all product inside constructor to visable in all function
       

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
    


 
    public function delete($id)
    {
            $this->controller->deleteModel($id);
            $rows = $this->controller->getAll();
            $this->render('admin/products/allProduct',compact('rows'));
    }




   public function create()
   {
      $cats = $this->controller->getCat();
      $this->render('admin/products/addProduct',compact('cats'));

      }
  
public function add(){
$attributes = [];


$attributes  = array_combine($_POST['key'] , $_POST['value']);


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
      'attributes' => json_encode($attributes),
      'quantity' => $_POST['quantity'],
      'smalldescription' => $_POST['smalldescription'],
      'category' => $_POST['category'],
      'img' => $target,
      'images' => serialize($img),
      'order' => $latest
       
      
        ];
        

     if( $this->controller->add($data)){
      move_uploaded_file($_FILES['mainimg']['tmp_name'], $target);
      return  $this->index();
    
     



    }else{
      return  $this->index();

    }


} 
}

public function update($id){
  $attributes  = array_combine($_POST['key'] , $_POST['value']);
  $target = 'img/product/';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = [
               'title' => $_POST['title'],
               'price_before' => $_POST['pricebefore'],
               'price_after' => $_POST['priceafter'],
               'description' => $_POST['description'],
               'specs' => $_POST['specs'],
               'notes' => $_POST['notes'],
               'status' => $_POST['status'],
               'attrubites' => json_encode($attributes),
               'quantity' => $_POST['quantity'],
               'small_description' => $_POST['smalldescription'],
               'latest' => $_POST['order']
              
                 ];


        /**
         * check if main image exsits and push it into array 
         */
       
         if(!empty($_FILES['mainimg']['name'])){
           $target = 'img/product/'.$_FILES['mainimg']['name'];
          $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
          if ($_FILES['mainimg']['size'] > 500000) {
            die( "Sorry, your file is too large.");
           
          }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      
        }

          
            $data['image'] = 'img/product/'.$_FILES['mainimg']['name'];
            move_uploaded_file($_FILES['mainimg']['tmp_name'], $target .basename($_FILES['mainimg']['name']) );
       
        }

        if(count($_FILES['img']['name']) > 1){
         foreach($_FILES['img']['name'] as $im){
          $target1[] = 'img/product/'. $im;
         }
         foreach( $target1 as $targ){
          $imageFileType = strtolower(pathinfo($targ,PATHINFO_EXTENSION));
         }
          if ($_FILES["img"]["size"] > 5000) {
            die("Sorry, your file is too large.");
           
           
          }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        die( "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
      
        }
            $data['image_group'] = serialize($_FILES['img']['name']);

            // move_uploaded_file($_FILES['img']['tmp_name'], $target .basename($_FILES['img']['name']) );
      }
          
          $this->controller->edit($id,$data);
          $this->index();


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
