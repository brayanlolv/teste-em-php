<?php

require "../variaveis.php";
require "../conn.php";

session_start();
$email = mysqli_real_escape_string($conn, $_POST['email']);



if ($_POST["senha"] === $_POST["senhaConfirmada"]) {
    $hashPassword =  sha1($_POST['senha']);
} else {
    //acrecentar alert
    header('Location: ' . $dominio."/signup.php", true);
    die();
}


$verify = "SELECT * FROM usuarios WHERE email='$email' ";
$verifyQuery = mysqli_query($conn,$verify);
$data = mysqli_fetch_assoc($verifyQuery);


if (!$data==null) { // conssertar essa autenticacao

      //acrecentar   alert
    header('Location: ' . $dominio."/signup.php", true);
    die();
} else {

    $cadastroQuery = "INSERT INTO  usuarios(email,senha) VALUES ('$email','$hashPassword')";
    mysqli_query($conn, $cadastroQuery);
    header('Location: ' . $dominio."/login.php", true);
    die();
}
