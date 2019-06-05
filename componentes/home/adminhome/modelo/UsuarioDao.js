$(document).on("ready", function(){
    listar();
    guardar();
    listar2();
    listar1();
   // eliminar();
});

$(document).on("submit", ".formulario_registro", function(event){
    event.preventDefault();
    var $form = $(this);
  // $telf="/^[953]+[0-9]{7}$/";
    var data_form = {
        nombre: $("#nombre",$form).val(),
        //apellido:$("#apellido", $form).val(),
        //edad: $("#edad",$form).val(),
        //sexo:$("#sexo", $form).val(),
        telefono:$("#telefono",$form).val(),
        direccion: $("#direccion",$form).val(),
        //ciudad: $("#ciudad",$form).val(),
        //estado: $("#estado",$form).val(),
        priv: $("#priv",$form).val(),
        email: $("input[type='email']",$form).val(),
        password: $("input[type='password']", $form).val(),
        activa: $("#activa",$form).val()
    }
    if(data_form.email.length < 6 ){
        $("#msg_error").text("Necesitamos un email valido.").show();
        return false;        
    }else if(data_form.password.length < 8){
        $("#msg_error").text("Tu password debe ser minimo de 8 caracteres.").show();
        return false;   
    }
    else if (data_form.nombre.length < 4 || data_form.nombre.length > 30) {
        $("#msg_error").text("Ingresa tu nombre correcto minimo 4 maximo 30").show();
        return false;
    }
    
    /*else if(data_form.edad.length == null || data_form.edad.length < 1 || data_form.edad.length > 2)
    {
        $("#msg_error").text("Ingresa tu edad").show();
        return false;
    }*/


    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/RegistroControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error !== undefined){
           // $("#msg_error").text(res.error).show();
           alertify.error(res.error);
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full !== undefined){
      
        //$("#msg_full").text('registro exitoso').show();
        alertify.success('Registro Exitoso');
        //this.reset();
        $('input').val("");
        $('select').val("");
        $('#addusuarios').modal('hide');
       
        
       // $ ('#addpersona'). Modal ('hide');
       // $ ('#addpersona'). modal (). hide (); 
        //onSubmit="this.reset()"
        //$('#addpersona').hide();
        listar();
        //$("#addusuarios .close").click();
        return false;
   } 
    })
   
    .fail(function ajaxError(e){
        console.log(e);
        $("#msg_error").text(e).show();
    })
    .always(function ajaxSiempre(){
        console.log('Final de la llamada ajax.');
    })
    return false;
});


$(document).on("submit", ".formulario_pizzas", function(event){
    event.preventDefault();
    var $form = $(this);
  
  // $telf="/^[953]+[0-9]{7}$/";
    var data_form = {
        codPizza: $("#codPizza",$form).val(),
        nombrep: $("#nombrep",$form).val(),
        ingredientes: $("#ingredientes",$form).val(),
        tamano: $("#tamano",$form).val(),
        porcion: $("#porcion", $form).val(),
        precio: $("#precio",$form).val()
         }
        
    
    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/RegPizzasControlador.php';

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
           // $("#msg_error1").text(res.error3).show();
           alertify.error(res.error3);
           // var notification = alertify.notify('sample', 'success ', 5, function(){  console.log('dismissed'); });
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full3 !== undefined){
      
        //$("#msg_full").text(res.full3).show();
        alertify.success('Registro  Exitoso');
        //this.reset();
        $('input').val("");
        $('select').val("");
        //$('.addpersona').modal('hide');
        $("#addpizzas .close").click();
        $ ('#addpizzas'). Modal ('hide');
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





$(document).on("submit", ".formulario_acceso", function(event){
    event.preventDefault();
    var $form = $(this);
   
    var data_form = {
        email: $("input[type='email']",$form).val(),
        password: $("input[type='password']", $form).val() 
    }
    if(data_form.email.length < 6 ){
        $("#msg_error").text("Necesitamos un email valido.").show();
        return false;        
    }else if(data_form.password.length < 8){
        $("#msg_error").text("Tu password debe ser minimo de 8 caracteres.").show();
        return false;   
    }
    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/RegPizzaWsControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error !== undefined){
            $("#msg_error").html(res.error).show();
            return false;
       } 
       if(res.redirect !== undefined){
           window.location = res.redirect;
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



$(document).on("submit", ".AltaUsuario", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        idcliente: $("#idcliente",$form).val(),
        activarcuenta: $("#activarcuenta",$form).val()
         }
         if(data_form == null){
            $("#msg_error").text("no se pueden dejar los campos vacios.").show();
            return false;        
        }
    
    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/AltaControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error1 !== undefined){
            $("#msg_error").text(res.error1).show();
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full1 !== undefined){
      
        //$("#msg_full").text('registro exitoso').show();
        alertify.success('Cambio Exitoso!!!...');
        //this.reset();
       // $('input').val("");
        $('select').val("");
        //$('.addpersona').modal('hide');
        //$("#modalAlta .close").click();
       // $ ('#addpersona'). Modal ('hide');
       // $ ('#addpersona'). modal (). hide (); 
        //onSubmit="this.reset()"
        //$('#addpersona').hide();
        listar();
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

//elimar cliente

$(document).on("submit", ".EliminarUsuario", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        eliminaruser: $("#eliminaruser",$form).val()
        
         }
         if(data_form == null){
            $("#msg_error").text("no se pueden dejar los campos vacios.").show();
            return false;        
        }
    
    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/EliminarControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error2 !== undefined){
           // $("#msg_error").text(res.error2).show();
            alertify.error(res.error2);
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full2 !== undefined){
      
        //$("#msg_full").text('registro exitoso').show();
        alertify.success('Eliminado Exitosamente!!!...');
        //this.reset();
       // $('input').val("");
        $('select').val("");
        //$('.addpersona').modal('hide');
        $("#modalEliminar .close").click();
       // $ ('#addpersona'). Modal ('hide');
       // $ ('#addpersona'). modal (). hide (); 
        //onSubmit="this.reset()"
        //$('#addpersona').hide();
        listar();
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
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/EliminarpizzaControlador.php';

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
// eliminar venta

$(document).on("submit", "#EliminarVenta", function(event){
    event.preventDefault();
    var $form = $(this);
  
    var data_form = {
        eliminarventa: $("#eliminarventa",$form).val()
        
         }
         if(data_form == null){
            $("#msg_error").text("no se pueden dejar los campos vacios.").show();
            return false;        
        }
    
    $("#msg_error").hide();
    var url_php = 'http://http://app-89ebffe6-07c2-4e7e-8eb3-00a845019f47.cleverapps.io/FastPizza/componentes/home/adminhome/controlador/EliminarventaControlador.php';

    $.ajax({
        type:'POST',
        url: url_php,
        data: data_form,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(res){
       console.log(res); 
       if(res.error6 !== undefined){
           // $("#msg_error").text(res.error2).show();
            alertify.error(res.error6);
            return false;
       } 

       if(res.redirect !== undefined){
        window.location = res.redirect;
    }
    if(res.full6 !== undefined){
      
        //$("#msg_full").text('registro exitoso').show();
        alertify.success('Eliminado Exitosamente!!!...');
        //this.reset();
       // $('input').val("");
        $('select').val("");
        //$('.addpersona').modal('hide');
        $("#modaleliminarventa .close").click();
       // $ ('#addpersona'). Modal ('hide');
       // $ ('#addpersona'). modal (). hide (); 
        //onSubmit="this.reset()"
        //$('#addpersona').hide();
        listar1();
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

