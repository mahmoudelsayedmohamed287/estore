<?php
//namespace app\Models;


trait commenMthodesModel

{
    private $template = 'template\default';



    
    public function render($view, $varible = [], $settings = [])
    {
        
        ob_start();
        extract($varible);
        include "app/Views/". $view . ".php";
        $page = ob_get_clean();
        include "app/Views/". $this->template . ".php";
       
    } 
}