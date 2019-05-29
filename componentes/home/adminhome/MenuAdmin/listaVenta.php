<?php 
 require_once '../navar/head.php';
//include '../adminhome.php';
?>
<link rel="stylesheet" href="esti/css/bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="esti/css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="esti/css/font-awesome.min.css">
  <div class="container" id="listaVentas">
      <br>
      <br>
      <br>
      <div>
      <div class="row d-flex justify-content-around card " style="background-image: url('../imGP/7.gif'); width: 100; height: 25vh; ">
       <h2 align="center">Lista De Pedidos</h2>
    </div></div>
     <br>
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-10 col-md-offset-1">
                <article class="card-body">
                
<div class="row" >
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12" style="background-image: url('../imGP/10.jpg'); width: 100; height: 100; ">
			<div class="col-sm-offset-2 col-sm-8" >
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_ventas" class="table table-bordered table-hover" cellspacing="0" width="100%" >
					<thead>
						<tr>								
						
                            <th>Codigo Venta</th>	
                            <th>Fecha</th>
                            <th>cliente</th>	
                            <th>Orden</th>	
                            <th>cantidad</th>
                            <th>Total</th>		
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

    <script>
    $(document).on("ready", function(){
    listar1();
});
var listar1= function(){
    var table= $("#dt_ventas").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
        "ajax":{
            "method":"POST",
            "url":"../controlador/ControladorVenta.php"
        },
        "columns":[

            {"data" : "nv"},
            {"data" : "fecha"},
            {"data" : "cliente"},
            {"data" : "orden"},
            {"data" : "cantidad"},
            {"data" : "total"},
            {"data" : "estado"}
        ]
    });
}

    </script>

    <?php //include_once '../navar/footer.php'; ?>