<!DOCTYPE html>
<html>
<head>    
<title>Teste 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="W3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="estilo.css" rel="stylesheet" type="text/css"/>

<script src="Batata.js"></script>
</head>

<body class="div1" onload="horario()">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left">
  <!-- Avatar image in top left corner -->
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge " style="color: #e1e1d0" ></i>
    <p class="corLetraNavbar">HOME</p>
  </a>
  
  <a href="PesquisarF.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-search" style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Pesquisar</p>
  </a>
  <a href="AtualizarF.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-refresh" style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Atualizar</p>
  </a>
  <a href="ExcluirF.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-trash " style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Excluir</p>
  </a>
  
  <a href="Funcionarios.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i style="font-size:50px; color: #e1e1d0; -moz-transform: scaleX(-1); 
        -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); 
        transform:scaleX(-1);" class="fa">&#xf08b;</i>
        <p class="corLetraNavbar">VOLTAR</p>
  </a>
  
  
  <a href="index.php" class="w3-display-bottomleft w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-power-off " style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Sair</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="Home.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="CadastrarF.php" class="w3-bar-item w3-button" style="width:25% !important">CADASTRAR</a>
    <a href="GerenciarF.php" class="w3-bar-item w3-button" style="width:25% !important">GERENCIAR</a>
    <a href="Pendencias.php" class="w3-bar-item w3-button" style="width:25% !important">PENDÊNCIAS</a>
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">SAIR</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">  
    <h1 class="w3-jumbo">Amigo Bicho <i class=" fa fa-paw " style="font-size:65px; color: #e1e1d0"></i></h1>
    
  </header>
</div>

</body>

</html>