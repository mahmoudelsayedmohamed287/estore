<?php

//include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';


class LoginModel 
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

    public function login($email_user,$password_user)
    {
       $email = $this->dbh->get('customers', ['email' , '=', $email_user ]);
       
       $password = $this->dbh->get('customers', ['password' , '=', $password_user]);
       if($password->first() && $email->first()) {
           return true;
       }
       return false;
   

     }

     public function find($email)
     {
        $user = $this->dbh->get('customers', ['email' , '=', $email ])->first();
       
        return $user;
     }
     public function getUser($uinque_id)
        {

        return $this->dbh->get('customers', ['uinque_id', '=', $uinque_id])->first();
        

        } 


    
    
}





