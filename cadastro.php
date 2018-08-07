<?php

require_once 'conexao.php';


if(isset($_POST['btn-cad'])){
$descricao = $_POST['descricao'];

$inserir = $pdo->prepare("INSERT INTO tarefas(descricao) VALUES(:descricao)");
$inserir->bindValue(":descricao",$descricao);
$inserir->execute();

header("location:index.php");
}


?>