<?php 
class Conexionn {
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO(
                'mysql:charset=utf8mb4;host=bclaaawucbhptfb3nth1-mysql.services.clever-cloud.com;port=3306;dbname=bclaaawucbhptfb3nth1', 
                'uw38l52oqjtgwx5m', 'owxPBGYDFzI2dtam3AXp');
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