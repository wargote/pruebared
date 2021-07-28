<?php
    require_once 'Config/database.php';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>

<html>
    <form action="GuardarIngreso.php" method="POST">
        <label>Paciente:</label>
        <br>
        <select name="paciente" id="paciente">
            <option value="Seleccione">Seleccione:</option>
            <?php
                $query = $conn -> query ("SELECT * FROM pacientes");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
                }
            ?>
        </select>
        <br><br>
        <label>Medico:</label>
        <br>
        <select name="medico" id="medico">
            <option value="Seleccione">Seleccione:</option>
            <?php
                $query = $conn -> query ("SELECT * FROM medicos");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
                }
            ?>
        </select>
        <br><br>
        <label>Numero de cama:</label>
        <br>
        <input type="number" id="num_cama" name="num_cama"><br>
        <br>
        <label>Tratamiento:</label>
        <br>
        <textarea id="tratamiento" name="tratamiento" rows="4" cols="50"></textarea>
        <br><br>
        <label>Diagnostico:</label>
        <br>
        <textarea id="diagnostico" name="diagnostico" rows="4" cols="50"></textarea>
        <br><br>
        <label>Gravedad del malestar:</label>
        <br>
        <input type="text" id="gravedad" name="gravedad"><br>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <form action="Inicio.php" method="POST">
        <br>
        <button type="submit">Regresar</button>
    </form>
</html>

<?php
    mysqli_close($conn);
?>