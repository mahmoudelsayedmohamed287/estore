<?php
include "app/Models/admin/tagsModel.php";

class tagsController
{
    private $controller;
    public function __construct(){
        $this->controller = new tagsModel();

    }

    public function index()
    {

        $rows = $this->controller->getAll();
        $this->render('admin/tags/alltag',compact('rows'));
    }

    public function create()
    {
        $rows = $this->controller->getAll();
        $categories = $this->controller->getCategory();
        $this->render('admin/tags/addtag',compact('rows','categories'));
  
      }

      public function edit($id){

            $tags =  $this->controller->getById($id);
            $categories = $this->controller->getCategory();
  
        $this->render('admin/tags/edittag',compact( 'categories','tags'));
      }
      public function update($id){
  
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
         $data = [
  
           'title' => $_POST['title'],
           'category' => $_POST['category']
             ];
  
            if($this->controller->edit($id,$data)){
            $rows = $this->controller->getAll();
            $this->render('admin/tags/alltag',compact('rows'));
                     
  
  
  
        }else{
       $rows =  $this->controller->getById($id);
        $data = [];
  
       $this->render('admin/tags/alltag',$data);
        }
  
  
     }
    }

    public function add()
      {
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){  
          $data = [
            
            'title' => $_POST['title'],
            'category' => $_POST['category'],
            
              ];
           if( $this->controller->add($data)){
            $rows = $this->controller->getAll();
            $this->render('admin/tags/alltag',compact('rows'));
            }else{
              $data = [];
      $rows =  $this->controller->getAll();
      $this->render('admin/tags/alltag', compact('rows'));
      
            }
      }
    }

      public function delete($id){
          if($this->controller->deleteModel($id)){
            $rows = $this->controller->getAll();
            $this->render('admin/tags/alltag',compact('rows'));
          }
          else{
            $rows = $this->controller->getAll();
            $this->render('admin/tags/alltag',compact('rows'));
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