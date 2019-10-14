<?php
    include "conexion.php";
    $error = "";
    $conn = iniciarConexion();

    if (isset($_POST['enviar'])) {
        if(isset($_POST['numero']) && isset($_POST['nombre']) && isset($_POST['tipo'])){
            $nro = $_POST['numero'];
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $imagen = 'img/'.$_FILES['imagen']['name'];
            $agregarPokemon = "INSERT INTO pokemon (nombre, tipo, numero, imagen) VALUES ('" . $nombre . "', '$tipo', '$nro', '$imagen');";
            mysqli_query($conn,$agregarPokemon);
            header("location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title></title>
</head>
<body>
<div class="w3-container w3-center">
    <div class="w3-row">
        <div class="w3-col m4"><br></div>
            <form class="w3-col m4 " method="POST" action="agregarPokemon.php"enctype="multipart/form-data">
                <label for="numero">Numero:</label>
                <input class="w3-input w3-border w3-round" type="number" name="numero">
                <br><br>
                <label for="nombre">Nombre:</label>
                <input class="w3-input w3-border w3-round"type="text" name="nombre">
                <br><br>
                <label for="tipo">Tipo:</label>
                <select class="w3-input w3-border w3-round"name="tipo">
                    <option value="Normal">Normal</option>
                    <option value="Lucha">Lucha</option>
                    <option value="Volador">Volador</option>
                    <option value="Veneno">Veneno</option>
                    <option value="Tierra">Tierra</option>
                    <option value="Roca">Roca</option>
                    <option value="Bicho">Bicho</option>
                    <option value="Fantasma">Fantasma</option>
                    <option value="Acero">Acero</option>
                    <option value="Fuego">Fuego</option>
                    <option value="Agua">Agua</option>
                    <option value="Planta">Planta</option>
                    <option value="Electrico">Electrico</option>
                    <option value="Psiquico">Psiquico</option>
                    <option value="Hielo">Hielo</option>
                    <option value="Dragon">Dragon</option>
                    <option value="Hada">Hada</option>
                    <option value="Siniestro">Siniestro</option>
                </select>
                <br><br>
                <label for="imagen">Imagen:</label>
                <input class="w3-input w3-border w3-round"type="file" name="imagen">
                <br><br>
                <button class="w3-button w3-green " type="submit" name="enviar">Agregar Pokemon</button>
            </form>
        <div class="w3-col m4"><br></div>
    </div>
</div>
</body>
</html>