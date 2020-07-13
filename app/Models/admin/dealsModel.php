<?php
include 'app/libaray/DB.php';
class dealsModel{
    private $db;
public function __construct(){

    $this->db = new Database();

}

public function getproduct(){
    $this->db->query("SELECT * FROM products");
    $products = $this->db->All();
    return $products;
}

public function add($data){
    
		
    $this->db->query("INSERT INTO deals(product_id)
         values
                (:product)");
                
    $this->db->bind(':product', $data['products']);
  
    if ($this->db->execute()){
    return true;
    }else {
        return false;
    }



}

public function deleteModel($id){
    $this->db->query("DELETE FROM deals WHERE id = :id");
    $this->db->bind(':id',$id);
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
}






public function getDeals(){
    $this->db->query("SELECT
                            deals.* ,
                            products.title AS products_name,
                            products.image as products_image,
                            products.price_after as products_after,
                            products.price_before as products_before
                            FROM 
                            deals
                            INNER JOIN 
                            products 
                            ON 
                            products.id = deals.product_id
                      ");
        $result =  $this->db->All();
         return $result;
     }
    }