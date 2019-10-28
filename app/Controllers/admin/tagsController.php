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
        $this->render('admin/tags/addtag',compact('rows'));
  
      }

      public function edit($id){

        $data = [
          
          'id' => $id
                ];
            $rows =  $this->controller->getById($id);
            $all = $this->controller->getAll();
  
        $this->render('admin/tags/edittag',compact( 'data', 'rows','all'));
      }
      public function update($id){
  
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
         $data = [
  
           'title' => $_POST['title'],
           'category' => $_POST['category']
             ];
  
            $this->controller->edit($id,$data);
                     
  
  
  
        }else{
       $rows =  $this->controller->getById($id);
        $data = [];
  
       $this->render('admin/tags/alltag',$data);
        }
  
  
     }

    public function add()
      {
 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){  
          $data = [
            
            'title' => $_POST['title'],
            'category' => $_POST['category'],
            
              ];
            $this->controller->add($data);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            }else{
              $data = [];
      $rows =  $this->controller->getAll();
      $this->render('admin/tags/alltag', compact('rows'));
      
            }
      }

      public function delete($id){
          if($this->controller->deleteModel($id)){
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          }
          else{
            header('Location: '. 'admin/tags/alltag' );
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