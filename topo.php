<header>
    <h1><?php echo $nome_log; ?></h1>
</header>

<figure id="img_perfil">
    <!--<img src="imagens/avatar.png">    -->
    <img src="<?php 
    if($perfil_log == "perfil.png"){
        echo "imagens/$perfil_log";
    }else{
        echo "users/$email_log/$perfil_log";
    }
?>" id="perfil">
</figure>


<nav>
    <ul id="foto">
        <li><img src="imagens/cam.png" id="cam" >
            <ul id="itens_menu">
                <li><a href="atualizar_fotos.php">Atualizar</a></li>
                <?php
                    if($perfil_log != "perfil.png"){
                ?>
                <li><a href="remover_fotos.php">Remover fotos</a></li>
                <?php  }?>
            </ul>
        </li>
    </ul>
</nav>

<section id="menu_perfil">
    <a href="index.php?page=1">Início</a>
    <a href="user.php?page=1">Sobre</a>
    <a href="user.php?page=2">Atividades</a>
    <a href="user.php?page=3">Nova Postagem</a>
    <a href="logout.php">Sair</a>
</section>