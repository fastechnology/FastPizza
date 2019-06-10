<?php
//require_once './navar/head.php';
//require '../../basededatos/Conne.php';
//require '../../basededatos/conexion.php';

?>
<!-- MODAL AGREGAR USUARIOS..........-->
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">hola
</button>-->
<!-- Modal -->
<div class="modal fade" id="addusuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><B>Formulario de Registro</B></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card cold-md-6 cold-md-offset-6">
          <article class="card-body">

            <div id="msg_error" align="center" class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
            <div id="msg_full" align="center" class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>

            <form action="POST" class="formulario_registro">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nombre: </label>
                          <input type="text" name="nombre" id="nombre" class="form-control" autofocus placeholder="Nombre" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras" maxlength="30">
                        </div>
                      
                        <div class="form-group">
                          <label>Telefono: </label>
                          <input type="tel" name="telefono" id="telefono" class="form-control" autofocus placeholder="(953)-121-54-12" required require pattern="[0-9]{3}[0-9]{7}" title="Formato correcto (953)-121-54-12,No puede ingresar Caracteres especiales (*/&.@-,%!) etc, Se requieren 10 digitos" minlength="10" maxlength="10">
                        </div>

                        <div class="form-group">
                          <label>Direccion: </label>
                          <input type="text" name="direccion" id="direccion" class="form-control" autofocus placeholder="Dirección" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{20,100}" title="Ingresa tu direccion completa: calle, numero, colonia" maxlength="100">

                        </div>
                      </div>
                      <div class="col-md-6">
                      
                        <div class="form-group">
                          <label>Email: </label>
                          <input type="email" name="email" class="form-control" require required autofocus placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label>Contraseña: </label>
                          <input type="password" name="password" autocomplete="cc-number" autofocus require required placeholder="********" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Privilegio: </label>
                          <select name="priv" id="priv" class="form-control" required require>
                            <option value="">Seleccionar</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                            <option value="3">Vendedor</option>

                          </select>
                        </div>
                      </div>

                    </div>
                    <div class="form-group">
                      <label>Act/Des Cuenta: </label><br>
                      <select name="activa" id="activa" class="form-control" required require align="center">
                        <option value="">Seleccionar</option>
                        <option value="1">Activar</option>
                        <option value="0">desActivar</option>

                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group" align="center">
                  <button type="submit" class="btn btn-success">Registrar</button>
                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>


                </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>


<!-- Modal  update cliente-->
<div class="modal fade" id="upusuarios1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><B>Actualizar Registro</B></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card cold-md-6 cold-md-offset-6">
          <div class="col-sm-offset-1 col-sm-12">
            <!--	<p class="msg_full"></p>-->
          </div>
          <article class="card-body">


            <form action="POST" class="formulario_registro1" id="form">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">

                        <input type="hidden" name="idusuario" id="idusuario" value="0">
                        <input type="hidden" id="opcion" name="opcion" value="modificar">
                        <div class="form-group">
                          <label>Nombre: </label>
                          <input type="text" name="nombre1" id="nombre1" class="form-control" autofocus placeholder="Nombre" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,30}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 30 letras" maxlength="30">
                        </div>
                      
                        <div class="form-group">
                          <label>Telefono: </label>
                          <input type="tel" name="telefono1" id="telefono1" class="form-control" autofocus placeholder="(953)-121-54-12" required require pattern="[0-9]{3}[0-9]{7}" title="Formato correcto (953)-121-54-12,No puede ingresar Caracteres especiales (*/&.@-,%!) etc, Se requieren 10 digitos" minlength="10" maxlength="10">
                        </div>

                        <div class="form-group">
                          <label>Direccion: </label>
                          <input type="text" name="direccion1" id="direccion1" class="form-control" autofocus placeholder="Dirección" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{20,100}" title="Ingresa tu direccion completa: calle, numero, colonia" maxlength="100">

                      

                        </div>
                      </div>
                      <div class="col-md-6">

                        <div class="form-group">
                          <label>Email: </label>
                          <input type="email" name="email1" id="email1" class="form-control" require required autofocus placeholder="Email">
                        </div>

                        <div class="form-group">
                          <label>Privilegio: </label>
                          <select name="priv1" id="priv1" class="form-control" required require>
                            <option value="">Seleccionar</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                            <option value="3">Vendedor</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Act/Des Cuenta: </label><br>
                           <select name="activa1" id="activa1" class="form-control" required require align="center">
                            <option value="">Seleccionar</option>
                            <option value="1">Activar</option>
                            <option value="0">desActivar</option>

                          </select>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
                <br>
                <div class="form-group" align="center">
                
                  <input type="submit" class="btn btn-success" value="Guardar">
                  <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Cerrar">



                </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
<!--
  modal eliminar cliente
-->
<div>
  <form class="EliminarUsuario" action="POST">

    <input type="hidden" id="eliminaruser" name="eliminaruser" value="0">
    <!--<input type="hidden" id="opcion" name="opcion" value="eliminar">
			 Modal -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="card">
              <h4 align="left" class="modal-title" id="modalEliminarLabel"><b>Eliminar Usuario</b></h4>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <strong data-name=""> ¿Está seguro de eliminar al usuario?</strong>
          </div>
          <div class="modal-footer">
            <!-- <input type="submit" class="btn btn-success"  id="EliUsuariobtn" data-dismiss="modal" name="EliUsuariobtn" value="Aceptar">  
            <input type="submit" class="btn btn-danger"  data-dismiss="modal" value="Cancelar"> 
            -->
            <button type="submit" class="btn btn-success" id="EliUsuariobtn">Aceptar</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>


          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </form>
</div>




<!--
  modal eliminar ventas...
-->
<div>
  <form class="EliminarVenta" id="EliminarVenta" action="POST">

    <input type="hidden" id="eliminarventa" name="eliminarventa" value="0">
    <!--<input type="hidden" id="opcion" name="opcion" value="eliminar">
			 Modal -->
    <div class="modal fade" id="modaleliminarventa" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="card">
              <h4 align="left" class="modal-title" id="modalEliminarLabel"><b>Eliminar Venta</b></h4>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <strong data-name=""> ¿Está seguro de eliminar la Venta!!!!?</strong>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Aceptar</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>


          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </form>
</div>


