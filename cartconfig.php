<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_code = $_POST['product_code'];
    $quantity = $_POST['product_qty'];
    $size = $_POST['product_size']; // Get the selected size

    // Create a unique cart item identifier
    $cart_item_id = md5($product_id . $product_code . $size); // Include the size in the identifier

    // Check if the item already exists in the cart
    if (isset($_SESSION['cart'][$cart_item_id])) {
        $_SESSION['cart'][$cart_item_id]['quantity'] += $quantity;
    } else {
        // If not, add it to the cart
        $_SESSION['cart'][$cart_item_id] = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_code' => $product_code,
            'quantity' => $quantity,
            'size' => $size, // Store the selected size
        );
    }
}

header('Location: cart.php'); // Redirect back to the product listing page

  
?>
