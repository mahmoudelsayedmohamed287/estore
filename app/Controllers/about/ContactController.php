<?php
include 'app/vendor/phpmailer/PHPMailerAutoload.php';
include "app/Models/about/ContactModel.php";

class ContactController
{
    public function __construct()
    {
        $this->model = new ContactModel();
    }
    public function index()
    {
         $settingData = $this->model->addressDetailes();
         $this->model->render('contact', compact('settingData') );
    }

    public function contactUs()
    {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
                $email   = $_POST['email'];
                $name    = $_POST['name'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
               
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
                $mail->Body = '<h2>';
                $mail->Body .=  $subject . $name;
                $mail->Body .= '<h2>';
                $mail->Body .= '<p>';
                $mail->Body .=  $message ;
                $mail->Body .= '</p>';
                           

          if($mail->send()) {
             echo 'email send successfuly Please Check Your Email';
             
         }else {
             echo 'there is error';
         }
         
         
        }

}
}