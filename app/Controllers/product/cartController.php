<?php 

include "app/Models/product/CartModel.php";

class cartController {
    public function __construct()
    {
       $this->model = new CartModel(); 
       
    }
    public function index()
    {
        $this->model->render('product/cart');
    }


    /**
     * make this function with js to save data in local storg
     * 
     */


    // public function addToCart()
    // {
    // if(!empty($_POST['action'])){
        
    //     $product = $this->model->getProductById($_POST["productId"]);
        
    //     switch($_POST["action"]) {
    //         case "add":
    //         if(isset($_SESSION['shopping_cart'])){
                
    //             $item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
    //             if(!in_array($_POST["productId"], $item_array_id)){
                  
    //                  $count = count($_SESSION['shopping_cart']);
                     
    //                  $item_array = [
    //                      'item_id' => $_POST["productId"],
    //                      'item_quantity' => $_POST['quantity'],
    //                      'item_name' => $product->title,
    //                      'item_price' => $product->price_after,
    //                      'item_image' => $product->image
    //                  ];
    //                  $_SESSION['shopping_cart'][$count] = $item_array;
    //             }else {
    //                 $_SESSION["warning"] =  array("item alerdy added to cart");
                   
    //             }
    //         }else {
    //             $item_array = [
    //                 'item_id' => $_POST["productId"],
    //                 'item_quantity' => $_POST['quantity'],
    //                 'item_name' => $product->title,
    //                 'item_price' => $product->price_after,
    //                 'item_image' => $product->image
    //             ];
    //             $_SESSION['shopping_cart'][0] = $item_array;
    //         }
    //         $_SESSION["success"] =  array("item added to cart");
    //         break;
    //         case 'remove':
            
    //         if(!empty($_SESSION['shopping_cart'])) {
                
    //            foreach($_SESSION['shopping_cart'] as $key => $value) {
               
    //                if($value['item_id'] === $_POST["productId"]) {
    //                    unset($_SESSION['shopping_cart'][$key]);
                      
    //                    if(empty($_SESSION['shopping_cart'])){
    //                        unset($_SESSION['shopping_cart']);
    //                    }
    //                }
    //            }
    //         }
    //     }
       
        
       
       
       
        
    // }

    // }
}