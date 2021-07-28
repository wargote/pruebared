<html>
    <form action="GuardarPaciente.php" method="POST">
        <label>Nombre:</label>
        <br>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        <label>Tipo de Documento:</label>
        <br>
        <select name="tipo_doc" id="tipo_doc">
            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
            <option value="Cedula Extranjera">Cedula Extranjera</option>
            <option value="Tarejeta de identidad">Tarejeta de identidad</option>
            <option value="Registro Civil">Registro Civil</option>
        </select>
        <br><br>
        <label>Numero de documento:</label>
        <br>
        <input type="number" id="num_doc" name="num_doc">
        <br><br>
        <label>Edad:</label>
        <br>
        <input type="number" id="edad" name="edad"><br>
        <br>
        <label>Genero:</label>
        <br>
        <select name="genero" id="genero">
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>
        <br><br>
        <label>Temperatura corporal:</label>
        <br>
        <input type="number" id="temperatura" name="temperatura"><br>
        <br><br>
        <label>Fecha de ingreso:</label>
        <br>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso"><br>
        <br>
        <label>EPS:</label>
        <br>
        <input type="text" id="eps" name="eps"><br>
        <br>
        <label>Malestar:</label>
        <br>
        <textarea id="malestar" name="malestar" rows="4" cols="50"></textarea>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <form action="Inicio.php" method="POST">
        <button type="submit">Regresar</button>
    </form>
</html>