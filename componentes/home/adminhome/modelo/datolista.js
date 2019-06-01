/////actulaizar//listar//eliminar clientes 
$(document).on("ready", function(){
    listar();
    guardar();
    eliminar();
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
    });
  
});
}

var eliminar= function (){
    $("#eliminap").on("click",function(){
        var idusuario=$("#EliminarUsuario #idusuario").val(),
        opcion=$("#EliminarUsuario #opcion").val();
        $.ajax({
            method:"POST",
            url: "../controlador/ControladorEliminar.php",
            data:{"id": idusuario, "opcion": opcion}

        }).done(function(info){
            console.log(info);
            var json_info=JSON.parse(info);
            
            mensajes(json_info);
            limpiar();
            listar();

        });
    });
}



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
            {"data" : "tipo_user"},
            {"data" : "activacion"},
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
var opc_eliminar= function(tbody,table){
    $(tbody).on("click","button.eliminar", function () {
        var data = table.row( $(this).parents("tr")).data();
         //console.log(data);
        var idusuario=$("#EliminarUsuario #idusuario").val(data.id);
    });
}

var mensajes = function( informacion){
    var txt="", color="";
    if (informacion.respuesta =="BIEN") {
        txt="<strong> <b>Bien!!!...</b></strong>  Se han guardado los cambios Correctamente...";
        color="#379911";
    }else if(informacion.respuesta == "ERROR"){
        txt="<strong> <b>Ha Ocurrido un ERROR!!!...</b></strong>  No se ejecuto la consulta Correctamente...";
        color="#C9302C";
    }else if(informacion.respuesta =="EXISTE"){
        txt="<strong> <b>Informacion!!!...</b></strong>  El usuario ya existe...";
        color="#5b94c5";

    } else if(informacion.respuesta == "VACIO"){
        txt="<strong> <b>Advertencia!!!...</b></strong> Debe llenar Todos los Campos Solicitados...";
        color="#ddb11d";
    }

    $(".msg_full").html(txt).css({"color": color});
    $(".msg_full" ).fadeOut(5000, function (){
        $(this).html("");
        $(this).fadeIn(3000);
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
var limp = function (){
    $("#EliminarUsuario #opcion").val("eliminar");
    $("#EliminarUsuario #idusuario").val("");

}








//listar pizzasss//eliminar//actualizar
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
            {"data" : "estado"},
            {"defaultContent":"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
       
        ]
    });
    
}

