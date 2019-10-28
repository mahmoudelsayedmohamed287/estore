<?php



include "app/Models/homeModel.php";

class homeController {
    private $template = 'template\default';
    private $model;

    public function __construct()
    {
        $this->model = new homeModel();
    }
    public function index()
    {
     
     $rows =  $this->model->getAll();
     $allLatest = $this->model->getLatest();
    $this->render('home',compact('rows','allLatest'));

   
    }



    public function render($view, $varible = [], $settings = [])
    {
        
        ob_start();
        extract($varible);
        include "app/Views/". $view . ".php";
        $page = ob_get_clean();
        include "app/Views/". $this->template . ".php";
       
    } 

  
}

