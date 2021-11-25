<!doctype html>
<html lang="en">
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


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slide.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/slide.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/slide.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>           
  

      <!-------Profissionais--->
      
<br>
<h2 class="pb-2 text-center ">Qual serviço especializado você procura?</h2>
  <h6 class="pb-2 text-center ">Ache o profissional que você precisa aqui, encanador, eletrecista, carpinteiro...</h6>

<section class="container">    
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Pesquise por serviço" aria-label="Search">
      <input type="text"class="form-control me-2" placeholder=" CEP" aria-label="Zip">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</section>

<!-----------explicação cadastro----------->
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 text-center ">3 Passos para divulgar o seu serviço</h2>
  
<section class="container">
    <div class="row">
        
    <div class="card-group">
  <div class="card">
      <br>
  <img src="./img/conta.png" height="100" width="100" style="display: block; margin: 0 auto;"   />
    <div class="card-body">
      <h5 class="card-title">1º Passo: Crie sua conta</h5>
      <p class="card-text">Em segundos você cria sua conta.</p>      
    </div>
  </div>
    <!-------------->
  <div class="card">
      <br>
  <img src="./img/cadastro.png" height="100" width="100" style="display: block; margin: 0 auto;"  />
    <div class="card-body">
      <h5 class="card-title">2º Passo: cadastre o seu serviço</h5>
      <p class="card-text">Mantenha sempre atualizada sua conta para que seus clientes possam te encontrar.</p>
      <!-------------->
    </div>
  </div>
  <div class="card">
      <br>
 <img src="./img/conta.png" height="100" width="100" style="display: block; margin: 0 auto;"  />
    <div class="card-body">
      <h5 class="card-title">3º Passo: Crie sua conta</h5>
      <p class="card-text">Faça bons negócios e fidelize seus clientes.</p>
      
    </div>
  </div>
</div>
    </div>

</section>

 <!---------------anuncie aqui --------------->


 <div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Anuncie aqui!</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
    style="background-image: url('img/anuncie.jpg') ;" >
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">  <!--c---> </h2>          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
      style="background-image: url('img/anuncie-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Se você viu isso, seus cliente também vão ver! Anuncie </h2>          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" 
      style="background-image: url('img/anuncie-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Sem manter visibilidade sua empresa não vende</h2>          
        </div>
      </div>
    </div>

  </div>

<!-------profissionais em destaque--------->
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 ">Profissionais em destaque</h2>
  <h6 class="pb-2 border-bottom">Peça sempre avaliação dos seus clientes</h6>
  <br>
</div>
  
<div class="container marketing">
    
<div class="row">
      <div class="col-lg-4">

        <svg class="bd-placeholder-img rounded-circle " width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" 
        style= "background-image: url('img/fotomenina.jpg');" ></svg>
        <h2>Camila</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="usuario.php?u=6">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" style= "background-image: url('img/fotomenino.png');" ></svg>
        <h2>Guilherme</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" 
        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" 
        preserveAspectRatio="xMidYMid slice" style= "background-image: url('img/fotomenino.png');" ></svg>
        <h2>Mauro</h2>
        <p>Another exciting bit of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
</div> 
      
</main>
</section>

<!-----------rodapé----------->
<section id="rodape">  
<?php include("head/rodape_index.php"); ?>
</section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
      crossorigin="anonymous"></script>
</body>

</html>
