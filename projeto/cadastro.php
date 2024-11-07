<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
        
        echo "success<br>";

        $nome = $_POST["nomeusuario"];
        $senha = $_POST["senhausuario"];

        $query = $conexao->prepare("INSERT INTO usuarios VALUES (null, '" . $nome . "', '" . $senha ."')");
        $query->execute();

        echo "success query<br>";

    } catch (PDOException $e) {
        echo "failure<br>";
        echo $e;
    }
?>