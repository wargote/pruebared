<html>
    <form action="GuardarMedico.php" method="POST">
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
        <button type="submit">Guardar</button>
    </form>
    <form action="Inicio.php" method="POST">
        <button type="submit">Regresar</button>
    </form>
</html>