<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conekta</title>
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../css/orden.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../conekta/conekta.js"></script>
    <script type="text/javascript" src="https://www.dropbox.com/home/conekta?preview=conekta_PK.js"></script>
</head>
<body>
<div class="jumbotron" id="conekta_form">
<form action="cobro.php" method="POST" id="card-form">
<h3>Datos de Tarjeta</h3>
  <span class="card-errors"></span>
  <div class="form-group">
    <label>
      <span>Nombre del titular de la tarjeta:</span>
      <input class="form-control-sm" type="text" size="20" data-conekta="card[name]">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>Número de tarjeta:</span>
      <input class="form-control-sm" type="text" size="20" data-conekta="card[number]">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>CVC:</span>
      <input class="form-control-sm" type="text" size="4" data-conekta="card[cvc]">
    </label>
  </div>
  <div class="form-group">
    <label>
      <span>Fecha de expiración (MM/AAAA):</span>
      <input type="text" size="2" data-conekta="card[exp_month]">
    </label>
    <span>/</span>
    <input type="text" size="4" data-conekta="card[exp_year]">
  </div>
  <button type="submit" class="btn btn-outline-primary">Comprar</button>
  <a href="../menu/pizzas.php" class="btn btn-outline-danger">Cancelar</a>
</form>
</div>
</body>
</html>


