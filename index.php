<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Cadastro de alunos</title>
</head>
<body>
  <h1 class="title">Cadastro de Alunos</h1>
    <a id="button"   href="lista_alunos.php">Lista de Alunos Cadastrados</a>
    <form class="form" action="cad_alunos.php" method="POST">
      <label>
        Nome: <br>
        <input type="text" name="name">
      </label> </br>
      <label class='date'>
        Data de Nascimento: <br>
        <input type="date" name="data">
      </label> <br>
       <label>
        CPF: <br>
        <input type="text" name="cpf">
      </label> <br>
       <label>
        Telefone: <br>
        <input type="text" name="telephone">
      </label> <br>
       <label>
        Whatsapp: <br>
        <input type="text" name="whatsapp">
      </label> <br>
       <label>
        Curso: <br>
        <input type="text" name="course">
      </label> <br>
      <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
