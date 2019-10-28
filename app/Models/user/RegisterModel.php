<?php



include 'app/Models/commenMthodesModel.php';



class RegisterModel
{
  

    use commenMthodesModel;

    public function __construct()
    {
      $this->_db = connection::getInstance();

    }
    public function create($fildes = [])
    {
      try{

      // if($this->username_exists($fildes['fname'])){
      //   return false;
      // }
      // if($this->email_exists($fildes['email'])){
      //   return false;
      // }
       if($this->_db->insert('customers', $fildes)->count() > 0 ){
            return true;
       }
        

      }catch(Exception $e) {

          return  $e->getMessage();
      }
      
    }

    public function username_exists($username){ 
      
     if($this->_db->get('customers', ['fname', '=', $username])->results() > 0) {

       return true;
     }
     return false;
     
      

     }
     public function email_exists($email){ 
      

      if($this->_db->get('customers', ['email', '=', $email])->results() > 0 ){
        
        return true;
      }

      return false;
     

     }
     public function retriveMenu()
    {
    $menus =   $this->_db->last('menu');

    return $menus;

    } 
    public function retriveMenuChild()
    {

    $menusChilds = $this->_db->all('menu_children');
    return $menusChilds;

    } 
    
    public function retrive()
    {
        $rows = $this->_db->all('setting');

        return $rows;

      } 
}