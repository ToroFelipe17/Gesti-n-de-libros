<?php
$servername =--------.infinityfree.com";
$username = ----------";
$password = "*******"; 
$dbname = "----------_gestion_inventarios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexión Fallida: " . $conn->connect_error);
}
echo "Conexión Exitosa";
?>
