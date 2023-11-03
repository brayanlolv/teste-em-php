<?php

session_start();
if (empty($_SESSION['id'])) { //verificar se esta logado
	header('Location: login.php');
	exit();
}


require "./conn.php";
$user_id = $_SESSION["id"] ;

//$user_id = 0;
$selectQuery = "SELECT * FROM alunos WHERE id_user = $user_id";
$queryResult = $conn->query($selectQuery);

?>


<!DOCTYPE html>
<html>

<body>

  <form action="/saveAlun.php" method="get">
    cadastrar alunos
    <input type="text" name="nome-completo" placeholder="nome-completo">
    <input type="text" name="dia-semana" placeholder="dia-semana">
    <input type="text" name="horario" placeholder="horario">
    <input type="text" name="instrumento" placeholder="instrumento">
    <input type="text" name="professor" placeholder="professor">
    <input type="submit" value="cadastrar">
  </form>



  <h1>lista de alunos </h1> <br><br><br>
  <div>

    <table>
      <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Data de Cadastro</td>
        <td>Ação</td>
      </tr>

      <?php while ($row = mysqli_fetch_assoc($queryResult)) { ?>
        <tr>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['diaSemana']; ?></td>
          <td><?php echo $row['horario']; ?></td>
          <td><?php echo $row['instrumento']; ?></td>
          <td><?php echo $row['professor']; ?></td>  
      
          <!-- <td>
            <a href="usu_editar.php?codigo=<?php echo $dado['usu_codigo']; ?>">Editar</a>
            <a href="usu_excluir.php?codigo=<?php echo $dado['usu_codigo']; ?>">Excluir</a>
          </td> -->
        </tr>
      <?php } ?>
    </table>

    <a href="/actions/closeSession.php">terminar sessao</a>


  </div>




  <?php

  ?>

</body>

</html>