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
        <form method="POST" action="<?=URLBASE?>controladores/AccUsuario.php">
            Usuario<input type="text" name="usuario">
            <br>
            Password<input type="password" name="clave">
            <br>
            <input type="submit" name="enviar" value="Acceder">
        </form>
    </body>
</html>
