<?php

include 'app/libaray/DB.php';


class productModel{
    private $db;
public function __construct(){

    $this->db = new Database();

}
public function getAll(){
   $this->db->query("SELECT * FROM products order by id DESC");
   $result =  $this->db->All();
    return $result; 

}
public function deleteModel($id){
    $this->db->query("DELETE FROM products WHERE id = :id");
    $this->db->bind(':id', $id);
          if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
    
}

public function getById($id)
{
 $this->db->query("SELECT * FROM products WHERE id = :id");
 $this->db->bind(':id',$id);
 $result = $this->db->ById();
 return $result;

}
public function edit($id,$data)
    {
    
            $this->db->query("UPDATE products SET 
                
                            title = :title,
                            price_before = :price_before,
                            price_after =:price_after,
                            description =:description,
                            specs = :specs,
                            notes= :notes,
                            status =:status,
                            attrubites =:attributes,
                            quantity =:quantity,
                            small_description =:smalldescription,
                            image = :image,
                            latest =:latest
                            WHERE id = :id ");

                $this->db->bind(':title', $data['title']);
                $this->db->bind(':price_before', $data['price_before']);
                $this->db->bind(':price_after', $data['price_after']);
                $this->db->bind(':description', $data['description']);
                $this->db->bind(':specs', $data['specs']);
                $this->db->bind(':notes', $data['notes']);
                $this->db->bind(':status', $data['status']);
                $this->db->bind(':attributes', $data['attributes']);
                $this->db->bind(':quantity', $data['quantity']);
                $this->db->bind(':smalldescription', $data['small_description']);
                $this->db->bind(':image', $data['img']);
                $this->db->bind(':latest', $data['order']);
                $this->db->bind(':id', $id);

             if ($this->db->execute()){
                return true;
            }else {
                return false;
            }
        
    }

public function add($data){
    
		
    $this->db->query("INSERT INTO products(
                title, price_before, price_after, description,specs,notes,status,attrubites,quantity,small_description,image,latest,image_group)
         values
                (:title, :price_before, :price_after, :description,:specs,:notes,:status,:attributes,:quantity,:small_description,:image,:latest,:image_group)");
                
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':price_before', $data['price_before']);
    $this->db->bind(':price_after', $data['price_after']);
    $this->db->bind(':description', $data['description'] );
    $this->db->bind(':specs', $data['specs'] );
    $this->db->bind(':notes', $data['notes'] );
    $this->db->bind(':status', $data['status'] );
    $this->db->bind(':attributes', $data['attributes'] );
    $this->db->bind(':quantity', $data['quantity'] );
    $this->db->bind(':small_description', $data['smalldescription']);
    $this->db->bind(':image', $data['img']);
    $this->db->bind(':latest', $data['order']);
    $this->db->bind(':image_group', $data['images']);
  
    if ($this->db->execute()){
    return true;
    }else {
        return false;
    }



}


}
