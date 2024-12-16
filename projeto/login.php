<?php
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        include "banco/conexao.php";

        $conn = conectar();

        $sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){
            desconectar($conn);
            header("Location: login.php");
        }
        else{
            desconectar($conn);
            header('Location: index.html');
        }
    }
    else{
        
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
 
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
  
    .login {
    background-color: #ba89dd;
    color: white;
    padding: 150px 40px 50px 40px; 
    height: auto; 
    border: 3px solid #ba89dd;
    border-radius: 25px;
    width: 50%;
    padding: 40px;
  }

  .login button {
    border: 3px solid #fff;
    border-radius: 25px;
  }
  
  .login h2 {
    margin-bottom: 20px;
    margin-top:60px;
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
        <div class="login">
        <h2>Bem-vindo(a) <br>de volta!</h2>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" name="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>