<?php

//namespace app\libaray;

//use app\libaray\connection;

//use Database\connection as connection;

// include 'connection.php';

class sqlStatment 
{
    private 
    $db_name = DB_NAME,
    $db_host = DB_HOST,
    $db_user = DB_USER,
    $db_pass = DB_PASS;
    
    //protected $dbh;
    private $_pdo, 
    $_query,
    $_error = false,
    $_results,
    $_count = 0;
    
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->db_host .';dbname=' .$this->db_name ;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          );
         // try to connect to database 
          try{
           $this->_pdo =  new PDO($dsn,$this->db_user, $this->db_pass, $options);
            //echo 'connetced';
          }
          // catch if  there is  error   & printed
          catch(PDOException $e){
              $this->_error = $e-getMessage();
              echo $this->_error ;
          }
    }

   

    public function all($table , $arrang = 'ASC', $conditan = false, $column = null)
{
      if($conditan){

        $rows = $this->getAll("SELECT * FROM $table  WHERE $conditan ORDER BY id  $arrang");
      }elseif($column !== null){
        $rows = $this->getAll("SELECT $column FROM $table");
      }else {
        $rows = $this->getAll("SELECT * FROM $table  ORDER BY id  $arrang");
      }
      
    return $rows;
     
}
public function getAll($statment)
{
  $this->_query = $this->_pdo->prepare($statment);
  $this->_query->execute();
  return $this->_query->fetchAll(PDO::FETCH_OBJ);

}

public function _printMessage()
{
  $types = ['success','danger', 'warning', 'info'];
  foreach($types as $type) {
    if(isset($_SESSION[$type]) && !empty($_SESSION[$type]) && is_array($_SESSION[$type])) {
      foreach($_SESSION[$type] as $msg) {
        echo "<div class='alert alert-{$type}' 'role='alert'>" . $msg. "</div>";
      }
      unset($_SESSION[$type]);
    }
  }
}


      public function retriveCatagoey()
      {

      return $this->all('categories');


      } 
      public function retriveTags()
      {
      return $this->all('tags');
     
      }
   
      public function retriveBrands()
      {
        return $this->all('brands');
      }
      
     
      





    // public function last($table)
    // {
      
    //  $rows = $this->_pdo->getAll("SELECT * FROM $table ORDER BY id DESC");
     
    //  return $rows;
         
    // }

    // public function where($id)
    // {
    //   $rows = $this->dbh->get("SELECT * FROM $this->table WHERE id = ? ", $id);
     
    //  return $rows;
    // }
    // public function insert($fileds)
    // {
    //     $sql_pairs = [];
    //     $sql_attributes = [];
    //     foreach($fileds as $key => $value) {
    //         $sql_pairs = "$key ? ";
    //         $sql_attributes = $value;
    //     }
    //     $sql_parts = implode(',' ,$sql_pairs);
    //     $this->dbh->prepare("INSERT INTO $this->table $sql_parts ");
    //     $this->dbh->execute($sql_attributes);
            
    // }





}

