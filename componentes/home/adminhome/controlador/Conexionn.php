<?php 
class Conexionn {
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO(
                'mysql:charset=utf8mb4;host=bzxlwzvexbaiqu1sypi9-mysql.services.clever-cloud.com;port=3306;dbname=bzxlwzvexbaiqu1sypi9', 
                'u1htrxt785hqk9gr', 'Od6JyCvE855NKM4JfVwv');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);    
        }catch (PDOException $e){
            echo "No hemos podido conectar con la base de datos.";
            exit;
        }
    }
    public static function getConn(){
        if(!self::$con){
            new Conexionn();
        }
        return self::$con;
    }
}
?>