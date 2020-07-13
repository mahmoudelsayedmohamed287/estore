<?php
include "app/Models/admin/dealsModel.php";

class dealsController
{
    private $controller;
    public function __construct(){
        $this->controller = new dealsModel();

    }

    public function index()
    {
        
        $rows = $this->controller->getDeals();
        $this->render('admin/deals/allDeal',compact('rows'));
    }

    public function create(){
        $products = $this->controller->getproduct();
         $this->render('admin/deals/addDeal',compact('products'));
   
         }

         public function add(){
 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){  
              $data = [
                
                'products' => $_POST['products']
                  ];
               if($this->controller->add($data)){
                $rows = $this->controller->getDeals();
                $this->render('admin/deals/allDeal',compact('rows'));
                }else{
                  $rows = $this->controller->getDeals();
                  $this->render('admin/deals/allDeal',compact('rows'));
          
                }
              }
            }

    public function delete($id){
        $this->controller->deleteModel($id);
        $rows = $this->controller->getDeals();
        $this->render('admin/deals/allDeal',compact('rows'));

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