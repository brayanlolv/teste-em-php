<?php


 

 
?>

 
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 <form action="./actions/signupAction.php" method="post">

    <h1>cadastro</h1>

    <label for="email">e-mail:</label>
    <input type="email" name="email" >
    <label for="senha"> senha:</label>
    <input type="password" name="senha">
    <label for="senhaConfirmada">confirme sua senha</label>
    <input type="password" name="senhaConfirmada">
    <input type="submit" value="enviar!">


 </form>
    <a href="./login.php"> ja tem conta? login</a>
    
 </body>
 </html>



