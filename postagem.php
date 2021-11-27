<?php
include "verifica_login.php";
header('content-type: text/html; charset=utf-8');
?>

  <div class="img">    
  </div>  
    <form action="postar.php" method="post">
        <label>
            <b> Postagem: </b><br><br>      
            <textarea name="postagem" rows="10" cols="50" required></textarea><br><br>
            <input type="submit" value="Publicar">
        </label>
    </form>  
    
