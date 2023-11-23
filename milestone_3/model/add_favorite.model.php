<?php
session_start();
require_once('../Database.php');


$propertyId = isset($_GET['room_id']) ? $_GET['room_id'] : null;

$userId = $_SESSION['user_id'];

$query = "INSERT INTO favorites (user_id, property_id) VALUES (:user_id, :property_id)";
$statement = $pdo->prepare($query);
$statement->bindParam(':user_id', $userId);
$statement->bindParam(':property_id', $propertyId);
$statement->execute();

header("Location: /DGL_123/milestone_3/favorite");