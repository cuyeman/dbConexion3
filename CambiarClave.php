<?php
include("lib/constantes.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="<?=URLBASE?>controladores/AccUsuarioCambiarClave.php">
            Password<input type="password" name="clave0">
            <br>
            Password nueva<input type="password" name="clave1">
            <br>
            Repita nueva password<input type="password" name="clave2">
            <br>
            Aceptar<input type="submit" name="enviar" value="Acceder">
        </form>
    </body>
</html>
