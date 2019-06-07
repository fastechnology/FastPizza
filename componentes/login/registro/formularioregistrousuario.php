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
      <form action="http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/login/registro/registro.php"  name="FormRegister" method="POST">
        <div class="form-group row">
      <div class="col-sm-6">
      <small id="" class="form-text text-muted">Todos tus datos estan seguros..</small>
    <label for="emailR">Correo Electronico </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.com" required>
  </div>
  <div class="col-sm-6">
    <label for="pass1">Contraseña</label>
    <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Contraseña" required>
    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmar contraseña" required>
  </div>
  <div class="col-sm-6">
    <label for="nombre">Nombre completo:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre verdadero :)" required>
  </div>
  <div class="col-sm-6">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ej. Calle, numero, colonia/barrio" required>
  </div>
  <div class="col-sm-6">
    <label for="telefono">Número de teléfono:</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="Ej. 9531522689" required>
  </div>
  <div class="col-sm-6">
  <a href="javascript:validform()" class="btn btn-outline-success">Registrar</a>
        </form>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
      </div>
      </div>
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