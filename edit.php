<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require "config.php";

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$dn = filter_input(INPUT_POST, 'data');
$cpf = filter_input(INPUT_POST, 'cpf');
$tel = filter_input(INPUT_POST, 'telephone');
$wpp = filter_input(INPUT_POST, 'whatsapp');
$course =  filter_input(INPUT_POST, 'course');

if ($id) {
    $sql = $conn->query("SELECT * FROM aluno WHERE cpf = $cpf ");
    $retorno = $sql->rowCount();
    $sql->execute();
    if($retorno === 0){
    $sql = $conn->prepare("UPDATE aluno SET name_aluno = :name, dn = :dn,cpf = :cpf,telefone = :tel,wpp = :wpp WHERE id = :id ");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':dn', $dn);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':tel', $tel);
    $sql->bindValue(':wpp', $wpp);
    $sql->bindValue(':id', $id);
    $sql->execute();


  header("Location: lista_alunos.php");
  exit;
  }else {
        echo "<script>alert('CPF já cadastrado!')</script>";
        
    }
} else {
  header('Location: lista_alunos.php ');
  exit;
}
?>
<html>
<head>
  <link rel="stylesheet" href="./styles/style.css">
</head>
  <a id="button"   href="lista_alunos.php">Voltar para lista de alunos</a>
</html>
