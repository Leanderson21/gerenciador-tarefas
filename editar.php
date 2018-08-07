<?php
     
require_once 'conexao.php';


if (isset ($_POST['btn-edit'])){
$id = $_POST['id'];
$desc = $_POST['descricao'];
$inserir = $pdo->prepare("UPDATE tarefas SET descricao=:descricao WHERE id='$id' ");
$inserir->bindValue(":descricao",$desc);
$inserir->execute();
header("location:index.php");
}


?>



