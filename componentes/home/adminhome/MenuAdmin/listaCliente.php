<?php 
 require_once '../navar/head.php';
include 'modaladd.php';
include '../adminhome.php';
//include 'modaladdP.php';
//include_once '../navar/navar.php';
?>

  <div class="container">
      <br>
      <br>
      <br>
      
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-10 col-md-offset-1">
                <article class="card-body">
                <h2 align="center">Lista Clientes</h2>
                <button type="submit" class="btn btn-info btn-xs" data-toggle="modal" data-target="#addusuarios">Nuevo Usuario</button>
                <div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="108%" height="100%">
					<thead>
						<tr>								
							              <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>	
                            <th>Email</th>	
                            <th>Status</th>	
                            <th></th>
							<th> </th>											
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
    </div>
    
    <?php include_once '../navar/footer.php'; ?>
    <script src="../modelo/datolista.js"></script>
    <script src="../modelo/UsuarioDao.js"></script>
    <script>
   
/*
$(document).ready(function() {
  $('#dt_cliente').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});*/
    </script>

    