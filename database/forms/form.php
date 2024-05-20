<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";
$dataBase = "databaserehapp";

// Conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass, $dataBase);

// Verificamos la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtiene los datos del formulario
$perfil = isset($_GET['perfil']) ? $_GET['perfil'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';
$phonenumber=isset($_GET['phonenumber']) ? $_GET['phonenumber']:'';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$menssage = isset($_GET['menssage']) ? $_GET['menssage'] : '';

// Inserta los datos en la tabla correspondiente
$sql = "INSERT INTO menssagesuser (perfil,name, lastname, phonenumber,email, menssage) 
        VALUES ('$perfil', '$name', '$lastname','$phonenumber', '$email', '$menssage')";


if ($connection->query($sql) === TRUE) {
    echo '<script language="javascript">alert("datos guardados<br>pronto te contactaremos");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}



// if (mysqli_query($connection, $sql)) {
//     echo "Datos insertados correctamente";
// } else {
//     echo "Error al insertar datos: " . mysqli_error($connection);
// }

// Cierra la conexión
mysqli_close($connection);
?>
