<?php

include 'app/libaray/connection.php';
class helper
{


    public function __construct()
    {
        $this->db = connetion::getInstance();
    }

    public function ifItIsMethod($method=null){

        if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){
    
            return true;
    
        }
    
        return false;
    
    }
    public function isLoggedIn(){

        if(isset($_SESSION['id'])){
    
            return true;
    
    
        }
    
    
       return false;
    
    }
    public function set_message($msg){

        if(!$msg) {
        
        $_SESSION['message']= $msg;
        
        } else {
        
        $msg = "";
        
        
            }
        
        
        }


        public function display_message() {

            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        
        
        }


        public function username_exists($email){

            
         $query =  $this->db->get('customers',['email', '=', $email] ) ;
            if($query->count()) {
                return true;
            }
            return false;
            
        
        
        
        
        
        }


}