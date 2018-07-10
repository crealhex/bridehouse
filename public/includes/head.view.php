<?php
  session_start();
  
  define('APP_PATH', __DIR__ . '/../..');
  
  define('PUBLIC_PATH', 'http://www.bridehouse.com');
  
  require_once APP_PATH . '/config/database.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <meta name="description" content="Bienvenidos a Bridehouse">
  <title>Inicio | Bridehouse</title>
  <script src="<?= PUBLIC_PATH ?>/js/font-awesome.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
  <link rel="stylesheet" href="<?= PUBLIC_PATH ?>/css/main.css">
</head>
<body>