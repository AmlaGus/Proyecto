<?php defined('BASEPATH') OR exit ('No hay acceso al script'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema IEM</title>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
   
    <link href="<?= base_url('informacion/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('informacion/css/font-awesome.css') ?>" rel="stylesheet">
<!--    <link href="--><?//= base_url('informacion/css/twitter-bootstrap.min.css') ?><!--" rel="stylesheet">-->

    <link rel="shortcut icon" href="<?= base_url('informacion/images/logo_circulo.jpg')?>">
    <!--EL ESCRIP DE ABAJO ME COLOCA BIEN LAS IMAGENES O ICONOS DE LA INFORMACION CARRERAS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>

    <!--SCRIPTS PARA MODAL-->
    <script src="<?= base_url('informacion/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('informacion/js/bootstrap.min.js')?>"></script>

</head>

<body>
<header>

<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inventario de Bienes-Muebles IEM</a>      
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
    <li class="nav-item active">
      <img width="100px" src="<?= base_url('informacion/images/IEM_1.png')?>">
      </li>
      <li class="active"><a href="<?= base_url('index.php/inicioController')?>">Inicio</a></li>
      <li><a href="<?= base_url('index.php/inicioController/registrarCategoria')?>">Categoría</a></li>
      <li><a href="<?= base_url('index.php/inicioController/registrArea')?>">Área</a></li>
      <li><a href="<?= base_url('index.php/inicioController/registrarEmpleado')?>">Empleado</a></li>
      <li><a href="<?= base_url('index.php/inicioController/registrarBienes')?>">Inventario</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div>
  </div>
</nav> 
</header>
<div class="container">
<section class="services-sec border">
        <div class="container">
            <div class="well">


    