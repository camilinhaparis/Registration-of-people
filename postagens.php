<?php
header('content-type: text/html; charset=utf-8');
include "connect.php";
$sql = "select * from tb_postagens where id_user = '$id_log'";
$postagens = mysqli_query($link, $sql);
while ($dados = mysqli_fetch_array($postagens)){
    echo "<p class='posts'> $dados[id_postagem]: $dados[postagem]
    <a href='update.php?id_post=$dados[id_postagem]'><img src='imagens/update.png'  class='img_posts'></a>
    <a href='user.php?page=3'><img src='imagens/nova.png' class='img_posts'></a>
    </p>";
}
?>