// agregar_libro.php
<?php
include 'conectar.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$año = $_POST['año'];

$query = "INSERT INTO libros (titulo, autor, año) VALUES ('$titulo', '$autor', '$año')";

if ($conn->query($query) === TRUE) {
    echo json_encode(array('success' => true, 'message' => 'Libro agregado correctamente.'));
} else {
    echo json_encode(array('success' => false, 'message' => 'Error al agregar libro: ' . $conn->error));
}

$conn->close();
