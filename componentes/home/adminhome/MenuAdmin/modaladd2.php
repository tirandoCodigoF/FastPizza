 

<?php 
 //require_once '../navar/head.php';
 include_once '../controlador/Conne.php';

$query2 ="SELECT * FROM pizza";
            $consulta1= $con->prepare($query2);
            $consulta1->execute();
$query3 ="SELECT * FROM ventas";
            $consulta2= $con->prepare($query3);
            $consulta2->execute();
?>
 <!--
  dar de alta cliente
<div>
		<form action="POST" class="AltaUsuario">
		
			<div class="modal fade" id="modalAlta" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						
						</div>
						<div class="modal-body">
            <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
              <div id="msg_full" align="center"  class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>
       
              <div class="card">
      
              
              </div>							
              
            <h4 align="center" class="modal-title" id="modalEliminarLabel">Activar Usuario</h4>
          <br>
          <div class="form-group">
            <label>Selecciona un Cliente: </label>
            <br>
           <select name="idcliente" id="idcliente"  class="form-control" required require align="center">
           "<option selected value=''>Seleccionar</option>";
             <?php 
            // include_once '../controlador/Conne.php';
           // $query ="SELECT * FROM clientes";
            //$consulta= $con->prepare($query);
            //$consulta->execute();
            // foreach ($consulta as $fin) {
               
             //  echo "<option  value=".$fin[0].">".$fin[1]."</option>";
            // } ?>
              
           </select>

          </div> 
          <div class="form-group" >
          <label>Act/Des Cuenta: </label><br>
               <select name="activarcuenta" id="activarcuenta" class="form-control" required require align="center">
           <option value="">Seleccionar</option>
           <option value="0">desActivar</option>
           <option value="1">Activar</option>
           </select>
          </div>
              
						<div class="modal-footer">
                                       
        <button type="submit" class="btn btn-success" id="AltaUsuariobtn"  name="AltaUsuariobtn" >Guardar</button>
        <button type="submit" class="btn btn-danger"  data-dismiss="modal" >Cancelar</button>

            </div>
					</div>
				</div>
			</div>
	
		</form>
  </div>	-->

  <div>
		<form action="POST" class="ActulizarVenta" id="ActulizarVenta">
		
			<div class="modal fade" id="ActulizarVenta1" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						
						</div>
						<div class="modal-body">
            <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
            <div id="msg_full" align="center"  class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>
            <h4 align="center" class="modal-title" id="modalEliminarLabel">Actualizar Venta</h4>
          <br>
            <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">	
                      <input type="hidden"  name="numventap" id="numventap" value="0">
                 
                       <div class="form-group">
                          <label> Fecha Venta: </label>
                          <input type="text" readonly="readonly" name="fechap" id="fechap" class="form-control" autofocus placeholder="Fecha" onblur="this.value=this.value.toUpperCase()">
                        </div>
          
              <div class="form-group">
            <label>Cliente: </label>
            <br>
            <input type="text" readonly="readonly" name="clientep" id="clientep" class="form-control" autofocus placeholder="Cliente" onblur="this.value=this.value.toUpperCase()">
                     

          </div> 

          
          
          <div class="form-group">
                          <label>Precio: </label>
                          <input type="number" readonly="readonly name="preciop" id="preciop" value="0" class="form-control" onChange="multiplicar();" autofocus placeholder="Precio" required require>

                        </div>
          <div class="form-group">
                          <label>Total: </label>
                          <input type="text" readonly="readonly" id="totalp" name="totalp" class="form-control" value="" autofocus placeholder="Total" required require title="Ingresa el costo de la pizza">

                        </div>

                         </div>
                         <div class="col-md-6">	
                         <div class="form-group">
                          <label> N° de Venta: </label>
                          <input type="text" readonly="readonly" name="nventap" id="nventap" class="form-control" autofocus placeholder="N° de Venta" required require onblur="this.value=this.value.toUpperCase()">
                        </div>
                        <div class="form-group">
            <label>Selecciona pizza: </label>
            <br>
           <select name="tpizzap" id="tpizzap"  class="form-control" required require align="center" onchange="mostrarValor(this.value);">
           "<option selected value=''>Seleccionar</option>";
             <?php 
            
             foreach ($consulta1 as $fin1) {
               
               echo "<option  value=".$fin1[5].">".$fin1[1]."</option>";
             } ?>
              
           </select>

          </div>
                         

                        
          
        
                        <div class="form-group">
                          <label>Cantidad: </label>
                          <input type="number" name="cantidadp" id="cantidadp" value="" class="form-control" onChange="multiplicar();" min="1" max="20" autofocus placeholder="Precio" required require title="Ingresa el costo de la pizza">
                        </div>
                       
                       


          <div class="form-group" >
          <label>Estatus pizza: </label><br>
               <select name="estadop" id="estadop" class="form-control" required require align="center">
           <option value="">Seleccionar</option>
           <option value="En_Espera">En Espera</option>
           <option value="En_camino">En Camino</option>
           <option value="Entregado">Entregado</option>
           </select>
          </div>
          </div>
          </div>
        </div>
        </div>
						<div class="modal-footer ">
                                       
        <button type="submit"  class="btn btn-success" id="AltaUsuariobtn"  name="AltaUsuariobtn" >Guardar</button>
        <button type="submit" class="btn btn-danger"  data-dismiss="modal" >Cancelar</button>
        
            </div>
					</div>
				</div>
			</div>
	
		</form>
  </div>
  

  <script type="text/javascript">
//<![CDATA[
var mostrarValor = function(x){
document.getElementById('preciop').value=x;
}
//]]>


function multiplicar(){
  m1 = document.getElementById("cantidadp").value;
  m2 = document.getElementById("preciop").value;
  r = m1*m2;
  document.getElementById("totalp").value = r;
}
</script>

<!--
<div>
		<form action="POST" class="ActulizarVenta" id="ActulizarVenta">
		
			<div class="modal fade" id="ActulizarVenta1" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						
						</div>
						<div class="modal-body">
            <div id="msg_error" align="center"  class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
            <div id="msg_full" align="center"  class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>
            <h4 align="center" class="modal-title" id="modalEliminarLabel">Actualizar Venta</h4>
          <br>
            <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">	
                      <input type="hidden"  name="numventap" id="numventap" value="0">
                 
                       <div class="form-group">
                          <label> Fecha Venta: </label>
                          <input type="text" readonly="readonly" name="fechap" id="fechap" class="form-control" autofocus placeholder="Fecha" onblur="this.value=this.value.toUpperCase()">
                        </div>
          
              <div class="form-group">
            <label>Cliente: </label>
            <br>
           <select name="clientep" id="clientep"  class="form-control" required require>
           "<option selected value=''>Seleccionar</option>";
           <?php 
            
            foreach ($consulta as $fin) {
              
              echo "<option  value=".$fin[0].">".$fin[1]."</option>";
            } ?>
             
          </select>

         </div> 
         <div class="form-group">
           <label>Selecciona pizza: </label>
           <br>
          <select name="tpizzap" id="tpizzap"  class="form-control" required require align="center" onchange="mostrarValor(this.value);">
          "<option selected value=''>Seleccionar</option>";
            <?php 
           
            foreach ($consulta1 as $fin1) {
              
              echo "<option  value=".$fin1[5].">".$fin1[1]."</option>";
            } ?>
             
          </select>

         </div> 
         
         <div class="form-group">
                         <label>Precio: </label>
                         <input type="number" name="preciop" id="preciop" value="0" class="form-control" onChange="multiplicar();" autofocus placeholder="Precio" required require>

                       </div>
        
                        </div>
                        <div class="col-md-6">	
                        <div class="form-group">
                         <label> N° de Venta: </label>
                         <input type="text" readonly="readonly" name="nventap" id="nventap" class="form-control" autofocus placeholder="N° de Venta" required require onblur="this.value=this.value.toUpperCase()">
                       </div>
                        

                       
         
       
                       <div class="form-group">
                         <label>Cantidad: </label>
                         <input type="number" name="cantidadp" id="cantidadp" value="0" class="form-control" onChange="multiplicar();" min="1" max="20" autofocus placeholder="Precio" required require title="Ingresa el costo de la pizza">
                       </div>
                      
                       <div class="form-group">
                         <label>Toltal: </label>
                         <input type="text" name="totalp" id="totalp" class="form-control" value="0" autofocus placeholder="Precio" required require title="Ingresa el costo de la pizza">

                       </div>



         <div class="form-group" >
         <label>Estatus pizza: </label><br>
              <select name="estadop" id="estadop" class="form-control" required require align="center">
          <option value="">Seleccionar</option>
          <option value="En_Espera">En Espera</option>
          <option value="En_camino">En Camino</option>
          <option value="Entregado">Entregado</option>
          </select>
         </div>
         </div>
         </div>
       </div>
       </div>
           <div class="modal-footer ">
                                      
       <button type="submit"  class="btn btn-success" id="AltaUsuariobtn"  name="AltaUsuariobtn" >Guardar</button>
       <button type="submit" class="btn btn-danger"  data-dismiss="modal" >Cancelar</button>
       
           </div>
         </div>
       </div>
     </div>
 
   </form>
 </div>
 



-->

