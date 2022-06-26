<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="leitor.css">
    <link rel="shortcut icon" href="/img/icons8-library-building-48.png" type="image/x-icon">
    <title>Leitor</title>
</head>
<body>
    <header class="header"></header>

    <h1>Escolha seu livro para pegar emprestado</h1>
    

    <?php

        //listando dados do banco de dados com paginação

        session_start();

        include_once('conexaomysql.php');

        $livros = "SELECT * FROM livro";

        $resultLivros = mysqli_query($conexao, $livros);


        //cria-se um array com os dados, e o while é utilizado para percorre-lo

        while ($linhaLivro = mysqli_fetch_assoc($resultLivros)){

            echo ("Título: ". $linhaLivro['titulo']. "<br>");
            echo ("Código: ". $linhaLivro['codigo']. "<br>");
            echo ("<a href='apagar.php?id=". $linhaLivro['id']. "'><button>Pegar</button></a> <br><br>");
        }

        
       
    ?>
</body>
</html>