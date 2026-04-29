<?php
include 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

$item = [
    "id" => $id,
    "name" => $name,
    "price" => $price,
    "qty" => 1
];

$_SESSION['cart'][] = $item;

header("Location: index.php");
?>