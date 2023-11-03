<?php
require "../variaveis.php";

session_start();
session_destroy();
header('Location: ' . $dominio, true);
die();



?>