<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$db_host="localhost";
$db_user="root";
$db_password ="";
$db_name="mayuda";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recopila los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Inserta la solicitud en la base de datos
$sql = "INSERT INTO help_requests (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Solicitud enviada con éxito.";
} else {
    echo "Error al enviar la solicitud: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();

echo <<<HTML
<a href="indexx.php">Click here</a>
HTML;
?>
