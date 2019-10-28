<?php

include 'app/Models/commenMthodesModel.php';
include 'app/vendor/phpmailer/PHPMailerAutoload.php';

class ForgetPasswordModel
{
     use commenMthodesModel;



    public function __construct()
    {

        $this->dbh  = connection::getInstance();
   

    }
    public function retriveMenu()
    {
    $menus =   $this->dbh->last('menu');

    return $menus;

    } 
    public function retriveMenuChild()
    {

    $menusChilds = $this->dbh->all('menu_children');
    return $menusChilds;

    } 
    
    public function retrive()
    {
        $rows =   $this->dbh->all('setting');

        return $rows;

    } 

    public function email_exists($email){ 
      

      if($this->dbh->get('customers', ['email', '=', $email]) ) {
        
        return true;
      }

     }

     public function addTokenToUser($email, $token)
     {
        //$this->dbh->updatenativetoken([$email]); 
          $this->dbh->update("customers", $email, [$token])->count(); 
     }

      public function upadetPassword($password, $email)
     {
     if($this->dbh->query("UPDATE customers SET token='', password='{$password}' WHERE email = ?", array($email ) )){
        return true;
     }
     return false;
     
        //$this->dbh->upadet("customers", $token, ['password' => $password ]);   	
     }



}