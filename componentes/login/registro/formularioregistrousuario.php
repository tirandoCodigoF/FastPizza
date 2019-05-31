<!-- Modal -->
<
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