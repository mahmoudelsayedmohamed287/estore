<?php
include "app/Models/product/productModel.php";

class ProductController{

    public function __construct()
    {
        $this->model = new productModel();
    }
    public function index($id)
    {
        $product  = $this->model->reteriveSingleProduct($id);
        $category = $this->model->reteriveSingleProductRelatedCategory($product->category_id);
        $images   = $this->model->getImageGroup($id);      
        $deals    = $this->model->getWeek();
        $reviews  = $this->model->getReview($id);
     
       $this->model->render('product/single-product', compact('product',
                                                              'category',
                                                              'images',
                                                              'deals',
                                                              'reviews'));
    }

    public function confirm()
    {
        $order = $this->model->getLastOrder($_SESSION['id']);
        return $this->model->render('product/confirmation',compact('order'));
    }

    public function order($id)
    {

        $order   = $this->model->getOrderDeatials($id);
        
        
        return $this->model->render('product/order',compact('order'));
    }

    public function review($id)
    {
       
        $orderid = $id;
        $reviews = $this->model->getProductReviewRlatedToThisUser($_SESSION['id']);
        $avaliavleTowriteRate = true;
        for($i = 0 ; $i < count($reviews);  $i++){
         if($reviews[$i]->product_id == $orderid){
           $avaliavleTowriteRate = false;
         }
        }

        return $this->model->render('product/review',compact('orderid','reviews','avaliavleTowriteRate'));
    }

   

  

}

