<?php
//arquivo de login
include "connect.php";

$login = $_POST["login"];
$senha = $_POST["senha"];

if($login && $senha){
    $sql = mysqli_query($link, "select * from tb_user WHERE email = '$login'");
    while ($dados = mysqli_fetch_array ($sql)){
        $email = $dados['email'];
        $pass = $dados['senha'];
    }
//verificase os dados batem com o que temos na tabela de banco de dados.
//inicio da verificação
    if($login == $email && $senha == $pass){
        //iniciar session
        SESSION_START();
        //variáveis de sessão
        $_SESSION['login_user'] = $login;
        $_SESSION['senha_user'] = $senha; 
        header('location:user.php');
    }else{
        header('location:perfil.php');
       
    }
    //fim da verificação
}else{
    header('location:perfil.php');
}


?>