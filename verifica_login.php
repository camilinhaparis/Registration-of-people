<?php
include "connect.php";
//Recupero a sessão
//SESSION_START();
//$l de login
$l = isset($_SESSION["login_user"])?$_SESSION["login_user"] :"";
//$s de senha
//$s = $_SESSION["senha_user"];
$s = isset($_SESSION["senha_user"])?$_SESSION["senha_user"] :"";

if($l != "" && $s != ""){
    $dados = mysqli_query($link,"select * from tb_user WHERE email = '$l'");
    while ($d = mysqli_fetch_array ($dados)){
        $id_log = $d['id_user'];
        $nome_log = $d['nome'];
        $atividade_log = $d['atividade'];
        $email_log = $d['email'];
        $senha_log = $d['senha'];
        $dica_log = $d['dica'];
        $telefone_log = $d['telefone'];
        $endereco_log = $d['endereco'];
        $capa_log = $d['capa'];
        $perfil_log = $d['perfil'];
    }
}else{
    header('location:perfil.php');
}

?>