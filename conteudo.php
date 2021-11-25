 <?php
//@$pagina = $_GET['page'];

$pagina = isset($_GET['page'])?$_GET['page']:"";


if($pagina == 2){
    include "postagens.php";
}else if($pagina == 3){
    include "postagem.php";
}else{
    include "usuario.php";
}


?>