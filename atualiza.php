<?php 
include "connect.php";
SESSION_START();
include "verifica_login.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/estilo.css" >
    
</head>   
   
<body>
  <!-----------seção principal do site------>
<section id="form"> 
  
    <img src="img/Ajudai.png"  style="display: block; margin: 40px auto;"/>
  
  <br>
  
    <form action="atualizar_fotos.php" method="post" enctype="multipart/form-data">
     
      <label>
      Imagem da capa:*
      </label>
      <input type="file" name="capa"  class="entradas_img" required ><br>

      <label>
      Imagem de perfil:*
      </label>
      <input type="file" name="perfil"  class="entradas_img" required><br>

      <label>
      <input type="submit" value="ATUALIZAR" class="bt_form_cad">      
      </label>

      
    </form>  
    <a href="user.php">VOLTAR</a>
</section>      

</body>
</html>
