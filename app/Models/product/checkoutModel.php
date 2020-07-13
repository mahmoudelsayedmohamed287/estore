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
     return $this->dbh->queryBuilder3("SELECT * FROM customers LEFT JOIN address on address.customers_id = customers.id where customers.id =  $id");
    }
    public function createOrder($fileds)
    { 
        return $this->dbh->insert('orders',$fileds);
        
    }

    public function getAllProductById($id)
    {
        return $this->dbh->get('products', ['id' , '=', $id])->first();
    }

    public function UpdateProductQuantity($id, $Quantity)
    {
        return $this->dbh->updateProductQnty($id, $Quantity);
    }

   

    

}