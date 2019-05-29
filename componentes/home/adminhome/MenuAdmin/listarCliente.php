<?php
 require '../controlador/Conne.php';
//$arreglo=[];
$un=0;
$query="SELECT * FROM clientes WHERE activacion='$un' ORDER BY id desc;";
$resultado2 = $con -> prepare($query);
	$resultado2->bindParam(':activacion',$un,PDO::PARAM_INT);
    $resultado2->execute();
    if (!$resultado2) {
        //existe
        echo "error";
             
    }else{
        while( $data = $resultado2->fetch(PDO::FETCH_ASSOC)){

            $arreglo ["data"][]=$data;
           }
           echo json_encode($arreglo);
       
    }
    
    $query=null;
    $con=null;

    //mysqli_free_result($resultado2);
    //mysqli_close($con);
?>