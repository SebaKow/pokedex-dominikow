<?php 
	include "conexion.php";
    session_start();

    $error ="";
    $conn = iniciarConexion();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true){
        $admin = true;
    }else{
        $admin = false;
    }

$pokemons = buscarTodosLosPokemons();
    if (isset($_GET['enviarBuscador'])){
        if (isset($_GET['buscador']) && $_GET['buscador'] != ""){
            $busqueda = $_GET['buscador'];
            $pokemons = buscarPokemonNombre($busqueda);
            if(mysqli_num_rows($pokemons) == 0){
                $error = "Pokemon no encontrado";
                $pokemons = buscarTodosLosPokemons();
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
     <div class="w3-container w3-right-align">
         <?php
         if ($admin == false){
             echo ("<button class='w3-button w3-border w3-border-green w3-green w3-round-large w3-margin-top' onclick=".'"location.href='."'login.php'".'"'.">Iniciar Sesion</button>");
         }else if ($admin == true){
             echo ("<button class='w3-button w3-border w3-border-red w3-red w3-round-large w3-margin-top' onclick=".'"location.href='."'logout.php'".'"'.">Salir</button>");
         }
         ?>
     </div>
 	<div class="w3-container w3-center">
 	 <h1>POKEDEX</h1>
	</div>
.
     <div class="w3-container w3-center">
         <form action="index.php" method="GET">
             <div class="w3-row">
                 <div class="w3-col m3">
                     <br>
                 </div>
                 <div class="w3-col m6">
             <input class="w3-input w3-border w3-round" type="text" name="buscador">
                     <br>
             <button class="w3-button w3-border w3-border-green w3-green w3-round-large" type="submit" name="enviarBuscador">Buscar Pokemon</button>
                 </div>
                 <div class="w3-col m3">
                     <br>
                 </div>
             </div>
         </form>
         <p class="w3-center w3-text-red" style="font-weight: bold"><?php echo $error ?></p>
     </div>

 	<br>

 	<div class="w3-container w3-center">
	 	<table class="w3-table-all w3-hoverable w3-centered w3-striped w3-border">
	 		<tr>
	 			<th>#</th>
	 			<th>Nombre</th>
	 			<th>Tipo</th>
                <th>Imagen</th>
                <?php
                if($admin == true){
                    echo "<th></th>
                          <th></th>";
                }
                ?>
			</tr>
			<?php

			while ($fila = mysqli_fetch_assoc($pokemons)):{
				echo ("<tr>
	 			<td>".$fila['numero']."</td>
	 			<td>".$fila['nombre']."</td>
	 			<td>".$fila['tipo']."</td>
	 			<td><img class='w3-image'style='width:100%;max-width:200px' src='".$fila['imagen']."'></td>");
	 			if($admin == true){
	 			echo ("<td><a class='w3-button w3-yellow w3-round' href='modificar.php?numero=".$fila['numero']."'>Modificar</a></td>
	 			<td><a class='w3-button w3-red w3-round' href='eliminar.php?numero=".$fila['numero']."'>Eliminar</a></td>");}
	 			echo ("</tr>");

			}endwhile;
			?>
	 	</table>
	 	<br>
        <?php if($admin==true) {
            echo ("<button class='w3-button w3-border w3-border-green w3-green w3-round-large' onclick=".'"location.href='."'agregarPokemon.php'".'"'.">Agregar Pokemon</button>");
        }
            ?>

	 </div>
 </body>
 </html>

