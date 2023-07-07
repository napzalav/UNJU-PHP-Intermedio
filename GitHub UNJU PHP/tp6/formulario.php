<!-- modificar el action de esta parte según la consigna a resolver
<form action="desarrollo1.php" method="post" enctype="multipart/form-data">
-->
        <label for="nombre">Nombre y Apellido</label>
        <input type="text" name="nombre" required><br>
        
        <label for="nacimiento">Fecha de nacimiento</label>
        <input type="date" name="nacimiento" required><br>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required><br>

        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>
        
        <label for="disponibilidad">Disponibilidad</label>
        <select name="disponibilidad" id="disponibilidad" required>
            <option value="Part time">Part time</option>
            <option value="Full time">Full time</option>
        </select><br>

        <label for="puesto">Puesto</label>
        <select name="puesto" id="puesto" required>
            <option value="Informática">Informática</option>
            <option value="Contable">Contable</option>
            <option value="RRHH">RRHH</option>
        </select><br>

<!-- modificar el final del form segun vaya a utilizarse
        <label for="cv">Cargar CV (.pdf, .doc, .jpg)</label>
        <input type="file" name="cv" id="cv" accept=".pdf, .doc, .jpg" required><br>

        <br>
        <input type="submit" name="enviar" value="Enviar postulación">
    </form>
    <br>
-->