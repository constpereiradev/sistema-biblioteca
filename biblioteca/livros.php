<?php

session_start();

include_once('conexaomysql.php');


$livros = "SELECT * FROM livro";

$resultLivros = mysqli_query($conexao, $livros);

while ($linhaLivro = mysqli_fetch_assoc($resultLivros)){

    echo ("Id: ". $linhaLivro['id']. "<br>");
    echo ("Título: ". $linhaLivro['titulo']. "<br>");
    echo ("Código: ". $linhaLivro['codigo']. "<br><br>");
}

?>