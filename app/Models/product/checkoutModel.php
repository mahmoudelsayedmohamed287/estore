<?php
include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';


class checkoutModel
{
    use commenMthodesModel;

    public function __construct()
    {
        $this->dbh  = connection::getInstance();
        
    }

    public function getALLDataAboutUserById($id)
    {
     return $this->dbh->queryBuilder3("SELECT * FROM customers LEFT JOIN address on address.cust_id = customers.id where customers.id =  $id");
    }

    

}