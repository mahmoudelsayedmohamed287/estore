<?php
include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';
include "app/libaray/DB.php";

 


class productModel
{
    use commenMthodesModel;

    public function __construct()
    {
        $this->dbh  = connection::getInstance();
        $this->db = new Database();
     
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
    public function getWeek(){
        $this->db->query("SELECT
                                week_product.* ,
                                products.title AS products_name,
                                products.image as products_image,
                                products.price_after as products_after,
                                products.price_before as products_before
                                FROM 
                                week_product
                                INNER JOIN 
                                products 
                                ON 
                                products.id = week_product.product_id
                           ");
            $result =  $this->db->All();
             return $result;
         }


public function getReview($id)
{
    return $this->dbh->get('reviews', ['product_id', '=', $id])->results();
}

public function getLastOrder($id)
{
    return $this->dbh->getAll("SELECT * FROM orders WHERE cust_id = $id ORDER BY ID DESC LIMIT 1");
}
public function getOrderDeatials($id)
{
    return $this->dbh->get('orders', ['id', '=', $id])->results();
}

public function getProductReviewRlatedToThisUser($id)
{
    return $this->dbh->getAll("SELECT product_id , review ,rating FROM reviews WHERE user_id = $id");
}

   
 
}