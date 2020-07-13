<?php

include "app/Models/user/ProfileModel.php";


class ProfileController
{
   
    private $model;
    // private  $user ;
    // private  $user_address;
    

    public function __construct()
    {
        $this->model = new ProfileModel();
      
        
    }
    public function index()
    {
       
        $user = $this->model->getALLDataAboutUser(isset($_SESSION['email'] ) ? $_SESSION['email'] : '');
        $user_address = $this->model->getUserId($user->id);
        $prusher = $this->model->getUserPrusher(); 

        $settings = [
            'user' => $user,
            'address' => $user_address,
            'prusher' => $prusher

          ];
          
// die(print_r($prusher));
     return  $this->model->render('user\profile' , [$user, $user_address],$settings);

   
    }

    public function updateUserProfile()
    {
        if(isset($_POST['edit_user'])) {

           $user_profile =  $this->model->update($_SESSION['id'],[
               'fname' =>  $_POST['user_firstname'],
                'lname' => $_POST['user_lastname'],
                'phone' => $_POST['user_phone']
            ]);
      
           

          return  header('Location: ' . $_SERVER['HTTP_REFERER']);


    }else {
        echo 'no post';
    }
   


}



public function updateUserAddress()
{
    if(isset($_POST['edit_address'])) {
    $user_address =  $this->model->updatenativeAddress($_SESSION['id'],[
        'city'       => $_POST['user_city'],
        'address_1'  => $_POST['user_address_1'],
        'address_2'  => $_POST['user_address_2'],
        'extra'      => $_POST['user_extra']
       ]);
       return  header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

public function saveReview($productId)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

       $review = $_POST['review_num'];
       $review_text = $_POST['review_text'];
       $productReview = ['user_id' => $_SESSION['id'],
        'product_id' => $productId, 'rating' => $review ,
         'review' => $review_text  ];
       $this->model->saveProductReview($productReview);
       return  $this->index();
    }
}


}