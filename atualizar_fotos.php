<?php
include "connect.php";
SESSION_START();
include "verifica_login.php";


//variáveis com arquivos do upload
$capa = $_FILES['capa'] ['name'];
$perfil = $_FILES['perfil'] ['name'];
$foto_perfil = "users/$email_log/$perfil_log";
$foto_capa = "users/$email_log/$capa_log";

if($perfil_log != "perfil.png" && $capa_log != "capa.png"){
    unlink($foto_perfil);
    unlink($foto_capa);

    mysqli_query($link, "update tb_user set capa = '$capa', perfil = '$perfil' where id_user = '$id_log'");

    //upload das imagens/**/
    move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$email_log."/".$capa);
    move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$email_log."/".$perfil);

    header("location:user.php");
}else{
    mysqli_query($link, "update tb_user set capa = '$capa', perfil = '$perfil' where id_user = '$id_log'");

    //upload das imagens/**/
    move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$email_log."/".$capa);
    move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$email_log."/".$perfil);

    header("location:user.php");

}





?>