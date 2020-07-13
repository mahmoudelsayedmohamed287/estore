<?php
include 'app/libaray/DB.php';
class tagsModel{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }
    
    public function getAll()
    {
     $this->db->query("SELECT tags.* , categories.title AS category_name 
                        FROM
                        tags
                        INNER JOIN
                        categories
                        ON
                        categories.id = category_id
                    ");

     $result = $this->db->All();
     return $result;
    }

    public function add($data){
		
        $this->db->query("INSERT INTO tags(
                    title,category_id)
             values
                    (:title, :category)");
                    
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':category', $data['category']);
     
      
    
        
        if ($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }
    public function deleteModel($id)
    {
      $this->db->query("DELETE FROM tags WHERE id = :id");
      $this->db->bind(':id',$id);
      if($this->db->execute()){
          return true;
      }
      else{
          return false;
      }
    }

    public function getById($id){
        $this->db->query("SELECT * FROM tags WHERE id = :id");
        $this->db->bind(':id', $id);
        $rows = $this->db->ById();
        return $rows;
    }

    public function edit($id,$data){
        $this->db->query("UPDATE tags SET 
                                            title = :title,
                                           category_id = :category
                                            WHERE id = :id" );
                        
          $this->db->bind(':title', $data['title']);
          $this->db->bind(':category', $data['category']);
          $this->db->bind(':id', $id);
        if ($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function getCategory()
    {
     $this->db->query("SELECT * FROM categories ");
     $result = $this->db->All();
     return $result;
    }
}