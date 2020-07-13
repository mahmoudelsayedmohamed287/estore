<?php

include 'app/libaray/DB.php';


class aboutusModel{
    private $db;
    private $table = "aboutus";
public function __construct(){

    $this->db = new Database();

}
public function getAll(){
$this->db->query("SELECT * FROM $this->table ");
return $result = $this->db->All();

}
public function getById($id){
    $this->db->query("SELECT * FROM aboutus WHERE id = :id");
    $this->db->bind(':id', $id);
    $rows = $this->db->ById();
    return $rows;
}

public function deleteModel($id){
    $this->db->query("DELETE FROM aboutus WHERE id = :id");
    $this->db->bind(':id', $id);
          if ($this->db->execute()){
        return true;
    }else {
        return false;
    }


}

public function add($data){
    $this->db->query("INSERT INTO aboutus(
                 tittle, brief  )
         values
                ( :tittle,:brief)");
                
    $this->db->bind(':tittle', $data['tittle']);
    $this->db->bind(':brief', $data['brief']);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
   
}

public function edit($id,$data){
    $this->db->query("UPDATE aboutus SET 
                                        tittle = :tittle,
                                       brief = :brief
                                      
                                        WHERE id = :id" );
                    
      $this->db->bind(':tittle', $data['tittle']);
      $this->db->bind(':brief', $data['brief']);
    
      $this->db->bind(':id', $id);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
}
}