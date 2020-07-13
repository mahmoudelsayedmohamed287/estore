<?php

include 'app/libaray/DB.php';


class faqModel{
    private $db;
    private $table = "faq";
public function __construct(){

    $this->db = new Database();

}
public function getAll(){
$this->db->query("SELECT * FROM faq ");
return $result = $this->db->All();

}
public function getById($id){
    $this->db->query("SELECT * FROM faq WHERE id = :id");
    $this->db->bind(':id', $id);
    $rows = $this->db->ById();
    return $rows;
}

public function edit($id,$data){
    $this->db->query("UPDATE faq SET 
                                        question = :question,
                                       answer = :answer
                                      
                                        WHERE id = :id" );
                    
      $this->db->bind(':question', $data['question']);
      $this->db->bind(':answer', $data['answer']);
    
      $this->db->bind(':id', $id);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
}
public function add($data){
    $this->db->query("INSERT INTO faq(
                 question, answer  )
         values
                ( :question,:answer)");
                
    $this->db->bind(':question', $data['question']);
    $this->db->bind(':answer', $data['answer']);
    if ($this->db->execute()){
        return true;
    }else {
        return false;
    }
   
}
public function deleteModel($id){
    $this->db->query("DELETE FROM faq WHERE id = :id");
    $this->db->bind(':id', $id);
          if ($this->db->execute()){
        return true;
    }else {
        return false;
    }


}
}