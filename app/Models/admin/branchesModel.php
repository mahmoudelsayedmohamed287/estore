<?php

include 'app/libaray/DB.php';
include 'app/libaray/connection.php';


class branchesModel{
    private $db;
    private $table = "branches";
public function __construct(){

    $this->db = new Database();

}
public function getAll(){
$this->db->query("SELECT * FROM branches ");
return $result = $this->db->All();

}
public function getById($id){
    $this->db->query("SELECT * FROM branches WHERE id = :id");
    $this->db->bind(':id', $id);
    $rows = $this->db->ById();
    return $rows;
}

public function edit($id,$data){
    $this->db->query("UPDATE branches SET 
                                        head = :head,
                                       address = :address,
                                       working_hours = :working_hours,
                                       link = :link
                                        WHERE id = :id" );
                    
      $this->db->bind(':head', $data['head']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':working_hours', $data['working_hours']);
      $this->db->bind(':link', $data['link']);
      $this->db->bind(':id', $id);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
}
 public function add($data){
    $this->db->query("INSERT INTO branches(
                head , address ,telephone ,working_hours ,link )
         values
                ( :head,:address,:telephone,:working_hours,:link)");
                
    $this->db->bind(':head', $data['head']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':telephone', $data['telephone']);
    $this->db->bind(':working_hours', $data['working_hours']);
    $this->db->bind(':link', $data['link']);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
   
}

public function deleteModel($id){
    $this->db->query("DELETE FROM branches WHERE id = :id");
    $this->db->bind(':id', $id);
          if ($this->db->execute()){
        return true;
    }else {
        return false;
    }


}
}
