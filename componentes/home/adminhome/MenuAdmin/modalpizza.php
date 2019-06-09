


<!-- MODAL AGREGAR PIZZA..........-->

<div class="modal fade" id="addpizzas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


            <form action="POST" class="formaddpizza"  >
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Codigo Pizza: </label>
                          <input type="text" name="codPizza" id="codPizza" class="form-control" autofocus placeholder="Codigo" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{5,50}" title="Ingresa el codigo de la pizza min 5, max 50" minlength="5" maxlength="50">
                        </div>

                        <div class="form-group">
                          <label>Nombre Pizza: </label>
                          <input type="text" name="nombrep" id="nombrep" class="form-control" autofocus placeholder="Nombre" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 40 letras" minlength="4" maxlength="40">
                        </div>

                      </div>
                      <div class="col-md-4">


                        <div class="form-group">
                          <label>Ingredientes: </label>
                          <input type="text" name="ingredientes" id="ingredientes" class="form-control" autofocus placeholder="Ingredientes" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{15,150}" title="Ingresa los ingredientes de la pizza" maxlength="150" minlength="15">
                        </div>

                        <div class="form-group">
                          <label>Tamaño: </label>
                          <input type="text" name="tamano" id="tamano" class="form-control" autofocus placeholder="Tamaño" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{5,150}" title="Ingresa el tamaño de la pizza" maxlength="150" minlength="5">

                        </div>

                      </div>
                      <div class="col-md-4">

                        <div class="form-group">
                          <label>Porciones: </label>
                          <input type="number" name="porcion" id="porcion" class="form-control" autofocus placeholder="Porcion" required require min="5" max="20">
                        </div>

                        <div class="form-group">
                          <label>Precio: </label>
                          <input type="number" name="precio" id="precio" class="form-control" autofocus placeholder="Precio" required require title="Ingresa el costo de la pizza" min="85" max="300">

                        </div>


                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                          <label>Imagen: </label>
                          <input type="text" name="imagen" id="imagen" class="form-control" autofocus placeholder="Url de la imagen" required require title="Ingresa una imagen en Url" min="15" max="1000">

                        </div>
                </div>
                <br>
                <div class="form-group" align="center">
                  <!--<button type="submit"  class="btn btn-success">Registrar</button>-->

                  <button type="submit" class="btn btn-success" id="btnagregar">Registrar</button>
                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>


                </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- MODAL UPDATE PIZZA..........-->

<div class="modal fade" id="updatepizza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <article class="card-body">

            <div id="msg_error" align="center" class="alert alert-danger form-control text-center form-group" role="alert" style="display: none"></div>
            <div id="msg_full" align="center" class="alert alert-success form-control text-center form-group" role="alert" style="display: none"></div>


            <form action="POST" class="formulario_pizzaupdate" id="formuppizza">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Codigo Pizza: </label>
                          <input type="text" readonly="readonly" name="codPizza1" id="codPizza1" class="form-control" autofocus placeholder="Codigo" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{4,50}" title="Ingresa el codigo de la pizza min 5, max 50" minlength="5" maxlength="50">
                        </div>

                        <div class="form-group">
                          <label>Nombre Pizza: </label>
                          <input type="text" name="nombrep1" id="nombrep1" class="form-control" autofocus placeholder="Nombre" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]{4,40}" title="No puede ingresar Caracteres especiales (*/&.@-%!$#''?¿¨´+*[]{}_;:) etc, minimo 4, maximo 40 letras" minlength="4" maxlength="40">
                        </div>

                      </div>
                      <div class="col-md-4">


                        <div class="form-group">
                          <label>Ingredientes: </label>
                          <input type="text" name="ingredientes1" id="ingredientes1" class="form-control" autofocus placeholder="Ingredientes" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{15,150}" title="Ingresa los ingredientes de la pizza" maxlength="150" minlength="15">
                        </div>

                        <div class="form-group">
                          <label>Tamaño: </label>
                          <input type="text" name="tamano1" id="tamano1" class="form-control" autofocus placeholder="Tamaño" required require onblur="this.value=this.value.toUpperCase()" pattern="[a-zA-Z\s]*.{5,150}" title="Ingresa el tamaño de la pizza" maxlength="150" minlength="5">

                        </div>

                      </div>
                      <div class="col-md-4">

                        <div class="form-group">
                          <label>Porciones: </label>
                          <input type="number" name="porcion1" id="porcion1" class="form-control" autofocus placeholder="Porcion" required require min="5" max="20">
                        </div>

                        <div class="form-group">
                          <label>Precio: </label>
                          <input type="number" name="precio1" id="precio1" class="form-control" autofocus placeholder="Precio" required require title="Ingresa el costo de la pizza" min="85" max="300">

                        </div>


                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                          <label>Imagen: </label>
                          <input type="text" name="imagen1" id="imagen1" class="form-control" autofocus placeholder="Url de la imagen" required require title="Ingresa una imagen en Url" min="15" max="1000">

                        </div>
                </div>
                <br>
                <div class="form-group" align="center">
                  <!--<button type="submit"  class="btn btn-success">Registrar</button>-->

                  <button type="submit" class="btn btn-success">Guardar</button>
                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>


                </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>

</div>


<!--
  modal eliminar pizzza
-->
<div>
  <form class="EliminarPizza" action="POST">

    <input type="hidden" id="eliminarpizza" name="eliminarpizza" value="0">
    <!--<input type="hidden" id="opcion" name="opcion" value="eliminar">
			 Modal -->
    <div class="modal fade" id="modaleliminarpizza" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="card">
              <h4 align="left" class="modal-title" id="modalEliminarLabel"><b>Eliminar Pizza</b></h4>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <strong data-name=""> ¿Está seguro de eliminar la Pizza?</strong>
          </div>
          <div class="modal-footer">
            <!-- <input type="submit" class="btn btn-success"  id="EliUsuariobtn" data-dismiss="modal" name="EliUsuariobtn" value="Aceptar">  
            <input type="submit" class="btn btn-danger"  data-dismiss="modal" value="Cancelar"> 
            -->
            <button type="submit" class="btn btn-success" id="Elipizzabtn">Aceptar</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>


          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
  </form>
</div>
