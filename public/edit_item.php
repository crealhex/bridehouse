<?php

session_start();

$code = $_GET['code'];
$cantidad = $_GET['quantity'];

$cesta = $_SESSION['cart'];

$cesta[$code][2] = $cantidad;

$_SESSION['cart'] = $cesta;

header('Location: checkout.php');