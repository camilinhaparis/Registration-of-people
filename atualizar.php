<?php
SESSION_START();
include "verifica_login.php";
$atualizar = $_POST['atualiza'];
echo $atualizar;

if($atualizar){

}else{
    header("location: user.php");
}

?>