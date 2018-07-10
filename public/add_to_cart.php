<?php
  
  session_start();
  
  $code = $_GET['idp'];
  $nombre = $_GET['name'];
  $cantidad = $_GET['quantity'];
  $precio = $_GET['price'];
  
  if ($_SESSION['cart']) {
    $cesta = $_SESSION['cart'];
  }
  
  $cesta[$code] = array($code, $nombre, $cantidad, $precio);
  
  $_SESSION['cart'] = $cesta;
  
  header('Location: checkout.php');