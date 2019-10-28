<?php

 include_once('Config/Config.php');

 //include_once('app/libaray/Core.php');

   //Autoload Core Libraries
  spl_autoload_register(function($className)
   {

     require_once "app/libaray/". $className . '.php';
     
   });

  
