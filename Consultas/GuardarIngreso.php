<?php
    require_once 'Config/database.php';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $paciente = $_POST["paciente"];
    $medico = $_POST["medico"];
    $num_cama = $_POST["num_cama"];
    $tratamiento = $_POST["tratamiento"];
    $diagnostico = $_POST["diagnostico"];
    $gravedad = $_POST["gravedad"];

    $sql =  "INSERT INTO ingreso_paciente (paciente, medico, num_cama, tratamiento, diagnostico, gravedad) VALUES (".$paciente.", ".$medico.", ".$num_cama.", '".$tratamiento."', '".$diagnostico."', '".$gravedad."')";

    if (mysqli_query($conn, $sql)) {
        echo "El ingreso del paciente ha sido registrado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>