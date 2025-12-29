<?php
include 'db_connect.php';

$medicine_name = $_POST['medicine_name'];
$expiry_date   = $_POST['expiry_date'];
$donor_name    = $_POST['donor_name'];
$phone_number  = $_POST['phone_number'];
$location      = $_POST['location'];
$quantity      = intval($_POST['quantity']);
$condition     = $_POST['condition'];
$notes         = $_POST['notes'];

// condition is a reserved word in MySQL, so use backticks
$stmt = $conn->prepare("INSERT INTO donation (medicine_name, expiry_date, donor_name, phone_number, location, quantity, `condition`, notes) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssisds", $medicine_name, $expiry_date, $donor_name, $phone_number, $location, $quantity, $condition, $notes);
$stmt->execute();
$stmt->close();
$conn->close();
?>
