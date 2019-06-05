/////actulaizar//listar//eliminar clientes 
$(document).on("ready", function(){
    listar();
    guardar();
    guardarpizza();
    guardarventa();
   listar1();
   listar2();
});
$("#btn_listar").on("click", function(){
    listar();
});

var guardar = function (){
$("#form").on("submit", function(e){
    e.preventDefault();
    var frm =$(this).serialize();
    $.ajax({
        method: "POST",
        url: "../controlador/ControladorEliminar.php",
        data: frm
    }).done(function(info){
        //console.log(info);
        var json_info=JSON.parse(info);
         //console.log(json_info);
         
        mensajes(json_info);
        limpiar();
        listar();
        $('#upusuarios1').modal('hide');
        $("#upusuarios1 .close").click();
        //alertify.success('Actualizado Exitosamente!!!...');
    });
  
});
}
/*
var eliminar2 = function (){
    $("#eliminaruser").on("click", function(e){
        e.preventDefault();
        var frm =$(this).serialize();
        console.log(frm);
        $.ajax({
            method: "POST",
            url: "../controlador/ControladorGuardar.php",
            data: frm
            
        }).done(function(info){
            //console.log(info);
            var json_info=JSON.parse(info);
             //console.log(json_info);
            mensajes(json_info);
            limpiar2();
            listar();
        });
      
    });
    }*/
    /*

var eliminar= function (){
    $("#eliminap").on("click",function(){
        var idusuario=$("#EliminarUsuario #idusuario").val(),
        opcion=$("#EliminarUsuario #opcion").val();
        $.ajax({
            method:"POST",
            url: "../controlador/ControladorEliminar.php",
            data:{"idusuario": idusuario, "opcion": opcion}

        }).done(function(info){
            console.log(info);
            var json_info=JSON.parse(info);
            
            mensajes(json_info);
            limpiar();
            listar();

        });
    });
}

*/

var listar= function(){
    var table= $("#dt_cliente").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }, "destroy":true,
        "ajax":{
            "method":"POST",
            "url":"../controlador/ControladorCliente.php"
        },
        "columns":[
            {"data" : "nombre_cliente"},
            {"data" : "direccion_cliente"},
            {"data" : "telefono_cliente"},
            {"data" : "email_cliente"},
            {"defaultContent":"<button type='button' class='editar btn btn-primary 'data-toggle='modal' data-target='#upusuarios1'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
        ]
    });
    opc_editar("#dt_cliente tbody", table);
    opc_eliminar("#dt_cliente tbody", table);
}


var opc_editar= function(tbody,table){
    $(tbody).on("click","button.editar", function () {
        var data = table.row( $(this).parents("tr")).data();
      // console.log(data);
        var idusuario=$("#idusuario").val(data.id),
            nombre=$("#nombre1").val(data.nombre_cliente),
            telefono=$("#telefono1").val(data.telefono_cliente),
            direccion=$("#direccion1").val(data.direccion_cliente),
            email=$("#email1").val(data.email_cliente),
            privi=$("#priv1").val(data.tipo_user),
            
            activacion=$("#activa1").val(data.activacion);
    });
}
/*
var opc_elimanar2= function(tbody,table){
    $(tbody).on("click","button.eliminar", function () {
        var data = table.row( $(this).parents("tr")).data();
      // console.log(data);
        var idusuario=$("#idusuario2").val(data.id),
            nombre=$("#nombre2").val(data.nombre_cliente),
            telefono=$("#telefono2").val(data.telefono_cliente),
            direccion=$("#direccion2").val(data.direccion_cliente),
            email=$("#email2").val(data.email_cliente),
            privi=$("#priv2").val(data.tipo_user),
            pass=$("#pass2").val(data.pass_cliente),
            activacion=$("#activa2").val(data.activacion);
    });
}*/

var opc_eliminar= function(tbody,table){
    $(tbody).on("click","button.eliminar", function () {
        var data = table.row( $(this).parents("tr")).data();
         //console.log(data);
        var idusuario=$(".EliminarUsuario #eliminaruser").val(data.id);
    });
}

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
 var limpiar = function (){
        $("#form #opcion").val("modificar");
        $("#form #idusuario").val("");
        $("#nombre1").val("").focus();
        $("#telefono1").val("");
        $("#direccion1").val("");
        $("#email1").val("");
        $("#priv1").val("");
        $("#activa1").val("");
    
     //$('input').val("");
     //$('select').val("");
 }
 /*var limpiar2 = function (){
    $("#form2 #opcion").val("eliminar");
    $("#form2 #idusuario2").val("");
    $("#nombre2").val("").focus();
    $("#telefono2").val("");
    $("#direccion2").val("");
    $("#email2").val("");
    $("#priv2").val("");
    $("#pass2").val("");
    $("#activa2").val("");

 //$('input').val("");
 //$('select').val("");
}*/
var limp = function (){
    $("#EliminarUsuario #opcion").val("eliminar");
    $("#EliminarUsuario #idusuario").val("");

}








//listar ventas pedidos//eliminar//actualizar
$(document).on("ready", function(){
    listar1();
});
var listar1= function(){
    var table= $("#dt_ventas").DataTable({
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },"destroy":true,
        "ajax":{
            "method":"POST",
            "url":"../controlador/ControladorVenta.php"
        },
        "columns":[

            {"data" : "nv"},
            {"data" : "fecha"},
            {"data" : "cliente"},
            {"data" : "orden"},
            {"data" : "cantidad"},
            {"data" : "total"},
            {"data" : "estadopizza"},
            {"defaultContent":"<button type='button' class='editarv btn btn-primary 'data-toggle='modal' data-target='#ActulizarVenta1'><i class='fa fa-pencil-square-o'></i></button>     <button type='button' class='eliminarv btn btn-danger' data-toggle='modal' data-target='#modaleliminarventa' ><i class='fa fa-trash-o'></i></button>"}
       
        ]
    });
    opc_editarventa("#dt_ventas tbody", table);
    opc_eliminarventa("#dt_ventas tbody", table);
    
}
var opc_eliminarventa= function(tbody,table){
    $(tbody).on("click","button.eliminarv", function () {
        var data = table.row( $(this).parents("tr")).data();
         //console.log(data);
        var eliminarpizza=$(".EliminarVenta #eliminarventa").val(data.numVenta);
    });
}

var opc_editarventa= function(tbody,table){
    $(tbody).on("click","button.editarv", function () {
        var data = table.row( $(this).parents("tr")).data();
      // console.log(data);
        var numventap=$("#numventap").val(data.numVenta),
            fechap=$("#fechap").val(data.fecha),
            clientep=$("#clientep").val(data.cliente),
            tpizzap=$("#tpizzap").val(data.orden),
            cantidadp=$("#cantidadp").val(data.cantidad),
            totalp=$("#totalp").val(data.total),
            estadop=$("#estadop").val(data.estadopizza),
            nventap=$("#nventap").val(data.nv)
            
            
    });
}

var guardarventa = function (){
    $("#ActulizarVenta").on("submit", function(e){
        e.preventDefault();
        var frm =$(this).serialize();
        $.ajax({
            method: "POST",
            url: "../controlador/ControladorActulizarVenta.php",
            data: frm
        }).done(function(info){
            console.log(info);
            var json_info=JSON.parse(info);
             //console.log(json_info);
             
            mensajes(json_info);
            //limpiar();
            listar1();
            //$('#ActulizarVenta').modal('hide');
           // $("#ActulizarVenta .close").click();
            //alertify.success('Actualizado Exitosamente!!!...');
        });
      
    });
    }









//listar tipos pizzas//eliminar//actualizar
$(document).on("ready", function(){
    listar2();
});
var listar2= function(){
    var table= $("#dt_pizza").DataTable({
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
    opc_editarpizza("#dt_pizza tbody", table);
    opc_eliminarpizza("#dt_pizza tbody", table);
    
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
    