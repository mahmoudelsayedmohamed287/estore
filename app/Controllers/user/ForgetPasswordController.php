<?php

include "app/Models/user/ForgetPasswordModel.php";
include "class/Helper.php";
include 'class/Validate.php';

class ForgetPasswordController
{

	private $model;
    private $error = [];
    public function __construct()
    {
        $this->model = new ForgetPasswordModel();
      
    }


    public function resetPassword()
{
    if($_SERVER['REQUEST_METHOD'] === "POST") {

       if(isset($_POST['email'])) {
       	   $email = $_POST['email'];
       	   $length = 50;
           $token = bin2hex(openssl_random_pseudo_bytes($length));

           if($this->model->email_exists($email)) {
           	  $this->model->addTokenToUser($token, $email);
           	  $mail = new PHPMailer();
           	  $mail->isSMTP();
           	  $mail->Host     = "smtp.mailtrap.io";
           	  $mail->Username = "ab59043e2eb6e4";
           	  $mail->Password = "98f17636a5e09a";
           	  $mail->Port     = "2525";
           	  $mail->SMTPSecure = 'tls';
	          $mail->SMTPAuth = true;
	          $mail->isHTML(true);
	          $mail->CharSet = 'UTF-8';
              $mail->SetFrom("afafziden@gmail.com", "afaf gomaa");
              $mail->addAddress($email);
              $mail->Subject = 'This is a test email';
              $mail->Body = '<p>
                                    Please click to reset your password
                                    <a href="http://localhost/estore/user/ForgetPassword/reset?email='.$email.'&token='.$token.' ">
                                    http://localhost/estore/user/ForgetPassword/reset?email='.$email.'&token='.$token.'</a>
                            </p>';

            if($mail->send()) {
           	echo 'email send successfuly Please Check Your Email';
           }else {
           	echo 'there is error';
           }
           }else {
           	echo 'this email does not exsit';
           }
           

          

       }
    }
    



}


public function reset()
{
	if(isset($_GET['email'] ) && isset($_GET['token'])) {
     return  $this->model->render('user\reset');
  }
}


public function UpadtePassword()
{
//
	if(isset($_POST['password'])&& isset($_POST['confirmPassword']) && isset($_POST['email'])  ) {
		
		if($_POST['password'] === $_POST['confirmPassword']) {
			$password = $_POST['password'];
            $email    = $_POST['email'];
           // $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
			$hashedPassword = $password;
			if($this->model->upadetPassword($hashedPassword, $email)  > 0){
				return  $this->model->render('user\login');
			}else{
				echo 'theres is problem';
			}
			echo "string";


		}else {
			echo 'Password not matches';
		}
	}
		
	




}




}