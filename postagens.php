<?php
include "connect.php";
$sql = "select * from tb_postagens where id_user = '$id_log'";
$postagens = mysqli_query($link, $sql);
while ($dados = mysqli_fetch_array($postagens)){
    echo "<p class='posts'> $dados[id_postagem]: $dados[postagem]
    <a href='update.php?id_post=$dados[id_postagem]'> Atualizar postagem</a>
    </p>";
}
?>