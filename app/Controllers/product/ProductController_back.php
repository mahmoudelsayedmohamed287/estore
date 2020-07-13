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
        $reviews  = $this->model->getReview($id);     
       $this->model->render('product/single-product', compact('product','category','images', 'reviews' ) );
    }

    public function review($productId)
    {
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
             

         }
    }

   

}

