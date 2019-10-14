<?php
function iniciarConexion(){
    $hostname="localhost:3307";
    $user="root";
    $password="";
    $db="pokemons-dominikow-sebastian";
    $conn = mysqli_connect($hostname,$user,$password,$db);
    if(!$conn){
        die("ERROR");
    }else{
        return $conn;
    }
}

function loguearse($usuario,$password){
    $conn = iniciarConexion();
    $sql = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario'";
    $resultado = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)== 1) {
        $fila = mysqli_fetch_assoc($resultado);
        if ($fila['password'] == $password) {
            session_start();
            $_SESSION['admin'] = true;
            header("location: index.php");
            exit();
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function buscarPokemonNombre($nombre){
    $conn = iniciarConexion();
    $sql = "SELECT * FROM pokemon WHERE nombre LIKE '%$nombre%'";
    $pokemons = mysqli_query($conn,$sql);
    return $pokemons;
}
function buscarTodosLosPokemons(){
    $conn = iniciarConexion();
    $sql = "SELECT * FROM pokemon";
    $pokemons = mysqli_query($conn,$sql);
    return $pokemons;
}