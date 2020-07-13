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

      public function retriveProducts($filter = null)
      {
      
        // return $this->dbh->all('products');
        $stm = "SELECT * FROM products WHERE quantity > 0 ";
        if($filter !== null){
          $stm .= " AND title LIKE '$filter%'  " ;
        }
        
        return $this->dbh->getAll($stm);

      }
    
      
     


      public function filterProducts($sqlstatment)
      {
        return $this->dbh->queryBuilder($sqlstatment);
      }
     

}