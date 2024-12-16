<?php

  if(isset($_POST['submit'])) {

    $cpf = $_POST['cpf'];
    $nomecompleto = $_POST['nomecompleto'];
    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include "banco/conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO cliente(cpf, nome_completo, nome_de_usuário, email, senha) 
    VALUES ('$cpf', '$nomecompleto', '$nomeusuario', '$email', '$senha')";

    $result = $conn->query($sql);

    if($result){
      desconectar($conn);
      header("Location: index.html");
      die();
    } else{

    }
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
 
</head>
<body>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }
  
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f4f4f4;
  }
  
  .container {
    display: flex;
    width: 800px;
    height: 500px;
    overflow: hidden;
    border-radius: 8px;
    justify-content: center;
  }
  
  .cadastro {
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center;
    padding: 40px;
    border-radius: 15px;
    width: 50%;
    padding: 40px;
    
  }
  
  .cadastro h2 {
    margin-bottom: 20px;
    color: #ba89dd;
  }
  
  form {
    display: flex;
    flex-direction: column;
    width: 80%; 
    border-radius: 5px;
  }
  
  input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 15px; 
    outline: none;
    width: 100%; 
  }
  
  button {
    padding: 10px;
    border: none;
    border-radius: 25px; 
    background-color: #ba89dd;
    color: white;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  
  button:hover {
    background-color: #9a70c3;
  }
  </style>
    <div class="container">
      <div class="cadastro">
        <h2 style="color:  #ba89dd;">Crie sua conta</h2>
        <form action="cadastro.php" method="POST">
          <input type="text" name="cpf" placeholder="CPF" required>
          <input type="text" name="nomecompleto" placeholder="Nome Completo" required>
          <input type="text" name="nomeusuario" placeholder="Nome de usuário" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <button type="submit" name="submit">Cadastrar</button>
        </form>
      </div>
    </div>
</body>
</html>