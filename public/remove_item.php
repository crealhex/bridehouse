<?php

session_start();

$cod = $_GET['code'];
$can = $_GET['can'];

$cesta = $_SESSION['cart'];

unset($cesta[$cod]);

$_SESSION['cart'] = $cesta;

header('Location: checkout.php');