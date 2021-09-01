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

    $sql = $conn->prepare("UPDATE alunos SET name_aluno = :name, dn = :dn,cpf = :cpf,telefone = :tel,wpp = :wpp WHERE id = :id ");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':dn', $dn);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':tel', $tel);
    $sql->bindValue(':wpp', $wpp);
    $sql->bindValue(':id', $id);
    $sql->execute();


  header("Location: lista_alunos.php");
  exit;
 
} else {
  header('Location: lista_alunos.php ');
  exit;
}
