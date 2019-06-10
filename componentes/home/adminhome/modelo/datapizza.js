

//listar tipos pizzas//eliminar//actualizar///add
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
            "url":"../controlador/ControladorListaPizza.php"
        },
        "columns":[
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
        var eliminarpizza=$(".EliminarPizza #eliminarpizza").val(data.idPizza);
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
            precio=$("#precio1").val(data.precio),
            imagen= $("#imagen1").val(data.img)
            
            
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
            console.log(info);
            var json_info=JSON.parse(info);
             //console.log(json_info);
             
            mensajes(json_info);
            //limpiar();
           listar2();
            //$('#updatepizza').modal('hide');
            $("#updatepizza .close").click();
           // alertify.success('Actualizado Exitosamente!!!...');
        });
      
    });
    }

//agregar pizza

$(document).on("submit", ".formaddpizza", function(event){
    event.preventDefault();
    var $form = $(this);
  
  // $telf="/^[953]+[0-9]{7}$/";
    var data_form = {
        codPizza: $("#codPizza",$form).val(),
        nombrep: $("#nombrep",$form).val(),
        ingredientes: $("#ingredientes",$form).val(),
        tamano: $("#tamano",$form).val(),
        porcion: $("#porcion", $form).val(),
        precio: $("#precio",$form).val(),
        imagen: $("#imagen",$form).val()
         }
        
    
    $("#msg_error").hide();
    var url_php = 'http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/componentes/home/adminhome/controlador/RegistroPizza.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error3 !== undefined){
         
           alertify.error(res.error3);
             return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full3 !== undefined){
    
        alertify.success('Registro  Exitoso');
        $('input').val("");
        $('select').val("");
        $("#addpizzas .close").click();
        listar2();
        return false;
   } 
    })
    .fail(function ajaxError(e){
        console.log(e);
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});









// eliminar pizza

$(document).on("submit", ".EliminarPizza", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        eliminarpizza: $("#eliminarpizza",$form).val()
        
         }
         if(data_form == null){
            $("#msg_error").text("no se pueden dejar los campos vacios.").show();
            return false;        
        }
    
    $("#msg_error").hide();
    var url_php = '../controlador/EliminarpizzaControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error4 !== undefined){
           // $("#msg_error").text(res.error2).show();
            alertify.error(res.error4);
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full4 !== undefined){
      
        //$("#msg_full").text('registro exitoso').show();
        alertify.success('Eliminado Exitosamente!!!...');
        //this.reset();
       // $('input').val("");
        $('select').val("");
        //$('.addpersona').modal('hide');
        $("#modaleliminarpizza .close").click();
       // $ ('#addpersona'). Modal ('hide');
       // $ ('#addpersona'). modal (). hide (); 
        //onSubmit="this.reset()"
        //$('#addpersona').hide();
        listar2();
        return false;
   } 
    })
    .fail(function ajaxError(e){
        console.log(e);
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});



















    
var mensajes = function( informacion){
    var txt="", color="";
    if (informacion.respuesta =="BIEN") {
        //txt="<strong> <b>Bien!!!...</b></strong>  Se han guardado los cambios Correctamente...";
        //color="#379911";
        alertify.success("<strong> <b>Bien!!!...</b></strong>  Se han guardado los cambios Correctamente...");
    }else if(informacion.respuesta == "ERROR"){
        alertify.error("<strong> <b>Ha Ocurrido un ERROR!!!...</b></strong>  No se ejecuto la consulta Correctamente...");
        //txt="<strong> <b>Ha Ocurrido un ERROR!!!...</b></strong>  No se ejecuto la consulta Correctamente...";

        //color="#C9302C";
    }else if(informacion.respuesta =="EXISTE"){
        alertify.error("<strong> <b>Informacion!!!...</b></strong>  El usuario ya existe...");
      
       // txt="<strong> <b>Informacion!!!...</b></strong>  El usuario ya existe...";
       // color="#5b94c5";

    } else if(informacion.respuesta == "VACIO"){
        alertify.error("<strong> <b>Advertencia!!!...</b></strong> Debe llenar Todos los Campos Solicitados...");
       // txt="<strong> <b>Advertencia!!!...</b></strong> Debe llenar Todos los Campos Solicitados...";
        //color="#ddb11d";
    }

    $(".msg_full").html(txt).css({"color": color});
    $(".msg_full" ).fadeOut(5000, function (){
        $(this).html("");
        $(this).fadeIn(6000);
    });
}