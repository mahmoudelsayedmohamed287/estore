<?php
include "app/libaray/DB.php";
class homeModel 
{
   
    protected $table = 'menu';
    private $db ;
   
    //private $template = 'template';

    public function __construct()
    {
        //$this->db = new sqlStatment() ;
        $this->db = new Database();
        
       
    }


    // my function to get all latest products 
    public function getAll(){
        $this->db->query("SELECT * FROM products LIMIT 8 ");
        $result =  $this->db->All();
         return $result; 
     
     }

     public function getLatest(){
         $this->db->query("SELECT * FROM products WHERE latest = 1");
         $result = $this->db->All();
         return $result;    
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

             public function getSetting(){
                $this->db->query("SELECT * FROM setting");
                $result =  $this->db->All();
                 return $result; 
             
             }

             public function getCategory(){
                $this->db->query("SELECT * FROM categories LIMIT 5 ");
                $result =  $this->db->All();
                 return $result; 
             
             }

             public function getBrand(){
                $this->db->query("SELECT * FROM brands LIMIT 4 ");
                $result =  $this->db->All();
                 return $result;
             }

           




}
// public function retrive()
// {
//    $rows =   $this->_dbh->all($this->table);

//    return $rows;

// } 
// public function retriveMenu()
// {
//    $menus =   $this->_dbh->last('menu');
   
//    return $menus;

// } 
// public function retriveMenuChild()
// {

//    $menusChilds = $this->_dbh->all('menu_children');
//    return $menusChilds;

// } 


 
// SELECT
// menu_children.title
// FROM
// menu_children
// INNER JOIN menu ON menu_children.parent_id = menu.id

  
