<?php 
require_once '../navar/head.php';
 //require_once '../navar/navar.php';
 //include_once 'modaladd.php';
//include '../adminhome.php';
//include '../adminhome.php';
?>

  <div class="container" id="listaVentas">
      <br>
      <div class="row d-flex justify-content-center align-self-center " style="background-image: url('../imGP/7.gif'); width: 32%; height: 30vh; ">
    </div>
     
     <br>
        <div class="row d-flex justify-content-around mt-5">
            
            <div class="card col-md-10 col-md-offset-1">
            <h2 align="center">Lista De Pedidos</h2>    
                <article class="card-body">
                
<div class="row" >
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12" style="background-image: url('../imGP/15.jpg'); width: 100; height: 100; ">
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
    
    <?php include_once '../navar/footer.php'; ?>
    <script src="../modelo/datolista.js"></script>
    <script>

