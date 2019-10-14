<?php
include "conexion.php";
$conn = iniciarConexion();
$error = "";

if (isset($_POST['iniciarSesion'])){
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        if(loguearse($usuario,$contraseña) == false){
            $error = "Error al iniciar sesion";
        }else{
            loguearse($usuario,$contraseña);
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
<div class="w3-container w3-left-align">
    <button class="w3-button w3-border w3-border-green w3-green w3-round-large w3-margin-top" onclick="location.href='index.php'">←</button>
</div>
<div class="w3-container w3-center">
    <h1>    POKEDEX</h1>
</div>
    <div class="w3-row w3-center">
        <div class="w3-col m3">
            <p></p>
        </div>
        <div class="w3-col m6">
            <p class="w3-center w3-text-red" style="font-weight: bold"><?php echo $error ?></p>
            <br>
            <div class="w3-card-2">
                <header class="w3-container w3-blue">
                    <h1>Iniciar Sesion</h1>
                </header>

                <div class="w3-container">
                    <form method="POST" action="login.php" class="w3-container">
                        <label for="usuario">Usuario:</label>
                        <input class="w3-input w3-border w3-round" type="text" name="usuario">
                        <label for="contraseña">Contraseña:</label>
                        <input class="w3-input w3-border w3-round" type="password" name="contraseña">
                </div>

                <footer class="w3-container w3-blue">
                   <button class="w3-button w3-green" type="submit" name="iniciarSesion">Iniciar Sesion</button>
                    </form>
                </footer>
            </div>
        </div>
        <div class="w3-col m3">
        </div>
    </div>

</body>
</html>
