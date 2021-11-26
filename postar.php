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
    echo "Dados cadastratos com sucesso!<br>";
    echo "<a href='user.php?page=3'>Nova postagem</a></br>";
    echo "<a href='user.php?page=2'>Exibir postagens</a></br>";
}else{
    header('location: user.php');
}
?>