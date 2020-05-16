<html>
<head>
  <title>Menu Dropdown - Linha de Código</title>
  <link rel="stylesheet" type="text/css"  href="estilo.css" />  

</head>
<body>


<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left">
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge " style="color: #e1e1d0" ></i>
    <p class="corLetraNavbar">HOME</p>
  </a>
  <a href="Vendas.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-money" style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Vendas</p>
  </a>
  <a href="Funcionarios.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge" style="color: #e1e1d0"></i>
    <p class="corLetraNavbar">Funcionários</p>
  </a>
  <a class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-truck " style="font-size:48px; color: #e1e1d0"></i>
    <li><a style="color:white">Estoque</a>
        <ul style="position: relative; margin: 0px;" > 
             <li><a href="Fornecedores.php">Fornecedores</a></li> 
             <li><a href="Produtos.php">Produtos</a></li> 
             <li><a href="ControleEstoque.php">Controle</a></li> 
        </ul> 
   </li>
  </a>
  
  <a href="Testes.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-bird " style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">TESTE</p>
  </a>
  
  <a href="index.php" class="w3-display-bottomleft w3-bar-item w3-button w3-padding-large w3-hover-black ">
    <i class="fa fa-power-off " style="font-size:48px; color: #e1e1d0"></i>
    <p class="corLetraNavbar">Sair</p>
  </a>
</nav>
</body>
</html>