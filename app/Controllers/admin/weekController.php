<?php
include "app/Models/admin/weekModel.php";

class weekController
{
    private $controller;
    public function __construct(){
        $this->controller = new weekModel();

    }

    public function index()
    {

        $rows = $this->controller->getAll();
        $this->render('admin/weeks/allWeek',compact('rows'));
    }

    public function create()
    {
        $products = $this->controller->getProducts();
        $this->render('admin/weeks/addweek',compact('products'));
  
      }

      public function add(){
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){  
          $data = [
            
            'products' => $_POST['products']
              ];
            if($this->controller->add($data)){
            $rows = $this->controller->getAll();
            $this->render('admin/weeks/allWeek',compact('rows'));
            }else{
              $rows = $this->controller->getAll();
              $this->render('admin/weeks/allWeek',compact('rows'));
      
            }
          }
        }

          public function delete($id){
            $this->controller->deleteModel($id);
            $rows = $this->controller->getAll();
            $this->render('admin/weeks/allWeek',compact('rows'));
           
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

