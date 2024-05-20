<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";
$dataBase = "databaserehapp";

// Conectamos a la base de datos
$connection2 = mysqli_connect($host, $user, $pass, $dataBase);


// Suscripción al newsletter
$emailSuscripcion = isset($_GET['email']) ? $_GET['email'] : '';

// Inserta el correo electrónico en la tabla de suscripciones
$sqlSuscripcion = "INSERT INTO susnewletter (email) VALUES ('$emailSuscripcion')";

if ($connection2->query($sqlSuscripcion) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sqlSuscripcion . "<br>" . $connection2->error;
}
if (mysqli_query($connection2, $sqlSuscripcion)) {
    echo '<script language="javascript">alert("¡inscripcion exitosa!");</script>';
} else {
    echo "Error al inscribirse al newsletter: " . mysqli_error($connection2);
}

// // Cierra la conexión
mysqli_close($connection2);
?>
