<?php
// include 'app/libaray/DB.php';
include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';

 


class productModel
{
    use commenMthodesModel;

    public function __construct()
    {
        $this->dbh  = connection::getInstance();
    }
    public function reteriveSingleProduct($id)
    {
      return  $this->dbh->get('products', ['id', '=', $id])->first();
    }
    public function reteriveSingleProductRelatedCategory($category_id) 
    {
        return  $this->dbh->get('categories', ['id', '=', $category_id])->first();
    }
    public function getImageGroup($id)
    {
        return $this->dbh->queryBuilder1("SELECT image_group FROM products where id= $id ");
    }
   public function getReview($id)
   {
       return $this->dbh->get('reviews', ['product_id', $id]);
   }
}