<?php 
 
// Product Details  
// Minimum amount is $0.50 US  
$productName = "Amphithéatre";  
$productID = "Sall1";  
$productPrice = 55; 
$currency = "usd"; 
  
/* 
 * Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'sk_test_51NcjN3Ev4Po4tZBwQPgMEE64BE3SECdwtV5lFJUD6pJ7We8BPO4fXlYChGJR3czYx5g4yjNn0MqhtibAEKAYtbPf00gVrSzZd3'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51NcjN3Ev4Po4tZBwj8AVvSHBcaJpfq92CvmpnNXI6qiyOiuHGQmbTlltPcJSe9WA0t8tja1KFb766PJ2HXV2Z0hO00LLcXozyA'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/stripe/payment-success.php'); //Payment success URL 
define('STRIPE_CANCEL_URL', 'http://localhost/stripe/payment-cancel.php'); //Payment cancel URL 
    
// Database configuration    
define('DB_HOST', 'localhost');   
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '');   
define('DB_NAME', 'transactions'); 
 
?>