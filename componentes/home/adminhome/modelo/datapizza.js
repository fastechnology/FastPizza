

//listar tipos pizzas//eliminar//actualizar
$(document).on("ready", function(){
    listar2();
    guardarpizza();
});
var listar2= function(){
    var table= $("#dt_pizzas").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"destroy":true,
        "ajax":{
            "method":"POST",
            "url":"../controlador/ControladorPizza.php"
        },
        "columns":[

            {"data" : "codPizza"},
            {"data" : "tipo"},
            {"data" : "ingredientes"},
            {"data" : "tamano"},
            {"data" : "porciones"},
            {"data" : "precio"},
         {"defaultContent":"<button type='button' class='editarpizza btn btn-primary 'data-toggle='modal' data-target='#updatepizza'><i class='fa fa-pencil-square-o'></i></button>	  <button type='button' class='eliminarpizza btn btn-danger' data-toggle='modal' data-target='#modaleliminarpizza' ><i class='fa fa-trash-o'></i></button>"}
       
        ]
    });
    opc_editarpizza("#dt_pizzas tbody", table);
    opc_eliminarpizza("#dt_pizzas tbody", table);
    
}

var opc_eliminarpizza= function(tbody,table){
    $(tbody).on("click","button.eliminarpizza", function () {
        var data = table.row( $(this).parents("tr")).data();
         //console.log(data);
        var eliminarpizza=$(".EliminarPizza #eliminarpizza").val(data.codPizza);
    });
}


var opc_editarpizza= function(tbody,table){
    $(tbody).on("click","button.editarpizza", function () {
        var data = table.row( $(this).parents("tr")).data();
      // console.log(data);
        var codPizza=$("#codPizza1").val(data.codPizza),
            nombrep=$("#nombrep1").val(data.tipo),
            ingredientes=$("#ingredientes1").val(data.ingredientes),
            tamano=$("#tamano1").val(data.tamano),
            porcion=$("#porcion1").val(data.porciones),
            precio=$("#precio1").val(data.precio)
            
            
    });
}

var guardarpizza = function (){
    $("#formuppizza").on("submit", function(e){
        e.preventDefault();
        var frm =$(this).serialize();
        $.ajax({
            method: "POST",
            url: "../controlador/ControladorActulizarPizza.php",
            data: frm
        }).done(function(info){
            //console.log(info);
            var json_info=JSON.parse(info);
             //console.log(json_info);
             
            mensajes(json_info);
            limpiar();
            listar2();
            $('#updatepizza').modal('hide');
            $("#updatepizza .close").click();
            //alertify.success('Actualizado Exitosamente!!!...');
        });
      
    });
    }
    