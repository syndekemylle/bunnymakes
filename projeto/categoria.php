<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .categoria {
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

        .opcaoadicionar {
            margin-bottom: 20px;
        }

        .link {
            font-size: 18px;
            margin-bottom: 10px;
            color:rgb(94, 18, 141);
            text-decoration: none;
        }

        .link:hover{
            text-decoration: underline;
        }

        .listacategoria {
            margin: 5px 0;
            font-size: 16px;
            color: black;
        }

        .categoria_cadastrada p{
            display:grid;
            grid-template-columns: 25% 25% 25% 25%;
        }

</style>

    <div class="categoria">
        <div class="header">
            <h1>Página de Categorias</h1>
        </div>

        <div class="opcaoadicionar">
            <h2><a href="categoria_adicionar.php" class="link">Adicionar uma categoria</a></h2>
        </div>

        <div class="listacategoria">
            <h2>Categorias cadastradas:</h2>

            <div class="categoria_cadastrada">

            <?php
                
                include "banco/conexao.php";

                $conn = conectar();
                
                $sql = "SELECT * FROM categoria";

                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<p>";
                        echo $row["id"]." - ".$row["nome"];
                        echo "<a href='categoria_adicionar.php?id=".$row["id"]."' class='link'>EDITAR</a>";
                        echo "<a href='bd_categoria_remover.php?id=".$row["id"]."' class='link'>REMOVER</a>";
                        echo "</br>";
                        echo "</p>";
                    }

                }else{
                    echo "<p>Não existe categorias cadastradas</p>";
                }


            ?>
        </div>
        </div>
    </div>
</body>
</html>