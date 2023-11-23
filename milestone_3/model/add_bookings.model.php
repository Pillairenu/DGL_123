<?php
session_start();
require_once('../Database.php');


$propertyId = isset($_GET['room_id']) ? $_GET['room_id'] : null;

$userId = $_SESSION['user_id'];
$bookingDate = date("Y-m-d");

$query = "INSERT INTO bookings (user_id, property_id, booking_date) VALUES (:user_id, :property_id, :booking_date)";
$statement = $pdo->prepare($query);
$statement->bindParam(':user_id', $userId);
$statement->bindParam(':property_id', $propertyId);
$statement->bindParam(':booking_date', $bookingDate);  // Replace with your booking date value
$statement->execute();

header("Location: /DGL_123/milestone_3/bookings");