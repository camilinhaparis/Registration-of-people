<?php
include "connect.php";
$consulta = "select nome,atividade,telefone from tb_user";
$con = mysqli_query($link, $consulta);

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
					<th>Telefone</th>
					<th>Perfil</th>
				</tr>
			</thead>
			<tbody>
				<?php while($dado = $con->fetch_array()){ ?>
					<tr>
						<td><?php echo $dado["nome"]; ?></td>
						<td><?php echo $dado["atividade"]; ?></td>
						<td><?php echo $dado["telefone"]; ?></td>
						<td><a href="user.php?page=1">Perfil</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</main>	

</body>
</html>