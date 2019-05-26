<?php
require_once("../lib/conekta.php");
\Conekta\Conekta::setApiKey("key_Wor3CCENs9vyNdjdh7wQBQ");
\Conekta\Conekta::setApiVersion("2.0.0");
include '../../../basededatos/conexion.php';
include '../../../sesiones/datosuser.php';
include 'datosorden.php';

$token_id=$_POST["conektaTokenId"];
try{
    $order = \Conekta\Order::create(
      array(
        "line_items" => array(
          array(
            "name" => "Star-Soft",
            "unit_price" => 1000,
            "quantity" => 12
          )//first line_item
        ), //line_items
        "shipping_lines" => array(
          array(
            "amount" => 0,
             "carrier" => "000"
          )
        ), //shipping_lines - physical goods only
        "currency" => "MXN",
        "customer_info" => array(
          "name" => "nombre",
          "email" => "besiddes1@gmail.com",
          "phone" => "5512345678"
        ), //customer_info
        "shipping_contact" => array(
          "address" => array(
            "street1" => "Calle 123, int 2",
            "postal_code" => "06100",
            "country" => "MX"
          )//address
        ), //shipping_contact - required only for physical goods
        "metadata" => array("reference" => "12987324097", "more_info" => "lalalalala"),
        "charges" => array(
            array(
                "payment_method" => array(
                    //"monthly_installments" => 3,
                    "type" => "card",
                    "token_id" => $token_id
                                  ) 
                                  //payment_method - use customer's default - a card
                  //to charge a card, different from the default,
                  //you can indicate the card's source_id as shown in the Retry Card Section
            ) //first charge
        ) //charges
      )//order
    );
  } catch (\Conekta\ProcessingError $error){
    echo $error->getMessage();
  } catch (\Conekta\ParameterValidationError $error){
    echo $error->getMessage();
  } catch (\Conekta\Handler $error){
    echo $error->getMessage();
  }

  date_default_timezone_set('America/Mexico_City');
  $Date = date('m/d/Y h:i:s A');
  $timestamp = time();
?>
<?php
echo "Suc. 01 Tlaxiaco,Oax.";
echo "<br>";
echo "Calle Desconocida S/N";
echo "<br>";
echo "Colonia Desconocida";
echo "<br>";
echo "C.P: 69800";
echo "<br>______________________";
echo"<br>"; 
echo $order->line_items[0]->name;
echo "<br>";
echo "Fecha:- ". $Date;
//echo "<br>Estado venta: ". $order->payment_status;
echo "<br>Orden: ";
echo $orden .
      "<br>-Cantidad: ". $cantidad .
      "<br>-Total M.N: $". $total;
echo "<br>**Informacion de tarjeta**".
      "<br>-Titular de la tarjeta: ". $order->charges[0]->payment_method->name .
      "<br>-No. cuenta: ****". $order->charges[0]->payment_method->last4 .
      "<br>-Marca: ". $order->charges[0]->payment_method->brand .
      "<br>-Tipo tarjeta: ". $order->charges[0]->payment_method->type;
echo "<br>";
echo "Firma:";
echo "<br>______________________";


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>
<a href="#" class="btn btn-outline-danger" >Enviar ticket de compra a tu correo electronico</a>
<br>
<a href="finalizar.php" class="btn btn-outline-success" >Inicio</a>