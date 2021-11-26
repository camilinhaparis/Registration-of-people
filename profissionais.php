<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/main.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>   
   
<body>
<!-----------CABEÇÁRIO------>
<section id="topo">  
<?php include "head/cabecalho.php"; ?>
</section>

<section id="corpo">  
<!----------slide principal----->

<main>
	<div class="container ">
		<table class="table table-striped mt-5">
			<thead class="thead-dark">
				<tr>
					<th>Nome</th>
					<th>Atividade</th>
					<th>Mais</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= $user->nome ?></td>
						<td></td>
						<td><a href="usuario.php?u=<?= $user->id_usuario ?>">Perfil</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>	
</section>
<br>
<!-----------rodapé----------->
<section id="rodape">  
<?php include("head/rodape_index.php"); ?>
</section>
      
</body>
</html>