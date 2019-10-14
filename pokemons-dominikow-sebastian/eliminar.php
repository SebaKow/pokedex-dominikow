<?php
    include "conexion.php";

    $error ="";
    $conn = iniciarConexion();

    if (isset($_GET['numero'])){
        $numero = $_GET['numero'];
        $eliminar = "DELETE FROM pokemon WHERE numero = $numero";
        mysqli_query($conn,$eliminar);
        header("location: index.php");

    }
?>