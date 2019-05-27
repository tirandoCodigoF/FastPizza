<?php
 include_once 'MenuAdmin/modaladd.php';
?>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black;">
      <a class="navbar-brand" href="adminhome.php">FastPizzas</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link btn btn-success" href="adminhome.php">     Inicio <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle btn btn-success" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" 
                  aria-expanded="false">    Cliente</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a type="submit" class="dropdown-item" href="../Vista/login/Acceso.php">Lista clientes</a>
                      <a type="submit" class="dropdown-item" data-toggle="modal" data-target="#addusuarios">Agregar Cliente</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle btn btn-success" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" 
                  aria-expanded="false">    Ventas</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="../Vista/login/Acceso.php">Lista Ventas</a>
                      <a class="dropdown-item" href="../Vista/login/Registro.php">Agregar Venta</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link btn btn-success" href="../infoempresa.php">Acerca de.</a>
              </li>
             
              
          </ul>
          <li class="nav-item form-inline my-2 my-lg-2">
                  <a class="nav-link btn btn-danger" href="../../sesiones/cerrarsesion.php">Cerrar Sesion</a>
              </li>
         <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
      </div>
  </nav>
 