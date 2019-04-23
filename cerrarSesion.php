<?php


include("lib/constantes.php");
session_unset();
session_destroy();

header("location:$URLBASE index.php");