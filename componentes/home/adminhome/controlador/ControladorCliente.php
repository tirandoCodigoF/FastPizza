<?php
 require '../controlador/Conne.php';
 //require_once '../navar/head.php';
 
//$arreglo=[];
$un=2;
$query="SELECT * FROM clientes WHERE tipo_user=$un AND activacion=1 ORDER BY id desc;";
$resultado2 = $con -> prepare($query);
	$resultado2->bindParam(':ti_user',$un,PDO::PARAM_INT);
    $resultado2->execute();
    if (!$resultado2) {
        //existe
        echo "error";
             
    }else{
        while( $data = $resultado2->fetch(PDO::FETCH_ASSOC)){

            $arreglo["data"][]=$data;
           }
           echo json_encode($arreglo);
       
    }
    
    $query=null;
    $con=null;

    $un=1;



    //mysqli_free_result($resultado2);
    //mysqli_close($con);
    //include_once '../navar/footer.php';
?>

<?php /*
// require '../basededatos/Conne.php';
 include '../controlador/conexion.php';

$un=1;
$query="SELECT * FROM clientes WHERE activacion=1 ORDER BY id desc;";
$resultado=mysqli_query($conexion,$query);

    if (!$resultado) {
        die('Error');
    }else{
        //existe
        while($data=mysqli_fetch_assoc($resultado)){
            $arreglo["data"][]=$data;

        }

        echo json_encode($arreglo);   
            
    }
    
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
    */
    
?>