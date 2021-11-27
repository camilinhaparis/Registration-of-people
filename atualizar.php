<?php
include "connect.php";
header('content-type: text/html; charset=utf-8');
SESSION_START();
include "verifica_login.php";
$atualizar = $_POST['atualiza'];
$id_postagem = $_POST['id'];
if($atualizar){
    $sql = mysqli_query($link, "UPDATE tb_postagens SET postagem = '$atualizar' where id_postagem = '$id_postagem'");
    header("location: user.php?page=2");
}else{
    header("location: user.php");
}

?>