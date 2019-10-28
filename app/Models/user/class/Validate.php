<?php

include 'app/libaray/connection.php';
class Validate
{

    private $_passed,
            $_errors,
            $_dbh;
    public function __construct()
    {
       // $this->_db = connection::getInstance();
    }

   public function check($sourec, $items = [])
   { 
      
       foreach($items as $item => $rules) {
        $value = $sourec[$item];
           foreach($rules as $rule => $rule_value) {
               if($rule == 'required' && empty($value) ) {
                   $this->addError("{$item} is rquired");
                   }elseif(!empty($rule)){
                   switch($rule) {
                       case 'max' :
                       if(strlen($value) > $rule_value) {
                        $this->addError("{$item} can only be a maximum of {$rule_value} characters.");
                               } 
                       break;
                       case 'min' :
                       if(strlen($value) < $rule_value) {
                        $this->addError("{$item} can only be a maximum of {$rule_value} characters.");
                               } 
                       break;
                       case 'matches':
                            if($value != $sourec[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                        break;
                        // case 'unique':
                        // if($this->_db->get($rule_value , [$item, '=' , $value ])){
                        //     $this->addError("{$item} alardy exisit ");
                        // }
                        break;
                   }
               }
           }
       }

   }



private function addError($error) {
    $this->_errors[] = $error;
}

public function passed() {
  if(empty($this->_errors )) {
      return true;
  }
  return false;
}

public function errors() {
 return $this->_errors;
}

}