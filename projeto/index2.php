<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
        
        echo "success<br>";

        $query = $conexao->prepare("SELECT * FROM usuarios");
        $query->execute();

        $resultado = $query->fetchAll();

        echo "success query<br>";

        foreach($resultado as $linha){
            echo $linha["id"] . " - " . $linha["nome"] . " - " . $linha["senha"] . "<br>";
        }
    } catch (PDOException $e) {
        echo "failure<br>";
        echo $e;
    }

?>