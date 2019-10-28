<?php

include '../app/Database/sqlStatment.php';

include '../app/Models/commenMthodesModel.php';

class settings_tamplate_data
{
    use commenMthodesModel;

    private $model;

    public function __construct()
    {
        $this->db = new sqlStatment() ;
        $this->table = 'setting';
    }

    static public function index()
    {
        
    }
}