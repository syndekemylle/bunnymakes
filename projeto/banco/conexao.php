<?php

//ABRIR A CONEXÃO
function conectar(){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bunny_makes";

    //classe estática do SGBD MySQL(mysqli)responsável por criar a conexão, passar parâmetros nessa ordem
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    return $conn;
}

//FECHAR CONEXÃO
//chama a conexão atraves de parâmetro e utiliza a função close
function desconectar($conn){

    $conn->close();

}

?>