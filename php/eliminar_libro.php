// eliminar_libro.php
<?php
include 'conectar.php';

$id = $_POST['id'];

$query = "DELETE FROM libros WHERE id=$id";

if ($conn->query($query) === TRUE) {
    echo json_encode(array('success' => true, 'message' => 'Libro eliminado correctamente.'));
} else {
    echo json_encode(array('success' => false, 'message' => 'Error al eliminar libro: ' . $conn->error));
}

$conn->close();
