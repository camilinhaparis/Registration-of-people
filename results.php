<?php

include "connect.php";

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/main.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Ajudaí</title>
</header>

<body>

    <section id="topo">  
    <?php include "head/cabecalho.php"; ?>
    </section>
    <br>



<section class="container">
<?php
    $buscar=$_POST['buscar'];
    $sql = mysqli_query ($link, "SELECT * FROM tb_user WHERE atividade LIKE '%".$buscar."%' ");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
        while($linha = mysqli_fetch_array($sql)){
            $nome = $linha['nome'];
            $atividade = $linha['atividade'];
            $telefone = $linha['telefone'];
            $perfil = $linha['perfil'];
            echo "<strong>Nome: </strong>" .@$nome;
            echo "<br/></br>";
            echo "<strong>Profissional: </strong>" .@$atividade;
            echo "<br/></br>";
            echo "<strong>Telefone: </strong>" .@$telefone;
            echo "<br/><hr/>";
        }
    }else{
        echo "Desculpe, nenhum profissional nessa área foi encontrado!";
    }

?>
</section>


   
</body>
</html>