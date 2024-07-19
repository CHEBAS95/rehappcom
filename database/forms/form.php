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
$perfil = isset($_POST['perfil']) ? $_POST['perfil'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$phonenumber=isset($_POST['phonenumber']) ? $_POST['phonenumber']:'';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$menssage = isset($_POST['menssage']) ? $_POST['menssage'] : '';


if ($phonenumber === false || strlen($phonenumber) > 15) {
    die('Número de teléfono inválido.');
}
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
