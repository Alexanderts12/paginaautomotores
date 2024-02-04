<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}

// Recibir los datos del formulario de inicio de sesión
$usuario = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];

// Preparar la consulta SQL
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?");
$stmt->bind_param("ss", $usuario, $contraseña);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$result = $stmt->get_result();
$nr = $result->num_rows;

// Verificar si el usuario existe en la base de datos
if ($nr == 1) {
  // Si el usuario existe, redirigir a la página de servicios
  header("Location: services.php");
} else {
  // Si el usuario no existe, mostrar un mensaje de error
  echo "<script>
          alert('Error: El usuario o la contraseña no son correctos');
          window.location = 'login.php';
        </script>";
}

// Cerrar la conexión
$conn->close();
?>
