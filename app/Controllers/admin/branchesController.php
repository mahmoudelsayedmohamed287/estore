<?php
include "app/Models/admin/branchesModel.php";

class branchesController
{
    private $controller;
    public function __construct(){
        $this->controller = new branchesModel();

    }
    public function index(){
     $rows =   $this->controller->getAll();
     $this->render('admin/branches/allbranch',compact('rows'));
    }
    public function create(){
        $this->render('admin/branches/addbranch');
    }

    public function edit($id){
        $rows = $this->controller->getById($id);
        $this->render('admin/branches/editbranch',compact('rows'));
     }
     public function update($id){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
        $data = [
                    'head'=> $_POST['head'],
                    'address'=>$_POST['address'],
                    'telephone'=>$_POST['telephone'],
                    'working_hours'=>$_POST['working_hours'],
                    'link'=>$_POST['link']
                 ];
                 $this->controller->edit($id,$data);
                 $this->index();

    }else{
        $this->index();
    }}
    public function add(){
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            $data = [
                 'head'  => $_POST['head'],
                 'address'  =>  $_POST['address'],
                 'telephone'  =>  $_POST['telephone'],
                 'working_hours'  =>  $_POST['working_hours'],
                 'link'  =>  $_POST['link']
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