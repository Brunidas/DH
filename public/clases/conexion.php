<?php

$dsn = "mysql:dbname=dh_salud;host=localhost;port=3306";
$user = "root";
$pass = "root";

try {
    $db = new PDO($dsn,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo "Error de conexion :(";exit;
}

?>
