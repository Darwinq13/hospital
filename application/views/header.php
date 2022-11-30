<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hospital central</title>
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo base_url('assets/img/por1.png')?>"alt="Logo" height="100px">
      </div>
      <div class="col-md-5 text-center">
        <h3>HOSPITAL CENTRAL</h3>
      </div>
      <div class="col-md-4">
        <div class="text-center">
          <img src="<?php echo base_url('assets/img/pro2.png')?>"alt="Logo" height="100px">
        </div>
      </div>
    </div>
          <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- APP MATRICULA -->
            <a class="navbar-brand" href="<?php echo site_url(); ?>">APP HOSPITAL </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url("empleados/index"); ?>">Listado</a></li>
                  <li><a href="<?php echo site_url("empleados/nuevo"); ?>">Nuevo</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Turnos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url("turnos/index"); ?>">Listado</a></li>
                  <li><a href="<?php echo site_url("turnos/nuevo"); ?>">Nuevo</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sugerencias <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url("sugerencias/index"); ?>">Listado</a></li>
                  <li><a href="<?php echo site_url("sugerencias/nuevo"); ?>">Nuevo</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url("pacientes/index"); ?>">Listado</a></li>
                  <li><a href="<?php echo site_url("pacientes/nuevo"); ?>">Nuevo</a></li>
                </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Especialidades <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url("especialidades/index"); ?>">Listado</a></li>
                    <li><a href="<?php echo site_url("especialidades/nuevo"); ?>">Nuevo</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doctores <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url("doctores/index"); ?>">Listado</a></li>
                    <li><a href="<?php echo site_url("doctores/nuevo"); ?>">Nuevo</a></li>
                  </ul>
                </li>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
