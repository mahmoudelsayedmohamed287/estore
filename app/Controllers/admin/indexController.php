<?php


class indexController
{
    public function index()
    {
         $this->render("admin/index");
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