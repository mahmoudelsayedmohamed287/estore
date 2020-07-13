<?php

include 'app/Models/commenMthodesModel.php';

class ContactModel
{
    use commenMthodesModel;
    public function __construct()
    {
        $this->dbh  = connection::getInstance();
    }
   public function addressDetailes()
   {
     return $this->dbh->queryBuilder3("SELECT * FROM setting");
   } 
     

}


   
     

