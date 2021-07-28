<?php
    require_once 'Config/database.php';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $nombre = $_POST["nombre"];
    $tipo_doc = $_POST["tipo_doc"];
    $num_doc = $_POST["num_doc"];
    $edad = $_POST["edad"];
    $genero = $_POST["genero"];
    $temperatura = $_POST["temperatura"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $eps = $_POST["eps"];
    $malestar = $_POST["malestar"];


    $sql =  "INSERT INTO pacientes (nombre, tipo_doc, num_doc, edad, genero, temperatura, fecha_ingreso, EPS, malestar) VALUES ('".$nombre."', '".$tipo_doc."', ".$num_doc.", ".$edad.", '".$genero."', ".$temperatura.", '".$fecha_ingreso."', '".$eps."','".$malestar."' )";

    if (mysqli_query($conn, $sql)) {
        echo "El paciente ha sido creado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>