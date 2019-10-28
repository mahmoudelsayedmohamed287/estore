<?php
/*
   * App RoutingSystem. Class
   * Creates URL & loads Folder & controller
   * URL FORMAT - folder/controller/method/params
*/

  
  class RoutingSystem {
    protected $currentController = 'homeController';
    protected $folder = 'home';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){

         $url = $this->getUrl();

         if(isset($url) ){
             if(is_dir("app/controllers/" . $url[0] ) && isset($url[1])){
               
               $this->folder = $url[0];
               unset($url[0]);
              //Look in controllers for second value
              if(file_exists('app/controllers/'. $this->folder . '/' . $url[1]. 'Controller.php')){

                $this->currentController = $url[1]."Controller";
                 // Unset 0 Index
                 unset($url[1]);

                 require_once 'app/controllers/'. $this->folder . '/'.  $this->currentController . '.php';

                 $this->currentController = new $this->currentController ;
                 
                  // Check to see if method exists in controller
                  if(isset($url[2])  && method_exists($this->currentController, $url[2])){
                    $this->currentMethod = $url[2];
                    
                    // Unset 1 index
                    unset($url[2]);
                  }

               
                 // Get params
     
               
             }
             $this->params = $url ? array_values($url) : [];
  
        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

            
        
        }
        
      }else {
        require_once 'app/controllers/' .$this->currentController . '.php';
        $this->currentController = new $this->currentController ;
        unset($url[0]); // so here the parent url is controller not folder
  
        $this->params = $url ? array_values($url) : [];
  
        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

      }
     
       
    }//constructor
                


    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        return $url;
      }
    }
  } 
  
  