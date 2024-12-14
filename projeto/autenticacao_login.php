<?php
$conn = new mysqli("localhost", "root", "", "meu_banco");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['senha'])) {
        session_start();
        $_SESSION['usuario'] = $user['nome'];
        header("Location: admin.php");
    } else {
        echo "Senha incorreta! <a href='index.php'>Tentar novamente</a>";
    }
} else {
    echo "Usuário não encontrado! <a href='index.php'>Tentar novamente</a>";
}

$conn->close();
?>

