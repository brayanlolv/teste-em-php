<?php

session_start();
if (!empty($_SESSION['id'])) { //verificar se esta logado
	header('Location: index.php');
   exit();
}

 

 
?>

 
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
 </head>
 <body>

 <form action="./actions/loginIn.php" method="post" >

    <h1>Log In</h1>

    <label for="email">e-mail:</label>
    <input type="email" name="email" >
    <label for="senha"> senha:</label>
    <input type="password" name="senha">
    <input type="submit" value="logar">



 </form>
    <a href="./signup.php"> nao tem conta ? sign up</a>
    
 </body>
 </html>



