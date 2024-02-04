<?php
function conn()
{
    $hostname = "localhost";
    $usuariodb = "root";
    $password = "";
    $dbname = "autos";
    //Conexion con la DB

    $conectar = mysqli_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;


}

?>