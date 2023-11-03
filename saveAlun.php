<?php 
require "./conn.php";
require "./variaveis.php";

session_start();

$camposFormulario = [
  $nome = $_GET["nome-completo"],
  $diasemana = $_GET["dia-semana"],
  $horario = $_GET["horario"],
  $instrumento = $_GET["instrumento"],
  $professor = $_GET["professor"],
  $id_user = $_SESSION["id"]
];



if(!in_array("",$camposFormulario)){
  $cadastrar = "INSERT INTO  alunos(nome, diasemana, horario,instrumento,professor, id_user) VALUES ( \"$nome\" , \"$diasemana\",\"$horario\",\"$instrumento\",\"$professor\", $id_user)";
  mysqli_query($conn, $cadastrar);
}else{
  echo "formulario com campo vazio" ;
}

header('Location: ' . $dominio, true);
die();







?>




<!DOCTYPE html>
<html>

<? $teste = 4;
echo " teste  {$teste}"  ?>

<a href="/index.php"> cadastro com sucesso, voltar para o inicio</a>


</html>