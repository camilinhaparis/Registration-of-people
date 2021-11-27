<?php
include "connect.php";
SESSION_START();
include "verifica_login.php";
echo "Arquivo de uploads de fotos para atualização";

//variáveis com arquivos do upload
$capa = $_FILES['capa'] ['name'];
$perfil = $_FILES['perfil'] ['name'];


echo "User: $nome_log<br>";
echo "Foto da capa: $capa <br>";
echo "Foto de perfil: $perfil <br>";

?>