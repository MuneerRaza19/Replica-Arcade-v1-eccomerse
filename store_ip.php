<?php
$userIP = $_POST['ip'];

// Insert the IP address into the database
$sql = "INSERT INTO user_ips (ip_address) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $userIP);
$stmt->execute();

// Close the database connection
$stmt->close();
$conn->close();

// Send a response (you can customize this)
echo 'IP address stored successfully.';
?>