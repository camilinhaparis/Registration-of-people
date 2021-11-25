<header>
    <h1><?php echo $nome_log; ?></h1>
</header>

<figure>
    <!--<img src="imagens/avatar.png">    -->
    <img src="<?php echo "users/$email_log/$perfil_log"?>"> 
</figure>


<nav>
    <ul id="foto">
        <li><img src="imagens/cam.png" id="cam" >
            <ul id="itens_menu">
                <li><a href="upload_foto.php">Upload de foto</a></li>
                <li><a href="remover_foto.php">Remover foto</a></li>
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