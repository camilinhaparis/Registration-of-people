<?php
SESSION_START();
include "connect.php";
include "verifica_login.php";
$postagem = $_POST['postagem'];
/*echo $postagem;
echo " id: $id_log<br>";
echo "nome: $nome_log<br>";*/

if($postagem){
    $sql = "insert into tb_postagens(postagem, id_user) VALUES('$postagem', '$id_log')";
    mysqli_query($link, $sql);    
    header ("location: user.php?page=2");
}else{
    header('location: user.php');
}
?>