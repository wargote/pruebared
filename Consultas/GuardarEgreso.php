<?php
    require_once 'Config/database.php';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $paciente = $_POST["paciente"];
    $fecha_salida = $_POST["fecha_salida"];
    $tratamiento = $_POST["tratamiento"];
    $receta = $_POST["receta"];
    $acompañante = $_POST["acompañante"];
    $temperatura = $_POST["temperatura"];

    $sql =  "INSERT INTO egreso_paciente (paciente, fecha_egreso, tratamiento, receta, acompañante, temperatura) VALUES (".$paciente.", '".$fecha_salida."', '".$tratamiento."', '".$receta."', '".$acompañante."', ".$temperatura.")";

    if (mysqli_query($conn, $sql)) {
        echo "El egreso del paciente ha sido registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>