<?php
include "app/Models/admin/faqModel.php";

class faqController
{
    private $controller;
    public function __construct(){
        $this->controller = new faqModel();

    }
    public function index(){
     $rows =   $this->controller->getAll();
     $this->render('admin/faqs/allfaq',compact('rows'));
    }
    public function create(){
        $this->render('admin/faqs/addfaq');
    }


    public function edit($id){
        $rows = $this->controller->getById($id);
        $this->render('admin/faqs/editfaq',compact('rows'));
     }
     public function update($id){

        $data = [
                    'question'=> $_POST['question'],
                    'answer'=>$_POST['answer']
                 ];
                 $this->controller->edit($id,$data);
                 $this->index();

    }
    public function add(){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $data = [
                 'question'  => $_POST['question'],
                 'answer'  =>  $_POST['answer']
                   ];
        $this->controller->add($data);
        $this->index();
        }else{
            $this->index();
        }
    }
    public function delete($id){
        $this->controller->deleteModel($id);
        $this->index();

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