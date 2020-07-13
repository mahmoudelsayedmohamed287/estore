<?php

include "app/Models/user/LoginModel.php";
include "class/Helper.php";
include 'class/Validate.php';
class LoginController
{
    private $model;
    private $error = [];
    public function __construct()
    {
        $this->model = new LoginModel();

        
    }
    public function index()
    {

       
     return  $this->model->render('\user\login');
    }
    public function login_user()
    {

        if($_SERVER['REQUEST_METHOD'] === "POST"){
           
            $validator = new Validate();
            $validator->check($_POST, array(
                'email' => array(
                'required' => true
                
                ),
                'password' => array(
                'required' => true,
                'min' => 6)
                ) );
                if($validator->passed()){

                    $email 	= $_POST['email'];
                    
                    //password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost'=>12));
                    $password 	= $_POST['password'];
                   
                    if($this->model->login($email, $password) ){ 
                        $user =  $this->model->find($email);
                              
                        $_SESSION['email'] = $email;
                        $_SESSION['email'] = $user->email;
                        $_SESSION['id']    = $user->id;
                        $_SESSION['name']  = $user->fname;
                        $_SESSION['password']  = $user->password;
                        $_SESSION['role']  = $user->role;


                          if(isset($_POST['remember'])){ 
                            setcookie("member_login", $user->uinque_id, time()+86400, "/");
                            
                          }else {
                            setcookie ("member_login", "", time() - 3600,"/");
                           
                          } 
                        $error = false; 
                        return  $this->model->render( header("Location:" . URL ) , $error);
                    }else {
                       
                         $error = true;
                         return  $this->model->render('\user\login',$error);
                    
                    }

                }else {
                    foreach ($validator->errors() as $error ) {
                       $this->error[] =   $error ;
                       echo $error . '<br>';
                    }
                }
        }else {

            return  header('Location: ' . $_SERVER['HTTP_REFERER']);
        }


}


public function forget()
{
    return  $this->model->render('\user\forget' );
}




}


 