<?php
SESSION_START();
include "verifica_login.php";
$postagem = $_POST['postagem'];
echo $postagem;
?>