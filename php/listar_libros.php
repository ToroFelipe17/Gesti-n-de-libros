// listar_libros.php
<?php
include 'conectar.php';

$query = "SELECT * FROM libros";
$result = $conn->query($query);

$libros = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }
}

echo json_encode($libros);

$conn->close();
