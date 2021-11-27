<?php
//arquivo de conexão com o banco de dado
include "connect.php";
$nome = $_POST['nome'];
$atividade = $_POST['atividade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dica = $_POST['dica'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cadastrar = false;

//variáveis com arquivos do upload
$capa = $_FILES['capa'] ['name'];
$capa_tipo = $_FILES['capa']['type'];

$perfil = $_FILES['perfil'] ['name'];
$perfil_tipo = $_FILES['perfil']['type'];

//verificar se é possível cadastrar
if($nome != "" && $atividade !="" && $email !="" && $senha !="" && $dica !="" && $telefone !="" && $endereco !="" && $capa !="" && $perfil !=""){
   $cadastrar = true;    
}else{
    echo "Não pode deixar os campos vazios<br>";
    echo "<a href='cadastre.php'>Voltar</a><br>";
}

//local das imagens dos usuários cadastrados
$pasta = $email;

//criar pasta em php com base em uma verificação #25
/**/
if (file_exists("users/".$pasta)){
    //header("location:cadastre.php");  ---pode ser dessa forma optamos pela de baixo #26
    $cadastrar = false;
    echo "Você já possui uma pasta<br>";
    echo "<a href='cadastre.php'> Voltar a tela de cadastro</a><br>";
}else{
    $cadastrar = true;
    mkdir("users/".$pasta,0777);
}


//Imprimindo os valores armazenados na variáveis
/*echo "Nome:   ".$nome."<br>";
echo "atividade:   ".$atividade."<br>"; 
echo "E-mail:   ".$email."<br>";
echo "Senha:   ".$senha."<br>";
echo "Dica:   ".$dica."<br>";
echo "Telefone:   ".$telefone."<br>";
echo "Endereço:   ".$endereco."<br>";

echo "Capa:   ".$capa."<br>";
echo "Tipo de arquivo da capa:" .$capa_tipo."<br>";

echo "Perfil:   ".$perfil."<br>";
echo "Tipo de arquivo da perfil:" .$perfil_tipo."<br>";
*/


//nome da variáveis para ser inserido no banco de dado
if($cadastrar){
    $sql = "INSERT into tb_user(nome, atividade, email, senha, dica, telefone, endereco, perfil, capa) VALUES 
    ('$nome','$atividade','$email','$senha','$dica','$telefone','$endereco','$perfil','$capa');";
    mysqli_query($link,$sql); 
    echo "<a href='perfil.php'>Ir para a tela de login</a><br>";
    //serve para cadastrar os dados do formulario no banco de dado

    //upload das imagens/**/
    move_uploaded_file($_FILES['capa']['tmp_name'],"users/".$pasta."/".$capa);
    move_uploaded_file($_FILES['perfil']['tmp_name'],"users/".$pasta."/".$perfil);
    echo "<a href='cadastre.php'> Cadastrar outro usuário</a>";

}                



?>