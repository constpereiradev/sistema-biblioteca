<?php

session_start();

include_once('conexaomysql.php');

if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM administrador WHERE nome = '$nome' and email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result)!=0){
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;


        header('Location: sistema.html');
    }else {

        header('Location: adm.html');

        unset ($_SESSION['nome']);
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
    }
}else {
    
    header('Location: adm.html');
}


?>