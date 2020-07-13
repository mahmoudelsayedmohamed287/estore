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
      // $rows =  $this->model->retrive();
     
      // $settings = [
      //   "menu" => $this->model->retriveMenu(),
      //   "blog_childern" => $this->model->retriveMenuChild()
        
      // ];
     $rows =  $this->model->getAll();
     $allLatest = $this->model->getLatest();
     $allDeals = $this->model->getDeals();
     $allWeeks = $this->model->getWeek();
     $footer = $this->model->getSetting();
     $allCategory = $this->model->getCategory();
     $allBrands =  $this->model->getBrand();
    $this->render('home',compact('rows','allLatest','allDeals','allWeeks','allCategory','allBrands','footer'));

   
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

