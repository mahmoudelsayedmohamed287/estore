<?php

include "app/Models/user/RegisterModel.php";
include "class/Helper.php";
include 'class/Validate.php';

class RegisterController
{
    private $model;

    public function __construct()
    {
        $this->model = new RegisterModel();
       
    }
    public function index()
    {
    
     
     return  $this->model->render('user/register');

   
    }

  public function createNewUser()
  {
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $validator = new Validate();

        $validator->check($_POST, array(
 
         'username' => array(
           'required' => true,
           'min'      => 3,
           'max'     => 60
         ),
         'email' => array(
           'required' => true
 
         ),
         'password' => array(
           'min' => 6)
          )
 
 
      );
      if($validator->passed()){
          $new_user =   $this->model->create([
                'fname'	=> $_POST['username'],
                'email'		=> $_POST['email'],
                'password'	=> $_POST['password'],
                'uinque_id' => md5($_POST['username'])
              ]);
       
              if($new_user){
             
                return  $this->model->render('\user\login');
              }else {
              
                return  $this->model->render('user/register');
              }
             
        }else {
          foreach ($validator->errors() as $error ) {
            echo  "<div class='alert alert-danger' role='alert'> ".  $error . "</div>";
          }
       
      }
     
    
  

    }

  }

}