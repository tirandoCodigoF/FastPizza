<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login/login.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <title>Pizzeria: Login</title>
</head>
<body>
    <br>
    <div class="padre">
    <div class="hijo">
    <h2>Inicio de Sesión</h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTZzBD90a3ted1H0qYV1xtJwdP9Ew0SFpGKRoEdusCeb7onbK"
            class="d-inline-block align-top" alt="">
        <form action="componentes/login/controllogin.php" method="POST">
            <label for="user">Email:</label>
            <div class="form-group">
                <input type="email" class="form-control" name="user" id="user" required>
            </div>
            <label for="pass">Contraseña:</label>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" id="pass" required>
            </div>
            <br>
                    <input type="submit" value="Ingresar" class="btn btn-outline-primary">
                <button type="button" id="cancel" class="btn btn-outline-danger" data-toggle="modal" data-target="#ModalRegistro">
	Registrate
</button>                
        </form>
        <footer><a href="">¿Olvidaste tu contraseña?</a></footer>
        </div>
    </div>
</body>
</html>
<?php require 'componentes/login/registro/formularioregistrousuario.php' ?>