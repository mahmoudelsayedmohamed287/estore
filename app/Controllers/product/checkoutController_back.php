<?php

include "app/Models/product/checkoutModel.php";
require_once('app/vendor/stripe/init.php');

class CheckoutController
{
    public function __construct()
    {
      $this->model = new checkoutModel();
       
    }
    public function index()
    {
		// refctory
		if(isset($_SESSION["email"])){
			$userAddress = $this->model->getALLDataAboutUserById($_SESSION['id']);
			$this->model->render('product/checkout',compact('userAddress'));
		}else{
			$this->model->render('product/checkout');
		}
    	
    }

    public function checkout()
    {

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$email      = $_POST['email'];
			$name_first = $_POST['fname'];
			$name_last  = $_POST['fname'];
			$address    = $_POST['address'];
			$country    = $_POST['country'];
			$phone      = $_POST['phone'];
			$total      = $_POST['checkouttotal'];
			$productid =  $_POST['productid'];
			die(print_r($productid));
			

	
    	\Stripe\Stripe::setApiKey('sk_test_p8qxBxlLMXRuiPzqGn2SDDFr'); //YOUR_STRIPE_SECRET_KEY
		// Get the token from the JS script
		$token = $_POST['stripeToken'];
		// This is a $20.00 charge in US Dollar.
		//Charging a Customer
		// Create a Customer
		
		$state = "Zambales";
		$zip   = "22005";
		$country = "Philippines";
		$user_info = array("First Name" => $name_first,
						  "Last Name"   => $name_last, 
						  "Address" => $address, 
						  "State" => $state, 
						  "Zip Code" => $zip, 
						  "Country" => $country, 
						  "Phone" => $phone);
        
		$customer = \Stripe\Customer::create(array(
		    "email" => "afafziden@gmail.com",
		    "source" => $token,
		   'metadata' => $user_info,
		));

		// Save the customer id in your own database!
		// Charge the Customer instead of the card
	
		 \Stripe\Charge::create(array(
		    "amount" => $total,
		    "description" => "Purchase off Caite watch",
		    "currency" => "usd",
		    "customer" => $customer->id,
		 'metadata' => $user_info
		));
		// print_r($charge);
		// die($productIds);
		$this->makePrucher($productid,$_SESSION["id"]);
		echo "thanks for your shipping";

	   }
	}
	


	private function makePrucher($productids, $userId)
	{

		$this->model->insertProducIdtIntoOrderTable($productids,$userId);
		
	}

	// private function getProductDeatiles($productids)
	// {
	

	// 	$this->model->
		
	// }
}