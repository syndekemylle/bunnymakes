<?php
$conn = new mysqli("localhost", "root", "", "meu_banco");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso! <a href='index.php'>Voltar ao login</a>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

