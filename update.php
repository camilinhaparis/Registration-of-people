<?php
SESSION_START();

include "verifica_login.php";
$id_update = $_GET['id_post'];
echo "Id da postagem que deve ser atualizada $id_update<br>";
header('content-type: text/html; charset=utf-8');

//Pegar os dados do formulário de postagem
include "connect.php";
$sql = "select * from tb_postagens WHERE id_postagem = '$id_update'";
$result = mysqli_query($link, $sql);
while ($text_update = mysqli_fetch_array($result)){
  $text = $text_update['postagem'];
}
?>


  <div class="img">    
  </div>  
    <form action="atualizar.php" method="post">
        <label>
            <b> Atualizar: </b>
            <br>
            <br>      
            <textarea name="atualiza" rows="10" cols="50" required><?php echo $text; ?></textarea><br><br>
            <input type = "hidden" name="id" value="<?php echo $id_update;?>">
            <input type="submit" value="Atualizar">
        </label>
    </form>