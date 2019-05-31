
$(document).on("ready", function(){
    listar();
});
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

var opc_editar= function(tbody,table){
    $(tbody).on("click","button.editar", function () {
        var data = table.row( $(this).parents("tr")).data();
       console.log(data);
        var idusuario=$("#idusuario1").val(data.id),
            nombre=$("#nombre1").val(data.nombre_cliente),
            telefono=$("#telefono1").val(data.telefono_cliente),
            direccion=$("#direccion1").val(data.direccion_cliente),
            email=$("#email1").val(data.email_cliente),
            privi=$("#priv1").val(data.tipo_user),
            
            activacion=$("#activa1").val(data.activacion);
    })
}
var opc_eliminar= function(tbody,table){
    $(tbody).on("click","button.eliminar", function () {
        var data = table.row( $(this).parents("tr")).data();
         console.log(data);
        var idusuario=$("#EliminarUsuario #idusuario2").val(data.id);
    })
}