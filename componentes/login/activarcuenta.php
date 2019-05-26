<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/login/login.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Activacion de cuenta:</title>
</head>
<body>
    <br>
    <div class="padre">
    <div class="hijo">
        <h5>Completa tus datos para activar tu cuenta.</h5>
        <form action="activar.php" method="POST">
            <label for="user">Email:</label>
            <div class="form-group">
                <input type="email" class="form-control" name="user" id="user" placeholder="ejemplo@ejemplo.com" required>
            </div>
            <label for="">Nombre completo:</label>
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <label for="">Dirección:</label>
            <div class="form-group">
                <input type="text" class="form-control" name="dir" id="dir" placeholder="Ej. Calle, numero, colonia/barrio" required>
            </div>
            <label for="">Número de Telefono:</label>
            <div class="form-group">
                <input type="tel" class="form-control" name="tel" id="tel" required>
            </div>
            <br>
                    <input type="submit" value="Activar" class="btn btn-outline-primary">
                
            </div>
        </form>
    </div>
</body>
</html>