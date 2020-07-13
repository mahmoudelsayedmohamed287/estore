<?php
//namespace app\libaray;


include_once('app/Config/Config.php');

class connection 
{
  // this data blow form Config/Congig.php file 
private static  $_instance = null ;

    //declare all internal (private) variables, only accessbile within this class

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


private function __construct()
{
  // initialies connection paramter  & options 
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


// singletone design pattern 
public static function getInstance() {
  if(!isset(self::$_instance)) {
      self::$_instance = new connection();
  }
  return self::$_instance;
}


public function queryBuilder($sql){
 $data =  $this->_pdo->query($sql);
 return $data->fetchAll(PDO::FETCH_OBJ);
}
public function queryBuilder3($sql){
  $data =  $this->_pdo->query($sql);
  return $data->fetch(PDO::FETCH_OBJ);
 }
public function queryBuilder1($sql){
  $data =  $this->_pdo->query($sql);
  return $data->fetchAll(PDO::FETCH_ASSOC);
 }
public function query($sql, $params = [])
{
    
    if($this->_query =  $this->_pdo->prepare($sql)){
      $x = 1;
      if(count($params)) {
          foreach($params as $param) {
               
              $this->_query->bindValue($x, $param);
              $x++;
              
          }

        }

        if($this->_query->execute()) {

            if($this->checkIfReturnDataOrCountRow($sql)) {

              $this->_count  = $this->_query->rowCount();
            }else {
              $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
            }

        }else {
              return $this->_error = true;
        }

}
return $this;
}

private function checkIfReturnDataOrCountRow($statement)
{
 if (strpos(strtolower($statement), 'insert') === 0 ||
     strpos(strtolower($statement), 'delete') === 0 ||
     strpos(strtolower($statement), 'update') === 0) {
       return true;
     }
return false;
}



private function action($action, $table, $where = [])
{
  if(!empty($where) ) {
    $operators = array('=', '>', '<', '>=', '<=');
    $field = $where[0];
    $operator = $where[1];
    $value = $where[2];
    if(in_array( $operator, $operators)) {
      $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ? " ;
      if($this->query($sql, array($value))  ){
        return $this;
      }
    }
  }
  return false;
}


public function get($table, $where = [])
{
 return  $this->action("SELECT * ", $table, $where);
}

public function delete($table,$where)
{
  return $this->action("DELETE" ,$table, $where);

}
public function insert($table, $fields = [])
{
  if(count($fields)) {
    $keys = array_keys($fields);
    $value = null;
    $x = 1;
    foreach($fields as $filed) {
      $value .= "?";
      if($x < count($fields)) {
        $value .= ", ";
      }
      $x++;
    }
    $keys_array = implode(',' , $keys);
    $sql = "INSERT INTO {$table} ({$keys_array})  VALUES ({$value})";
    if($this->query($sql, $fields)){
      return true;
    }
    return false;

  }

}


public function update($table, $email, $fileds)
{
  $set = '';
  $x   = 1 ;
  foreach($fileds as $name => $value) {
    $set .= "{$name} = ? ";
    if($x < count($fileds)) {
      $set .= ',';
    }
    $x++;
  }
  $sql = "UPDATE {$table} SET {$set}  WHERE email = '{$email}' ";
 
  if($this->query($sql, $value)) { // fileds
    return  true;
  }
return false;
}

public function jsonData()
{
 return $this->getAll('SELECT JSON_EXTRACT(attrubites, "$.size") FROM products');
}

public function results() {
  return $this->_results;
}
public function first() {
  return $this->results()[0];
}
public function error() {
  return $this->_error;
}
public function count() {
  return $this->_count;
} 





















public function getAll($statment)
{
  $this->_query = $this->_pdo->prepare($statment);
  $this->_query->execute();
  return $this->_query->fetchAll(PDO::FETCH_OBJ);

}
public function getAttrbuite($id)
{
  $sql = $this->query("SELECT image_group  FROM products where id= $id ")->first();
  return  $sql;
}

public function getAllWithParamter($sql, $value)
{
  if($this->query($sql, array($value))){
    return $this;
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
public function last($table)
{
  
 $rows = $this->getAll("SELECT * FROM $table ORDER BY id ASC");
 
 return $rows;
     
}




























public function updatenative($id,$data){
  $sql = "UPDATE customers SET fname=:fname, lname=:lname, phone=:phone WHERE id= $id ";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute($data);
}

public function updateProductQnty($id,$count){
  
  $sql = "UPDATE products SET quantity = quantity - $count  WHERE id = $id ";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute();
}

public function updatenativeAddress($id,$data){
  $sql = "UPDATE address SET address_1=:address_1, address_2=:address_2, city=:city, extra=:extra WHERE customers_id= $id ";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute($data);
}

public function updatenativetoken($email){
  $sql = "UPDATE customers SET token=' ' WHERE email= ? ";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute($email);
}

public function insertUser($data){
  $sql = "INSERT INTO customers (fname,email,password,uinque_id) VALUES(?, ?,?)";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute($data);
}
public function getUsername($name){
  $sql = "SELECT * from  customers WHERE fname = ?";
  $stmt= $this->_pdo->prepare($sql);
  $stmt->execute([$name]);
 return $stmt->fetch(PDO::FETCH_OBJ);

}
public function execute(){
  return $this->stmt->execute();
}

// Get result set as array of objects

}







