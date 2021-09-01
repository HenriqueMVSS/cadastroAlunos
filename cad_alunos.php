<?php

require "config.php";

$name = filter_input(INPUT_POST, 'name');
$dn = filter_input(INPUT_POST, 'data');
$cpf = filter_input(INPUT_POST, 'cpf');
$tel = filter_input(INPUT_POST, 'telephone');
$wpp = filter_input(INPUT_POST, 'whatsapp');
$course =  filter_input(INPUT_POST, 'course');



    
    $sql = $conn->prepare("INSERT INTO alunos (name_aluno, dn, cpf, telefone, wpp) VALUES (:name, :dn, :cpf, :tel, :wpp)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':dn', $dn);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':tel', $tel);
    $sql->bindValue(':wpp', $wpp);
    $sql->execute();

    // $sql = $conn->prepare("INSERT INTO cursos (courses) VALUES (:course)");
    // $sql->bindValue(':course', $course);
    // $sql->execute();

    header("Location: lista_alunos.php");
    exit;


