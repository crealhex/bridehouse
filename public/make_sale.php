<?php
  
  require_once 'includes/head.view.php';
  $amount = 0;
  
  /*
   * REGISTRAR EN TABLA cliente
   */
  $name = $_GET['name'];
  $address = $_GET['address'];
  $phone = $_GET['phone'];
  $date = date('Y-m-d');
  $email = $_GET['email'];
  $password = $_GET['password'];
  
  $username = $_GET['username'];
  $validator = $_GET['validator'];
  
  $sql = "INSERT INTO cliente VALUES (NULL, '{$name}', '{$address}', '{$phone}', '{$date}', '{$email}', '{$password}')";
  mysqli_query($mysql, $sql);
  
  /*
   * REGISTRAR EN TABLA pedido
   */
  foreach ($_SESSION['cart'] as $value) {
    $amount += $value[3];
  }
  
  $id_client = mysqli_insert_id($mysql);
  $ship_city = $address;
  
  $sql = "INSERT INTO pedido VALUES (NULL, {$id_client}, {$amount}, '{$date}', '{$ship_city}')";
  mysqli_query($mysql, $sql);
  
  /*
   * REGISTRAR EN TABLA detalle_pedido
   */
  $id_order = mysqli_insert_id($mysql);
  
  foreach ($_SESSION['cart'] as $value) {
    $id_product = $value[0];
    $quantity = $value[2];
    $price = $value[3];
  
    $sql = "INSERT INTO detalle_pedido (idpedido, idproducto, precio, cantidad)
            VALUES ({$id_order}, '{$id_product}', {$price}, {$quantity})";
    mysqli_query($mysql, $sql);
  }
  
//  unset($_SESSION['cart']);
  
  header('Location: checkout.php');