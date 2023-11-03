<?php 

require "../variaveis.php";
require "../conn.php";

session_start();//comeca a sessão

if (!empty($_POST)) {

        $senha = $_POST["senha"];

        
    $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = sha1($_POST['senha']);

        $login = mysqli_query($conn,"SELECT *  FROM usuarios WHERE email='$email' AND senha= '$password'");

        if ($login && mysqli_num_rows($login) == 1){//se o ligin nao é nulo, e se nao tem mais de ums
            $data = mysqli_fetch_assoc($login);

            $_SESSION["id"] = $data["id"];
            $_SESSION["email"] = $data["email"];
}

header('Location: ' . $dominio, true);
die();

}
?>