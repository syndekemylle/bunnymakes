<?php

    $nome = "";

    if (isset($_GET["id"])){
        $id = $_GET["id"];

        include "banco/conexao.php";

        $conn = conectar();

        $sql = "SELECT * FROM categoria WHERE id=$id";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $nome = $row["nome"];
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Adicionar</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .categoria_adicionar {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: black;
        }

        .inserircategoria {
            margin-bottom: 20px;
            font-size: 18px;
            color:black;
            font-weight: bold;
        }

        .submit{
            background-color: #4f33a1;
            color: white;
            font-size: 15px;
            font-weight: bold;
            border-radius: 7px;
        }

    </style>

    <div class="categoria_adicionar">
        <div class="header">
            <h1>Cadastrar categoria</h1>
        </div>

        <div class="inserircategoria">

            <?php
                if(isset($_GET["id"])){
            ?>

            <form action="bd_categoria_editar.php" method="POST">

            <?php
                echo "<input type='hidden' name='id' value='$id' />";
                }else{
            ?>

            <form action="bd_categoria_adicionar.php" method="POST">

            <?php
                }
            ?>
                
                <p>
                    <label for="cat">Insira a categoria:</label>
                    <input type="text" name="categoria" id="cat" value="<?php echo $nome; ?>"/> 
                </p>

                <p>
                    <input type="submit" class="submit" value="Enviar"/> 
                </p>

            </form>
        </div>

</body>
</html>