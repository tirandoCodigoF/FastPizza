<?php
 require '../controlador/Conne.php';
 //require_once '../navar/head.php';
 
//$arreglo=[];
$un=1;
$query="SELECT * FROM ventas WHERE estado='$un'  ORDER BY numVenta desc;";
$resultado2 = $con -> prepare($query);
	//$resultado2->bindParam(':ti_user',$un,PDO::PARAM_INT);
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
