<?php
    require_once 'Config/database.php';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $nombre = $_POST["nombre"];
    $tipo_doc = $_POST["tipo_doc"];
    $num_doc = $_POST["num_doc"];


    $sql =  "INSERT INTO medicos (nombres, tipo_doc, num_doc) VALUES ('".$nombre."', '".$tipo_doc."', ".$num_doc.")";

    if (mysqli_query($conn, $sql)) {
        echo "El medico ha sido creado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>