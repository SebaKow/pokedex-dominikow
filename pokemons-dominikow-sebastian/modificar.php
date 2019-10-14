<?php
    include "conexion.php";
    $error ="";
    $conn = iniciarConexion();

    if (isset($_GET['numero'])){
        $numero = $_GET['numero'];
        $query = "SELECT * FROM pokemon WHERE numero = $numero";
        $resultado = mysqli_query($conn,$query);
        $pokemonBuscado = mysqli_fetch_array($resultado);
    }

    if (isset($_POST['modificar'])){
        if (isset($_POST['numeroMod']) && isset($_POST['nombreMod']) && isset($_POST['tipoMod'])){
            $nroMod = $_POST['numeroMod'];
            $nombreMod = $_POST['nombreMod'];
            $tipoMod = $_POST['tipoMod'];
            $imagenMod = $_FILES['imagenMod'];
            $imagen = 'img/'.$_FILES['imagenMod']['name'];
            if($imagenMod != null){
                $modificarPokemon = "UPDATE pokemon SET numero = '$nroMod', nombre = '$nombreMod', tipo = '$tipoMod', imagen = '$imagen' WHERE numero = '$nroMod';";
                mysqli_query($conn, $modificarPokemon);
                header("location: index.php");
            }else {
                $modificarPokemon = "UPDATE pokemon SET numero = '$nroMod', nombre = '$nombreMod', tipo = '$tipoMod' WHERE numero = '$nroMod';";
                mysqli_query($conn, $modificarPokemon);
                header("location: index.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>POKEDEX</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-center">
    <div class="w3-row">
        <div class="w3-col m4"><br></div>
    <form class="w3-col m4"method="POST" action="modificar.php"enctype="multipart/form-data">
        <label for="numeroMod   ">Numero:</label>
        <input class="w3-input w3-border w3-round"type="number" name="numeroMod" value="<?php echo $pokemonBuscado['numero'];?>">
        <br><br>
        <label for="nombreMod">Nombre:</label>
        <input class="w3-input w3-border w3-round"type="text" name="nombreMod" value="<?php echo $pokemonBuscado['nombre'];?>">
        <br><br>
        <label for="tipoMod">Tipo:</label>
        <input class="w3-input w3-border w3-round"type="text" name="tipoMod" value="<?php echo $pokemonBuscado['tipo'];?>">
        <br><br>
        <label class="w3-left-align" for="imagenMod">Imagen:</label>
        <input class="w3-input w3-border w3-round"class="w3-input" name="imagenMod" type="file" />
        <br><br>
        <button class="w3-button w3-yellow" type="submit" name="modificar">Modificar Pokemon</button>
    </form>
        <div class="w3-col m4"><br></div>
    </div>
</div>
</body>
</html>
