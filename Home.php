<!DOCTYPE html>
<html>
<head>    
<title>Teste 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Folhas de Estilo-->
<link rel="stylesheet" href="W3.css">
<link href="estilo.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="Batata.js"></script>

</head>


<body class="div1" onload="horario()">
    
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left" style="background: #000033; display: absolute;"></div>

<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left" style="background: none; display: absolute; width: 500px;">
  <!-- Avatar image in top left corner -->
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-black" style="width: 120px; height: 80px;">
      <i class="fa fa-home w3-xxlarge " style="color: #e1e1d0; margin: auto;" ></i>
      <p class="corLetraNavbar" style="margin: auto; text-align: center;">HOME</p>
  </a>
  
  <!--Botões expansiveis-->

  <div style=" width: 290px;">
      <!-- Caixa de botões-->
      <div>
          
        <!--ESTOQUE-->
        <div onclick="exprec('Hipo','icon')" class="w3-bar-item w3-button w3-padding-large w3-hover-black" style="width: 120px; height: 80px;">
            <i id="icon" class="fa fa-box" style="font-size:30px; color: #e1e1d0; margin:auto;"></i>
            <p class="corLetraNavbar" style="margin: auto; text-align: center;">Estoque</p>
        </div>
        
        <div id="Hipo" style="display: none; " class="w3-border-left w3-border-yellow">
        
        <!--ESTOQUE__Fornecedores__-->
        <div id="Surge" onmouseover="expande('HipoFornecedor', 'Surge','S')"  onmouseout="recolhe('HipoFornecedor', 'Surge', 'S')">
              
            <div id="HipoFornecedor" class="w3-animate-left" style="display: none; background: #303598; color: white; float: right; width: 180px; height: 80px; margin: 0px; z-index: -1;">
                
              <p style="text-align: right; font-size: 16px; margin-right: 10px;">
                  
                  <a>Cadastrar</a><br>
                  <a>Consultar</a><br>
              
              </p>
            </div>
            
        <!--Botão Fornecedor-->      
            <div id="S" class="w3-bar-item w3-button w3-padding-large  w3-container" style="width: 120px; height: 80px;">
                <i class="fa fa-shipping-fast " style="font-size: 24px; color: #e1e1d0; margin: auto;"></i>
                <p class="corLetraNavbar w3-display-center" style="margin: auto; ">Fornecedores</p>
                
            </div>
              

        </div>
        
        <!--ESTOQUE__Prdutos__-->
        
          <div id="Surge2" onmouseover="expande('HipoProduto', 'Surge2', 'S2')"  onmouseout="recolhe('HipoProduto', 'Surge2', 'S2')">
              
            <div id="HipoProduto" class="w3-animate-left" style="display: none; background: #303598; color: white; float: right; width: 180px; height: 80px; margin: 0px; z-index: -1;">
                
              <p style="text-align: right; font-size: 14px; margin-right: 10px;">
                  
                <a>Perdas e Roubos</a><br>
                <a>Entradas</a><br>
                <a>Consultas</a><br>
              
              </p>
            </div>  
            
            <!--Botão Produto-->  
              
            <div id="S2" class="w3-bar-item w3-button w3-padding-large " style="width: 120px; height: 80px;">
                <i class="fa fa-boxes " style="font-size:24px; color: #e1e1d0; margin:auto;"></i>
                <p class="corLetraNavbar" style="margin: auto; text-align: center;">Produtos</p>
                
            </div>
              

          </div>
        
        <!--ESTOQUE__Controle__-->
        
          <div id="Surge3" onmouseover="expande('HipoControle', 'Surge3', 'S3')"  onmouseout="recolhe('HipoControle', 'Surge3', 'S3')">
              
            <div id="HipoControle" class="w3-animate-left" style="display: none; background: #303598; color: white; float: right; width: 180px; height: 80px; margin: 0px; z-index: -1;">
                
              <p style="text-align: right; font-size: 14px; margin-right: 10px;">
                  
                <a>Giro</a><br>
                <a>Faturamento</a><br>
                <a>Consultar Estoque</a><br>
              
              </p>
            </div>
            
            <!--Botão Controle-->  
              
            <div id="S3" class="w3-bar-item w3-button w3-padding-large" style="width: 120px; height: 80px;">
                <i class="fas fa-gamepad " style="font-size:24px; color: #e1e1d0; margin: auto;"></i>
                <p class="corLetraNavbar" style="margin: auto; text-align: center;">Controle</p>
                
            </div>
              

          </div>
        </div>
          
          <!--FUNCIONÁRIOS-->
          
          
        <div onclick="exprec('Hiper','iconk')" class="w3-bar-item w3-button w3-padding-large w3-hover-black" style="width: 120px; height: 80px;">
            <i id="iconk" class="far fa-id-badge" style="font-size:30px; color: #e1e1d0; margin:auto;"></i>
            <p class="corLetraNavbar" style="margin: auto; text-align: center;">Funcionários</p>
        </div>
        
        <div id="Hiper" style="display: none; " class="w3-border-left w3-border-yellow">
        
        <!--FUNCIONÁRIOS__Cadastrar__-->
        <div id="Brotar" onmouseover="expande('HiperCadastrar', 'Brotar','B')"  onmouseout="recolhe('HiperCadastrar', 'Brotar', 'B')">
              

            
        <!--Botão Cadastrar-->      
            <div id="B" class="w3-bar-item w3-button w3-padding-large  w3-container" style="width: 120px; height: 80px;">
                <i class="fa fa-shipping-fast " style="font-size: 24px; color: #e1e1d0; margin: auto;"></i>
                <p class="corLetraNavbar w3-display-center" style="margin: auto; ">Cadastrar</p>
                
            </div>
              

        </div>
        
        <!--FUNCIONÁRIO__Consultar__-->
        
          <div id="Brotar2" onmouseover="expande('HiperProduto', 'Brotar2', 'B2')"  onmouseout="recolhe('HiperProduto', 'Brotar2', 'B2')">
              

            
            <!--Botão Consultar-->  
              
            <div id="B2" class="w3-bar-item w3-button w3-padding-large " style="width: 120px; height: 80px;">
                <i class="fa fa-boxes " style="font-size:24px; color: #e1e1d0; margin:auto;"></i>
                <p class="corLetraNavbar" style="margin: auto; text-align: center;">Consultar</p>
                
            </div>
              

          </div>
        
        <!--FUNCIONÁRIOS__Atualizar__-->
        
          <div id="Brotar3" onmouseover="expande('HiperControle', 'Brotar3', 'B3')"  onmouseout="recolhe('HiperControle', 'Brotar3', 'B3')">
              

            
            <!--Botão Atualizar-->  
              
            <div id="B3" class="w3-bar-item w3-button w3-padding-large" style="width: 120px; height: 80px;">
                <i class="fas fa-gamepad " style="font-size:24px; color: #e1e1d0; margin: auto;"></i>
                <p class="corLetraNavbar" style="margin: auto; text-align: center;">Atualizar Dados</p>
                
            </div>
              

          </div>
        </div>  
          
          
      </div>
      
      
      
  </div>
  

  
  <a href="index.php" class="w3-display-bottomleft w3-bar-item w3-button w3-padding-large w3-hover-black " style="width: 120px; height: 80px;">
    <i class="fa fa-power-off " style="font-size:28px; color: #e1e1d0"></i>
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
