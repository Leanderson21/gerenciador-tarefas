<?php

require_once 'conexao.php';
$id = $_GET['id'];

$delete = $pdo->prepare(" DELETE FROM tarefas WHERE id='$id'");
$delete->execute();

header("location:index.php");


?>