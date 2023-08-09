# stripe
Before getting started to integrate Stripe Checkout in PHP, take a look at the file structure.

stripe_checkout_with_php/
├── config.php
├── dbConnect.php
├── index.php
├── payment_init.php
├── payment-success.php
├── payment-cancel.php
├── stripe-php/
├── css/
│   └── style.css
└── images/
Stripe Checkout Integration
This is a Stripe Checkout Integration. The name of the database is "transactions". To begin, you need to create an account with Stripe Developer and obtain your own API key. Once you reach this step, update the keys in the source code. Then, execute the project on your localhost: Test Checkout Integration.

Instructions
Sign up for a Stripe Developer account and obtain your API key.
Replace the placeholder API keys in the source code with your own.
Run the project on your localhost.
Testing
After being redirected to the Stripe Checkout page, you can use any of the following test cards to simulate the payment process. For testing Stripe Checkout payment gateway integration in PHP, please use a valid future expiration date and a random CVC number.

Payment Success:
Card Number: 4242 4242 4242 4242

Payment Requires Authentication:
Card Number: 4000 0025 0000 3155

Payment Declined:
Card Number: 4000 0000 0000 9995

Please note that these are test card numbers and should only be used in a testing environment.

