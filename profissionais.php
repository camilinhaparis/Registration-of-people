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
</head>

<body>
<section id="topo">  
<?php include "head/cabecalho.php"; ?>
</section>

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
						<td><a href="usuario.php?u=<?= $user->id_user ?>">Perfil</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>	

</body>
</html>