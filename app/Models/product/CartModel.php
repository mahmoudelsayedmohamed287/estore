<?php
include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';


class CartModel
{
    use commenMthodesModel;

    public function __construct()
    {
        $this->dbh  = connection::getInstance();
    }

    public function getProductById($id)
    {
       return $this->dbh->get('products',array('id', '=', $id))->first();
    }

}