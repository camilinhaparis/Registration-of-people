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
  <a href="index.php" class="classe2"><img src="img/Ajudai.png" /></a>
  </div> 
  <br> 
  <p class="cliente">Cadastro do Cliente </p>
    <form action="cadastrar.php" method="post" enctype="multipart/form-data">
      <label>
      Nome:* 
      </label>
      <input type="text" name="nome" placeholder="Digite o seu nome completo" class="entradas" required><br>

      <label>
      Atividade:*
      </label>
      <input type="text" name="atividade" placeholder="Digite sua atividade" class="entradas" required><br>

      <label>
      E-mail:*
      </label>
      <input type="text" name="email" placeholder="Digite o e-mail" class="entradas" required><br>

      <label>
      Senha:*
      </label>
      <input type="password" name="senha" placeholder="Digite uma senha" class="entradas" required><br>

      <label>
      Dica:*
      </label>
      <input type="text" name="dica" placeholder="Digite uma dica" class="entradas" required><br>

      <label>
      Telefone:*
      </label>
      <input type="text" name="telefone" placeholder="Digite o seu telefone" class="entradas" required><br>

      <label>
      Endereco:*
      </label>
      <input type="text" name="endereco" placeholder="Digite o seu endereco" class="entradas" required><br>      

      <label>
      Imagem da capa:*
      </label>
      <input type="file" name="capa"  class="entradas_img" required><br>

      <label>
      Imagem de perfil:*
      </label>
      <input type="file" name="perfil"  class="entradas_img" required><br>

      <label>
      <input type="submit" value="CADASTRAR" class="bt_form_cad">        
      </label>
    </form>  
    <a href="perfil.php" >LOGAR</a><br>
    
</section>      

</body>
</html>
