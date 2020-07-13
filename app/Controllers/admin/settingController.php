<?php
include "app/Models/admin/settingModel.php";

class settingController
{
    private $controller;
    public function __construct(){
        $this->controller = new settingModel();

    }

    public function index()
    {

        $rows = $this->controller->getAll();
        $this->render('admin/settings/allsetting',compact('rows'));
    }

    



    public function edit($id){
            $rows =  $this->controller->getById($id);
  
        $this->render('admin/settings/editsetting',compact('rows'));
      }

      public function update($id){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
            $data = [
                'logo' => $_POST['logo'],
                'title' => $_POST['title'],
                'abouts' => $_POST['abouts'],
                'newsletter_email' => $_POST['newsletter_email'],
                'insta_logins' => $_POST['insta_logins'],
                'footer' => $_POST['footer'],
                'facebook' => $_POST['facebook'],
                'twitter' => $_POST['twitter'],
                'instagram' => $_POST['instagram'],
                'youtube' => $_POST['youtube'],
                'currency' => $_POST['currency'],
                'email_address' => $_POST['email_address'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'favicon' => $_POST['favicon'],
                'notes' => $_POST['notes'],
                'address_2' => $_POST['address_2'],
                'time_of_work' => $_POST['time_of_work'],
                'date' => $_POST['date']
                
                  ];
  
          if( $this->controller->edit($id,$data)){
         $this->index();
        
        }else{
            $this->index();
  
    
        }
  
  
     }
    }


    

    public function render($view, $varible = [])
    { 
    ob_start();
    extract($varible);
    include "app/Views/". $view . ".php";
    $content = ob_get_clean();
    include "app/Views/template/adminTamplate.php";
    }
}