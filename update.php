<?php
SESSION_START();
include "verifica_login.php";
$id_update = $_GET['id_post'];
echo "Id da postagem que deve ser atualizada $id_update<br>";
?>

  <div class="img">    
  </div>  
    <form action="atualizar.php" method="post">
        <label>
            <b> Atualizar: </b>
            <br>
            <br>      
            <textarea name="atualiza" rows="10" cols="50" required></textarea><br><br>
            <input type="submit" value="Atualizar">
        </label>
    </form>