
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
            {"data" : "activacion"}
        ]
    });
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
            {"data" : "estado"}
        ]
    });
}
