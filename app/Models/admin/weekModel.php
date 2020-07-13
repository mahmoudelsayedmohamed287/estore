<?php
include 'app/libaray/DB.php';
class weekModel{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }
    
    public function getAll()
    {
     $this->db->query("SELECT week_product.* , 
                              products.title AS products_name,
                              products.image as products_image,
                              products.price_after as products_after,
                              products.price_before as products_before 
                        FROM
                        week_product
                        INNER JOIN
                        products
                        ON
                        products.id = product_id
                    ");

     $result = $this->db->All();
     return $result;
    }

    public function add($data){
    
		
        $this->db->query("INSERT INTO week_product(product_id)
             values
                    (:product)");
                    
        $this->db->bind(':product', $data['products']);
      
        if ($this->db->execute()){
        return true;
        }else {
            return false;
        }
    
    
    
    }

    public function deleteModel($id)
    {
      $this->db->query("DELETE FROM week_product WHERE id = :id");
      $this->db->bind(':id',$id);
      if($this->db->execute()){
          return true;
      }
      else{
          return false;
      }
    }

    public function getProducts(){
        $this->db->query("SELECT * FROM products");
        $products = $this->db->All();
        return $products;
    }
}