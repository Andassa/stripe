<?php 
// Include configuration file   
require_once 'config.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe check out</title>
    
    <link rel="stylesheet" href="css/style.css">

    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>

    <div class="container">
        <h1>Stripe Check out Integration</h1>
        <div class="item">

        <div id="paymentResponse" class="hidden"></div>

            <h2><?php echo $productName?></h2>
            <img src="images/passephrase..PNG">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque tempore a error? Rerum quibusdam ipsum quas doloribus molestias aspernatur magni.</p>
            <p>Price: <b><?php echo $productPrice.' '.strtoupper($currency);?></b></p>

            <button class="stripe-button" id="payButton">
                <div class="spinner hidden" id="spinner"></div>
                <span id="buttonText">Book Now</span>
            </button>

        </div>
    </div>
    
    <script>
// Set Stripe publishable key to initialize Stripe.js
const stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Select payment button
const payBtn = document.querySelector("#payButton");

// Payment request handler
payBtn.addEventListener("click", function (evt) {
    setLoading(true);

    createCheckoutSession().then(function (data) {
        if(data.sessionId){
            stripe.redirectToCheckout({
                sessionId: data.sessionId,
            }).then(handleResult);
        }else{
            handleResult(data);
        }
    });
});
    
// Create a Checkout Session with the selected product
const createCheckoutSession = function (stripe) {
    return fetch("payment_init.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            createCheckoutSession: 1,
        }),
    }).then(function (result) {
        return result.json();
    });
};

// Handle any errors returned from Checkout
const handleResult = function (result) {
    if (result.error) {
        showMessage(result.error.message);
    }
    
    setLoading(false);
};

// Show a spinner on payment processing
function setLoading(isLoading) {
    if (isLoading) {
        // Disable the button and show a spinner
        payBtn.disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#buttonText").classList.add("hidden");
    } else {
        // Enable the button and hide spinner
        payBtn.disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#buttonText").classList.remove("hidden");
    }
}

// Display message
function showMessage(messageText) {
    const messageContainer = document.querySelector("#paymentResponse");
	
    messageContainer.classList.remove("hidden");
    messageContainer.textContent = messageText;
	
    setTimeout(function () {
        messageContainer.classList.add("hidden");
        messageText.textContent = "";
    }, 5000);
}


    </script>
</body>
</html>