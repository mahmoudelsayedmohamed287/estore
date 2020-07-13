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
			$productid  =  $_POST['id'];
			$productPrices =  $_POST['productPrices'];
			$productQnty  =  $_POST['productQnty'];
			$productName = $_POST['productName'];
			$ids = explode(',',$productid[0] );
			$qnts = explode(',',$productQnty[0] );
			
        
			
	
    	\Stripe\Stripe::setApiKey('sk_test_p8qxBxlLMXRuiPzqGn2SDDFr'); //YOUR_STRIPE_SECRET_KEY
		// Get the token from the JS script
		$token = $_POST['stripeToken'];
		// This is a $20.00 charge in US Dollar.
		//Charging a Customer
		// Create a Customer
		
		$state = "Zambales";
		$zip   = "22005";
		$country = "Philippines";
		$user_info = array("First_Name" => $name_first,
						  "Last_Name"   => $name_last, 
						  "Address" => $address, 
						  "State" => $state, 
						  "Zip_Code" => $zip, 
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
		    "amount" => $total * 100,
		    "description" => "Purchase off Caite watch",
		    "currency" => "usd",
		    "customer" => $customer->id,
		 'metadata' => $user_info
		));

		$orderDetails = array(
			"product_id"    => $productid ,
			"product_count" => $productQnty,
			"product_price" => $productPrices,
			"product_name"  => $productName
		);

	$createOrder = 	$this->CreateOrder([
			'shipping' => 'none',
			'cust_id'  => $_SESSION['id'],
			'discount' => 0,
			'extras'   => '0',
			'total'    => $total ,
			'order_number' => rand(),
			'order_detailes' => json_encode($orderDetails),
			'cust_detailes'  => json_encode($user_info)
		]);
		$this->reduceQuantityForThePruscherProduct($ids,$qnts);
	
		return true;

	   }else {
		   return false;
	   }
	}


	public function CheckoutStatus()
	{
		if(isset($_POST['action']) && $_POST['action'] == 'order'){
			if($this->checkout()){
				
				echo 'thanks for your shipping';
			}else {
				echo  'theres error ';
			}
		}
	}
	


	private function CreateOrder($fileds)
	{

		$this->model->createOrder($fileds);
		
	}

	private function reduceQuantityForThePruscherProduct($productid,$productQnty)
	{
		    
			

	   for($i = 0; $i < count($productid); $i++){
		   $this->model->UpdateProductQuantity($productid[$i], $productQnty[$i]);
	   }


	}

	
	
}