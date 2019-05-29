<?php 
 require_once '../navar/head.php';

?>
<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="esti/css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/font-awesome.min.css">
  <div class="container">
      <br>
      <br>
      <br>
      <h2 align="center">Lista Clientes</h2>
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-12 col-md-offset-6">
                <article class="card-body">
                
<div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>								
							<th>Nombre Completo</th>
							<th>Apellidos</th>
                            <th>Direccion</th>
                            <th>Telefono</th>	
                            <th>Correo electronico</th>	
                            <th>Status</th>	
							<th></th>											
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
    </div>
    
    <script src="esti/js/jquery-1.12.3.js"></script>
	<script src="esti/js/bootstrap.min.js"></script>
	<script src="esti/js/jquery.dataTables.min.js"></script>
	<script src="esti/js/dataTables.bootstrap.js"></script>
	<!--botones DataTables-->	
	<script src="esti/js/dataTables.buttons.min.js"></script>
	<script src="esti/js/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="esti/js/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="esti/js/pdfmake.min.js"></script>
	<script src="esti/js/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="esti/js/buttons.html5.min.js"></script>

    <?php //include_once '../navar/footer.php'; ?>