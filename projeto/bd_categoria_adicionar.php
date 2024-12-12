<?php

    $nome = $_POST["categoria"];

    include "banco/conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO categoria (nome) VALUES ('$nome')";

    $result = $conn->query($sql);

    if($result){
        desconectar($conn);
        header("Location: categoria.php");
        die();
    }else{

    }
?>