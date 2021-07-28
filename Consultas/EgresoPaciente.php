<?php
    require_once 'Config/database.php';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>

<html>
    <form action="GuardarEgreso.php" method="POST">
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
        <label>Fecha de salida:</label>
        <br>
        <input type="date" id="fecha_salida" name="fecha_salida"><br>
        <br>
        <label>Tratamiento realizado:</label>
        <br>
        <textarea id="tratamiento" name="tratamiento" rows="4" cols="50"></textarea>
        <br><br>
        <label>Receta medica:</label>
        <br>
        <textarea id="receta" name="receta" rows="4" cols="50"></textarea>
        <br><br>
        <label>Acompañante:</label>
        <br>
        <input type="text" id="acompañante" name="acompañante"><br>
        <br><br>
        <label>Temperatura:</label>
        <br>
        <input type="number" id="temperatura" name="temperatura"><br>
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