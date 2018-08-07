<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=gerenciador","root","");
}catch(PDOException $e){
        echo $e->getMessage();
}

?>