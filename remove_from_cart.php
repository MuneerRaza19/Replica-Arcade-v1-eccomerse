<?php
session_start();

if (isset($_POST['remove_from_cart'])) {
    $cart_item_id_to_remove = $_POST['cart_item_id'];

    // Check if the item exists in the cart
    if (isset($_SESSION['cart'][$cart_item_id_to_remove])) {
        // Remove the item from the cart
        unset($_SESSION['cart'][$cart_item_id_to_remove]);
    }
}

header('Location: cart.php'); // Redirect back to the cart page
?>
