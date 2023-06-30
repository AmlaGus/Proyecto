<?php defined('BASEPATH') OR exit ('No hay acceso al script'); ?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA INVENTARIO BIENES MUEBLES</title>

    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url('informacion/bootstrap5/css/bootstrap.min.css')?>" rel="stylesheet">
    <!--<link href="<?= base_url('informacion/bootstrap5/css/bootstrap.css') ?>" rel="stylesheet">-->

    <link rel="shortcut icon" href="<?= base_url('informacion/images/logo_circulo.jpg')?>">
  
    <!--SCRIPTS PARA MODAL-->
    <script src="<?= base_url('informacion/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('informacion/bootstrap5/js/bootstrap.min.js')?>"></script>

    <style>
      #footer{
        position: absolute;
        bottom: 0;
        width: 98%;
        height: auto;
        line-height: auto;
      }

   </style>
</head>
<body>

<header>
  
<!--<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SISTEMA INVENTARIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('index.php/inicioController')?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php/categoriaController')?>">Categoría</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php/areaController/')?>">Área</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php/empleadoController/')?>">Empleado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php/productoController/')?>">Inventario</a>
        </li>

    
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
</header>



  <div class="b-example-divider"></div>

<div id="cuerpo" class="container-fluid">

<section class="services-sec border">
        <div class="container">
         





            