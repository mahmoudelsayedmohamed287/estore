<?php

include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';
class CategoryModel{
use commenMthodesModel;

  public function __construct()
    {
        $this->dbh  = connection::getInstance();
    }

    public function getProductbrand($brand_id)
    {
      return $this->dbh->all('products','ASC', "brand_id =" . $brand_id);
    
    }
   
      public function getProductColor()
      {
       $a = $this->dbh->getAttrbuite('$.color');
      var_dump($a);

       
      }
      public function retriveProducts()
      {
        return $this->dbh->all('products');

      }
    
      public function getProductPrice($price)
      {
        $stm = $this->dbh->all('products','ASC', "price =" . $price);
        return $stm;
      }
      public function getProductTag($tag_id)
      {
       return  $this->dbh->all('products','ASC', "tag_id =" . $tag_id);
       
      }
     

}