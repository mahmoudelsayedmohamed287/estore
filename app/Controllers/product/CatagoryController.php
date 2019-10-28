<?php

include "app/Models/product/CategoryModel.php";


class CatagoryController{
    private $url, $id;

    public function __construct()
    {
        $this->model = new CategoryModel();
        // refactory this code
        $this->url =  explode('/' , $_GET['url']);
        $this->id = isset($this->url[3]) ? $this->url[3] : '';

    }
    public function index()
    {
        $settings = [
             'products' => $this->model->retriveProducts(),
             'products_color' =>[ 'title' => 'red', 'title' => 'yellow']
          ];
         $this->model->render('product/category',['cd'] ,$settings );
    }

    public function getProductTage()
    {
        $settings = [
             'products' => $this->model->getProductTag($this->id)
          ];
         $this->model->render('product/category',['h'] ,$settings );
    }
    public function getProductbrand($brand_id) 
    {

        $settings = [
             'products' => $this->model->getProductbrand($this->id) 
          ];
          $this->model->render('product/category',[''] ,$settings );
    }

    public function search()
    {
        if(isset($_POST['action'])){
           print_r($_POST['brands']);
           print_r($_POST['categorys']);
        }
    }
  

}