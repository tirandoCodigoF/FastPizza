<!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../css/pizzas.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require '../../../sesiones/sesionlogin2.php'; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title></title>
    </head>

    <body>
    <?php
    require ('../../../navbar/index.php');
    ?>
    <header>

    <div class="textos">
    <h1 class="titulo">Star-Soft</h1>
    <h3 class="subtitulo">Dessarrollo Web Pizzeria </h3>
    <a href="../index.php" class="boton">Home</a>
    </div>
    </header>

    <main>
    <!--HAWAIANA-->

    <section class="acerca-de">
    <div class="wrap">
        <div class="tarjeta-wrap">
        <h3 class="slogan">HAWAINA</h3>
        <div class="tarjeta">
            <div class="adelante img1"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam" required>
            <option value="">Elegir tamaño</option>
            <option value="HCH">Chica</option>
            <option value="HMD">Mediana</option>
            <option value="HGR">Grande</option>
            <option value="HFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div>   
        
        </div>
    <!--PEPERONI-->
    
        <div class="tarjeta-wrap">
        <h3 class="slogan">PEPERONI</h3>
        <div class="tarjeta">
     
            <div class="adelante img2"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam">
            <option value="">Elegir tamaño</option>
            <option value="PPCH">Chica</option>
            <option value="PPMD">Mediana</option>
            <option value="PPGR">Grande</option>
            <option value="PPFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div>
    
        </div>
    <!--Mexicana-->

        <div class="tarjeta-wrap">
        <h3 class="slogan">MEXICANA</h3>
        <div class="tarjeta">
            <div class="adelante img3"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam">
            <option value="">Elegir tamaño</option>
            <option value="MXCH">Chica</option>
            <option value="MXMD">Mediana</option>
            <option value="MXGR">Grande</option>
            <option value="MXFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div>
        </div> 
    </div>
    </section>
<!--TRES QUESOS-->

    <section class="acerca-de">
    <div class="wrap">
        <div class="tarjeta-wrap">
        <h3 class="slogan">TRES QUESOS</h3>
        <div class="tarjeta">
            <div class="adelante img4"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam">
            <option value="">Elegir tamaño</option>
            <option value="3QCH">Chica</option>
            <option value="3QMD">Mediana</option>
            <option value="3QGR">Grande</option>
            <option value="3QFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div>
        </div>
        <!--CARNES FRIAS-->

        <div class="tarjeta-wrap">
        <h3 class="slogan">CARNES FRÍAS</h3>
        <div class="tarjeta">
            <div class="adelante img5"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam">
            <option value="">Elegir tamaño</option>
            <option value="CFCH">Chica</option>
            <option value="CFMD">Mediana</option>
            <option value="CFGR">Grande</option>
            <option value="CFFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div> 
        </div>
        <!--CHORIZO-->
        
        <div class="tarjeta-wrap">
        <h3 class="slogan">CHORIZO</h3>
        <div class="tarjeta">
            <div class="adelante img6"></div>
            <div class="atras">
            <form action="../tomarorden/buscarpizza.php" method="POST">
            <select class="custom-select mr-sm-2" name="tam" id="tam">
            <option value="">Elegir tamaño</option>
            <option value="CHCH">Chica</option>
            <option value="CHMD">Mediana</option>
            <option value="CHGR">Grande</option>
            <option value="CHFA">Familiar</option>
            </select>
            <input type="number" class="form-control-sm" name="cant" id="cant" placeholder="Cantidad" required style="display:inline; margin-top:3%;">
            <button type="submit" class="btn btn-outline-light">Ordenar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="fondo">
    </section>
    </main>
    </body>
    </html>