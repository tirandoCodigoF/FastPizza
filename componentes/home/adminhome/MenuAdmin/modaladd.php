<?php 
 require_once './navar/head.php';
 require '../../basededatos/Conne.php';
 //require '../../basededatos/conexion.php';

 ?>
<!-- MODAL AGREGAR USUARIOS..........-->
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">hola
</button>-->
<!-- Modal -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<div class="modal fade" id="addusuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>
  

<div class="modal-dialog" role="document" id="addpersona" name="addpersona">
    <div class="modal-content" id="addpersona" name="addpersona">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><B>Formulario de Registro</B></h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<div class="container">
  <div class="row d-flex justify-content-around mt-1">

    <div class="card cold-md-6 cold-md-offset-6">
      <article class="card-body">
      
        <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
        <div id="msg_full" align="center"  class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>
       
        <form action="POST" class="formulario_registro" >
         <div class="form-group">
          <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">
              <div class="form-group">
            <label>Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control" autofocus placeholder="Nombre" required require  onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras"  maxlength="30">
          </div> 
          <!-- <div class="form-group">
            <label>Apellidos: </label>
            <input type="text" name="apellido" id="apellido" class="form-control"  autofocus placeholder="Apellidos" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras" maxlength="30">
          </div> 
          <div class="form-group">
            <label>Edad: </label>
            <input type="number" name="edad" id="edad" class="form-control"  autofocus placeholder="edad" min="18" max="60" required require >
          </div> 
          
          <div class="form-group">
            <label>Sexo: </label>
           <select name="sexo" id="sexo" class="form-control" required require>
           <option selected>Seleccionar</option>
            <option value="F">Femenino</option>
           <option value="M">Masculino</option>
           </select>
          
          </div> -->
          </div>
          <div class="col-md-4">
            
            
           <div class="form-group">
            <label>Telefono: </label>
            <input type="tel" name="telefono" id="telefono" class="form-control" autofocus placeholder="(953)-121-54-12" required require pattern="[0-9]{3}[0-9]{7}" title="Formato correcto (953)-121-54-12,No puede ingresar Caracteres especiales (*/&.@-,%!) etc, Se requieren 10 digitos" minlength="10" maxlength="10">
          </div> 
         
          <div class="form-group">
            <label>Direccion: </label>
            <input type="text" name="direccion" id="direccion" class="form-control" autofocus placeholder="Dirección" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{20,100}" title="Ingresa tu direccion completa: calle, numero, colonia" maxlength="100">
  
           <!--<select name="fk_direccion" id="fk_direccion">
             
             <?php /*
            $query ="SELECT * FROM direccion";
            $consulta= $con->prepare($query);
            $consulta->execute();
             foreach ($consulta as $fin) {
               echo "<option selected value=".$fin[0]." Calle: ".$fin[2]." N°: ".$fin[3]." Colonia: ".$fin[1].">".$fin[0]." Calle: ".$fin[2]." N°: ".$fin[3]." Colonia: ".$fin[1]."</option>";
             } */?>

           </select>-->

          </div> 
          <!--
          <div class="form-group">
            <label>Ciudad: </label>
            <input type="text" name="ciudad" id="ciudad" class="form-control" autofocus placeholder="Cuidad" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{5,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, Ciudad mayor a 10 letras y menor a 40"  maxlength="40" >
          </div> 
          <div class="form-group">
            <label>Estado: </label>
            <input type="text" name="estado" id="estado" class="form-control" autofocus placeholder="Estado" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{5,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, Estado mayor 5 letras y menor a 40"  maxlength="40">
          </div>-->
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Email: </label>
            <input type="email" name="email" class="form-control" require autofocus placeholder="Email">
          </div>  
          <div class="form-group">
            <label>Contraseña: </label>
            <input type="password" name="password" autocomplete="cc-number" autofocus require placeholder="********" class="form-control">
          </div>
          <div class="form-group">
          <label>Privilegio: </label>
           <select name="priv" id="priv" class="form-control" required require>
           <option selected>Seleccionar</option>
            <option value="1">Administrador</option>
           <option value="2">Vendedor</option>
           <option value="3">Cliente</option>
           </select>
          </div>
          <div class="form-group">
          <label>Activar Usuario: </label>
           <select name="activa" id="activa" class="form-control" required require>
           <option selected required>Seleccionar</option>
           <option value="1">Activar</option>
            <option value="0">desActivar</option>
           
           </select>
          </div>

           </div>
           </div>
           </div>
            </div>
            <br>
          <div class="form-group" align="center">
            <!--<button type="submit"  class="btn btn-success">Registrar</button>-->
           
        <button type="submit" class="btn btn-success">Registrar</button>
        <button type="submit" class="btn btn-danger"  data-dismiss="modal" >Cerrar</button>

     
          </div>
        </form>   
      </article>
    </div>
  </div>
</div>
      </div>
     
    </div>
  </div>
</div>

<!-- MODAL AGREGAR PIZZA..........-->
<div class="modal fade" id="addpizzas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><B>AGREGAR PIZZA</B></h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<div class="container">
  <div class="row d-flex justify-content-around mt-1">

    <div class="card cold-md-6 cold-md-offset-6">
      <article class="card-body">
      
        <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
       
        <form action="POST" class="formulario_pizzas" enctype="multipart/form-data">
         <div class="form-group">
          <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">
            <div class="form-group">
            <label>imagen: </label>
            <input type="file" name="imagen" id="imagen" class="form-control"  autofocus placeholder="imagen de la pizza" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras" maxlength="30">
             </div> 
            <div class="form-group">
            <label>Nombre: </label>
            <input type="text" name="nombrep" id="nombrep" class="form-control" autofocus placeholder="Nombre de la pizza" required require  onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras"  maxlength="30">
          </div> 
          
          </div>
          <div class="col-md-4">
            
            
           <div class="form-group">
            <label>Ingredientes: </label>
            <input type="text" name="ingredientes" id="ingredientes" class="form-control" autofocus placeholder="Ingredientes" required require pattern="[0-9]{3}[0-9]{7}" title="Formato correcto (953)-121-54-12,No puede ingresar Caracteres especiales (*/&.@-,%!) etc, Se requieren 10 digitos" minlength="10" maxlength="10">
          </div> 
         
          <div class="form-group">
            <label>Descripcion: </label>
            <input type="text" name="descrip" id="descrip" class="form-control" autofocus placeholder="Descripcion" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{20,100}" title="Ingresa tu direccion completa: calle, numero, colonia" maxlength="100">
  
          </div> 
      
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label>Tamaño: </label>
           <select name="tamaño" id="tamaño" class="form-control" required require>
           <option selected>Seleccionar</option>
            <option value="1">Pequeña</option>
           <option value="2">Mediana</option>
           <option value="3">Grande</option>
           <option value="4">Extragrande</option>
           <option value="5">Familiar</option>
           </select>
          
          </div>  
          <div class="form-group">
            <label>Costo: </label>
            <select name="precio" id="precio">
            <?php 
            //$query ="SELECT * FROM preciopizza";
            //$consulta= $con->prepare($query);
            //$consulta->execute();
             //foreach ($consulta as $fin) {
               //echo "<option selected value=".$fin[0].">".$fin[1]."</option>";
             //} ?>

           </select>
                 </div>

           </div>
           </div>
           </div>
            </div>
            <br>
          <div class="form-group" align="center">
            <!--<button type="submit"  class="btn btn-success">Registrar</button>-->
           
        <button type="submit" class="btn btn-success">Registrar</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>

     
          </div>
        </form>   
      </article>
    </div>
  </div>
</div>
      </div>
     
    </div>
  </div>
</div>

<?php include_once './navar/footer.php'; ?>