<?php
include "connect.php";
SESSION_START();  //RECUPERA A SESSÃO
if(isset($_SESSION["login_user"]) && isset($_SESSION["senha_user"])){
  header('location:user.php');
}

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
  <div class="img">
    <img src="img/Ajudai.png" />
  </div>
  <p class="cliente">Login do Cliente </p>
    <form action="login.php" method="post" >
      <label>
      Digite seu usuário* 
      </label>
      <input type="text" name="login" placeholder="Entre com o seu e-mail" class="entradas" required><br>
      <label>
      Senha*
      </label>
      <input type="password" name="senha" placeholder="Digite a sua senha" class="entradas" required><br>
      <label>
      <input type="submit" value="ENTRAR" class="bt_form">      
      </label>
    </form>  
    <a href="cadastre.php">Ainda não é inscrito <strong> Cadastre-se!</a></strong>     
</section>      

</body>
</html>
