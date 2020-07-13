<?php

include 'app/libaray/connection.php';
include 'app/Models/commenMthodesModel.php';

class ProfileModel
{
    use commenMthodesModel;
    public function __construct()
    {
        $this->dbh  = connection::getInstance();
   
    }
    public function getALLDataAboutUser($email)
    {
     return $this->dbh->get('customers', ['email', '=', $email] )->first();
    }
    public function getUserId($id)
    {
        return $this->dbh->get('address', ['customers_id', '=', $id] )->first();
    }

    public function updateUserProfile($fileds,$email)
    {
        $this->dbh->update('customers','email',$fileds, $email);
        
        
    }
    public function updateUserAddress($fileds,$user_id)
    {
       
        $this->dbh->update('address', 'customers_id', $fileds, $user_id );
        
    }


    public function getUserPrusher()
    {
      return  $this->dbh->get('orders', ['cust_id', '=', $_SESSION['id']])->results();
    }

    public function retriveMenu()
    {
    $menus =   $this->dbh->last('menu');

    return $menus;

    } 
    public function retriveMenuChild()
    {

    $menusChilds = $this->dbh->all('menu_children');
    return $menusChilds;

    } 
    
    public function retrive()
    {
        $rows =   $this->dbh->all('setting');

        return $rows;

    } 
  public function update($id,$data)
  {
      $this->dbh->updatenative($id, $data);
      
  }

  public function updatenativeAddress($id,$data)
  {
      $this->dbh->updatenativeAddress($id,$data);
  }

  public function saveProductReview($filed)
  {
      $this->dbh->insert('reviews', $filed);
  }

  public function getReview($id)
  {
      return $this->dbh->get('reviews', ['user_id', '=', $id])->results();
  }
  
  
  
}