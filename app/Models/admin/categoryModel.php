<?php
include 'app/libaray/DB.php';
class categoryModel{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }
    
    public function getAll()
    {
     $this->db->query("SELECT * FROM categories");
     $result = $this->db->All();
     return $result;
    }
    public function add($data){
		
        $this->db->query("INSERT INTO categories(
                    title, notes,description,image)
             values
                    (:title, :note,:description,:image)");
                    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':note', $data['notes']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);
        if ($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }
    public function deleteModel($id)
    {
     $this->db->query("DELETE FROM categories WHERE id = :id");
     $this->db->bind(':id',$id);
     if($this->db->execute()){
         return true;
     }
     else{
         return false;
     }
    }
    public function edit($id,$data){
        if(!empty($data['image'])){
        $this->db->query("UPDATE categories SET 
                                            title = :title,
                                           notes = :notes,
                                           description= :descrip,
                                           image= :image
                                            WHERE id = :id" );
                        
          $this->db->bind(':title', $data['title']);
          $this->db->bind(':notes', $data['notes']);
          $this->db->bind(':descrip', $data['descrip']);
          $this->db->bind(':image', $data['image']);
          $this->db->bind(':id', $id);
        if ($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }else{

        $this->db->query("UPDATE categories SET 
        title = :title,
        notes = :notes,
       description= :descrip
        WHERE id = :id" );

$this->db->bind(':title', $data['title']);
$this->db->bind(':notes', $data['notes']);
$this->db->bind(':descrip', $data['descrip']);
$this->db->bind(':id', $id);
if ($this->db->execute()){
return true;
}else {
return false;
}



    }
    }
     public function getById($id)
     {
      $this->db->query("SELECT * FROM categories WHERE id = :id");
      $this->db->bind(':id',$id);
      $result = $this->db->ById();
      return $result;

     }
    
}