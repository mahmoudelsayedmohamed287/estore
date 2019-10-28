<?php




class LogOutController
{
   
    public function index()
    {
        
      
             unset($_SESSION['email']);
             session_destroy();
             header('Location: /estore');

    }
}