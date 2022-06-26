

<?php

include_once('conexaomysql.php');


        $titulo = $_POST['titulo'];
        $codigo = $_POST['codigo'];

        $result = mysqli_query ($conexao, "INSERT INTO livro (titulo, codigo)
        VALUES ('$titulo', '$codigo')");

        if ($result == true){
            echo ("O livro de código ". $codigo. " foi adicionado à base de dados da empresa.");
            echo ("<a href='add-livro.html'><button>Voltar</button></a>");
        }else {
            echo ("Não foi possível adicionar o livro, fale com o sistema superior da empresa.");
        }
        
?>