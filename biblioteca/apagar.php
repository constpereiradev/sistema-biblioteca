<?php


    session_start();
    include_once('conexaomysql.php');

 //deletando dados ao clicar em pegar livro emprestado


    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


    if(!empty($id)){
        $livro = "DELETE FROM livro WHERE id='$id'";

        $deletLivro = mysqli_query($conexao, $livro);



        if (mysqli_affected_rows($conexao)){
            $_SESSION['msg'] = "Você pegou o livro!";
            header('Location: leitor.php');
        }else {
            $_SESSION['msg'] = "Não foi possível pegar o livro :( contacte um dos nossos adms.";
            header('Location: leitor.php');
        }

    }else {
        echo ("Selecione um livro!");
    }


    

?>