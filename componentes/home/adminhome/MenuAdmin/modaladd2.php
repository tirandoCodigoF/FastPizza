  <!--
  dar de alta cliente
-->
<?php 
 require_once '../navar/head.php';
?>
<div>
		<form action="POST" class="AltaUsuario">
		
			<!-- Modal -->
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
             include_once '../controlador/Conne.php';
            $query ="SELECT * FROM clientes";
            $consulta= $con->prepare($query);
            $consulta->execute();
             foreach ($consulta as $fin) {
               
               echo "<option  value=".$fin[0].">".$fin[1]."</option>";
             } ?>
              
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

           <!-- <input type="submit" class="btn btn-success" id="AltaUsuariobtn"  name="AltaUsuariobtn" value="Guardar">  
            <input type="submit" class="btn btn-danger"  data-dismiss="modal" value="Cerrar"> 
       
							<button type="submit" id="AltaUsuariobtn"  name="AltaUsuariobtn" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
							<button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            -->
            </div>
					</div>
				</div>
			</div>
			<!-- Modal -->
		</form>
  </div>
  




