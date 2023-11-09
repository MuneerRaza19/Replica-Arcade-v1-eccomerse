<!DOCTYPE html>
<html>
<head>
    <title>Stripe Checkout</title>
    <!-- Include the Stripe.js library from the CDN -->
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $items = json_decode(file_get_contents('php://input'), true);

    // Set your Stripe secret key
    $stripe_secret_key = 'sk_test_51O5TQSIeUQ6JgRctKNCUxAifE9qcWga0AbeAssQB5RT8f00lBs0zovhNaQtDhIcNVKkD70SYYqZp9Um0hrHx2rMV00OVZW9aJc'; // Replace with your Stripe secret key

    // Initialize Stripe with the secret key
    \Stripe\Stripe::setApiKey($stripe_secret_key);

    // Create a Stripe Checkout session
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $items,
        'success_url' => 'YOUR_SUCCESS_URL', // Replace with your success URL
        'cancel_url' => 'YOUR_CANCEL_URL', // Replace with your cancel URL
    ]);

    // Return the session ID as JSON
    header('Content-Type: application/json');
    echo json_encode(['id' => $session->id]);
}
?>

<!-- Create a button to trigger the Stripe checkout -->
<button id="stripe-checkout-button">Checkout with Stripe</button>

<!-- JavaScript to handle Stripe checkout -->
<script>
    document.getElementById('stripe-checkout-button').addEventListener('click', function() {
        // Fetch cart items and send to the server to create a Stripe session
        var items = JSON.stringify([
            // Define your cart items here
            // Example item:
            // {name: 'Product Name', quantity: 1, amount: 1000} // Amount in cents
        ]);

        fetch(window.location, {
            method: 'POST',
            body: items
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            var stripe = Stripe('pk_test_51O5TQSIeUQ6JgRctDMW16eJWtzGQXkICRlSYyL2IrYI2Yg7B7cW7e8csU9YtZYEUESPB9TJExymTg9T23JqB47An00jtxi5pGa'); // Replace with your Stripe publishable key
            stripe.redirectToCheckout({sessionId: data.id});
        })
        .catch(function(error) {
            console.error(error);
        });
    });
</script>
</body>
</html>
