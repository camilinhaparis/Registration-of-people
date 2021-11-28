<?php 
SESSION_START();
include "connect.php";
include "verifica_login.php";

$foto_perfil = "users/$email_log/$perfil_log";
//$foto_capa = "users/$email_log/$capa_log";
unlink($foto_perfil);
//unlink($foto_capa);
$sql ="UPDATE tb_user set perfil ='perfil.png' WHERE id_user = '$id_log'";
mysqli_query($link, $sql);

header("location:user.php?page=1");


?>