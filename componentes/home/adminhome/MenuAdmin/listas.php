<?php 
 require_once '../navar/head.php';

?>
  <div class="container" id="listaclientes" name="listaclientes">
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
    </article>
            </div>
        </div>
    </div>
    <script>
    $(document).on("ready", function(){
    listar();
});
var listar= function(){
    var table= $("#dt_cliente").DataTable({
        "ajax":{
            "method":"POST",
            "url":"listarCliente.php"
        },
        "columns":[
            {"data":"nombre_cliente"},
            {"data":"direccion_cliente"},
            {"data":"telefono_cliente"},
            {"data":"email_cliente"},
            {"data":"activacion"}
        ]
    });
}

</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
 
    <?php include_once '../navar/footer.php'; ?>