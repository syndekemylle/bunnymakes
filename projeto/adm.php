<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            text-align: center;
        }
        a {
            color: #6a1b9a;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p>Esta é a página do administrador.</p>
        <p><a href="logout.php">Sair</a></p>
    </div>
</body>
</html>
