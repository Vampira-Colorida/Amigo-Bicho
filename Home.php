<!DOCTYPE html>
<html>
<head>    
<title>Teste 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="estilo.css" rel="stylesheet" type="text/css"/>

<script src="Batata.js"></script>
</head>


<body class="div1" onload="horario()">
    
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left" style="background: #000033; display: absolute;"></div>

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left" style="background: none; display: absolute; width: 50%;">
  <!-- Avatar image in top left corner -->
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-black" style="width: 120px; height: 120px;">
      <i class="fa fa-home w3-xxlarge " style="color: #e1e1d0" ></i>
    <p class="corLetraNavbar">HOME</p>
  </a>
  <a href="Vendas.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" style="width: 120px; height: 120px;">
    <i class="fa fa-money" style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Vendas</p>
  </a>
  <a href="Funcionarios.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black" style="width: 120px; height: 120px;">
    <i class="fa fa-user w3-xxlarge" style="color: #e1e1d0"></i>
    <p class="corLetraNavbar">Funcionários</p>
  </a>
    <div onmouseover="expande('est','estg')" onmouseout="recolhe('est','estg')" id="estg" style="width: 300px;">
    <div class="w3-bar-item w3-button w3-padding-large w3-hover-black" style="width: 120px; height: 120px; float: left;">
      <i class="fa fa-truck " style="font-size:48px; color: #e1e1d0"></i>
      <p class="corLetraNavbar">Estoque</p>
    </div>
    <div id="est" class="w3-animate-left" style="display: none; background: #B3A774; color: white; float: right; width: 180px; height: 120px; margin: 0px; z-index: -1;">
      <p style="padding: 20px; text-align: right; font-size: 16px">
      <a>Fornecedores</a><br>
      <a>Produtos</a><br>
      <a>Controle</a><br>
      </p>
    </div>
    </div>
  

  
  <a href="index.php" class="w3-display-bottomleft w3-bar-item w3-button w3-padding-large w3-hover-black " style="width: 120px; height: 120px;">
    <i class="fa fa-power-off " style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Sair</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="Home.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="Vendas.php" class="w3-bar-item w3-button" style="width:25% !important">VENDAS</a>
    <a href="Funcionarios.php" class="w3-bar-item w3-button" style="width:25% !important">FUNCIONÁRIOS</a>
    <a href="#Estoque.php" class="w3-bar-item w3-button" style="width:25% !important">ESTOQUE</a>
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
<div class="w3-padding-large w3-display-container" id="main">
    <fieldset style="border:6px solid; width: 47%; margin:0 24px;" class="w3-panel w3-border-black w3-pale-white w3-display-topleft" > 
        <legend style="padding:5px;"><b>Guia de Utilização do Sistema</b></legend>
        
            <br>
                 
            Olá, usuário! Este é um guia para te ajudar a se localizar no sistema. Abaixo você encontrará informações sobre cada seção.

            <dl>
              <dt>( 1 ) Acesse a tela de VENDAS para:</dt>
              <dd>- Efetuar nova venda;</dd>
              <dd>- Pesquisar vendas realizadas;</dd>
              <dd>- Gerar relatórios de faturamentos diário, semanal ou mensal;</dd>
              <dt>( 2 ) Acesse a tela de FUNCIONÁRIOS para:</dt>
              <dd>- Cadastrar ou editar dados de um(a) funcionário(a);</dd>
              <dd>- Pesquisar dados de um(a) funcionário(a);</dd>
              <dd>-Visualizar pendências relacionadas a funcionários.</dd>
              <dt>( 3 ) Acesse a tela de ESTOQUE para:</dt>
              <dd>- Gerenciar as mercadorias disponíveis;</dd>
              <dd>- Verificar quais produtos estão em falta;</dd>
            </dl>    
            
    </fieldset>
    
    <fieldset style="border:6px solid; width: 47%; margin: 0 24px;" class="w3-panel w3-border-black w3-pale-white w3-display-topright" > 
      <legend style="padding:5px;"><b>Horário</b></legend>
      <div style="height: 337px">
      <label id="relogio" class="w3-panel w3-jumbo w3-center" style="margin: auto;"></label>
      </div>
    </fieldset>
</div>    

</body>

</html>
