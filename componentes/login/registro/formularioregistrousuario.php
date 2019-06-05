<!-- Modal -->
<div class="modal fade" id="ModalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro..</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span
        </button>
      </div>
      <div class="modal-body">
      <form  name="FormRegister" method="POST" action="componentes/login/registro/controlregistro.php" >
        <div class="form-group">
        <small id="" class="form-text text-muted">Todos tus datos estan seguros..</small>
    <label for="emailR">Correo Electronico </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.com" required>
  </div>
  <div class="form-group">
    <label for="pass1">Contraseña</label>
    <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Contraseña" required>
  </div>
  
  <div class="form-group">
    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmar contraseña" required>
  </div>
  <a href="javascript:validform()" class="btn btn-outline-success">Registrar</a>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script >
function validform(){
    var email=document.getElementById("email").value;
    var p1=document.getElementById("pass1").value;
    var p2=document.getElementById("pass2").value;
    var espacios = false;
var cont = 0;
while (!espacios && (cont < p1.length)) {
  if (p1.charAt(cont) == " ")
    espacios = true;
  cont++;
}
if(email.length==0 ){
  alertify.error("El campo email no puede quedar vacio.");
  return false;
}
if (espacios) {
  alertify.error("La contraseña no puede contener espacios en blanco");
  return false;
}
if (p1.length == 0 || p2.length == 0) {
  alertify.error("Los campos de la contraseña no pueden quedar vacios");
  return false;
}
if (p1 != p2) {
  alertify.error("Las contraseñas deben de coincidir");
  return false;
} 
else {
    document.FormRegister.submit()
}
}
 </script>