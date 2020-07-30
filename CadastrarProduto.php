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
        <script type="text/javascript" src="jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="jquery.mask.min.js"></script>
       
        <script type="text/javascript">
                $(document).ready(function(){
                     $('#precoVenda').mask('000.000.000.000.000,00', {reverse: true});
                     $('#precoCusto').mask('000.000.000.000.000,00', {reverse: true});
                });
               
        </script>
        <style>
            input, td, th{height: 25px;}th{background-color: #bfbfbf;}td{background-color: #e6e6e6;}
        </style>
    </head>
    <body class="div1" onload="horario()">
        <!-- Icon Bar (Sidebar - hidden on small screens) -->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-animate-left">
            <!-- Avatar image in top left corner -->
            <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-black">
                <i class="fa fa-home w3-xxlarge " style="color: #e1e1d0" ></i>
              <p class="corLetraNavbar">HOME</p>
            </a>
            
            <div style="padding-top:320px;">
            <a href="Estoque.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
              <i style="font-size:50px; color: #e1e1d0; -moz-transform: scaleX(-1); 
              -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); 
              transform:scaleX(-1);" class="fa">&#xf08b;</i>
              <p class="corLetraNavbar">VOLTAR</p>
            </a>
            </div>    
            
            <a href="index.php" class="w3-display-bottomleft w3-bar-item w3-button w3-padding-large w3-hover-black ">
              <i class="fa fa-power-off " style="font-size:48px; color: #e1e1d0"></i>
              <p class="corLetraNavbar">Sair</p>
            </a>
        </nav>
        
        <!-- Navbar on small screens (Hidden on medium and large screens) -->
        <div class="w3-hide-large w3-hide-medium" id="myNavbar">
          <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="Home.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#Estoque.php" class="w3-bar-item w3-button" style="width:25% !important">VOLTAR</a>
            <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">SAIR</a>
          </div>
        </div>
        
        <!-- Cabeçalho -->
        <div class="w3-padding-large" id="main">
          <!-- Header/Home -->
          <header class="w3-container w3-padding-32 w3-center w3-black" id="home">  
            <h1 class="w3-jumbo">Amigo Bicho <i class=" fa fa-paw " style="font-size:65px; color: #e1e1d0"></i></h1>

          </header>
        </div>
        
        <!-- Page Content -->
        <div>
            <div class="divF">
                <fieldset style="border: 3px solid; border-radius: 30px 30px 30px 30px;width: 50%; margin: 0 auto 24px;" >
                    <legend style="letter-spacing: 2px; font-weight: 700;"> CADASTRO DE PRODUTO </legend>
                    <form method="post" action="guarda_func.php" oninput="unidade.value = unidadeA.value = unidadeMedida.value">
                        <table border="0">
                            <tr>
                                <th align="left" width="300px;"> Código: </th>
                                <td colspan="3"><input align="left" type="text" name="id_produto" size="61" required placeholder="Código do produto"></td>
                            </tr>
                            <tr>
                                <th align="left"> Descrição: </th>
                                <td colspan="3"><input align="left" type="text" name="descricao" size="61" required placeholder="Descrição do produto"/> </td>
                            </tr>
                            <tr>
                                <th align="left"> Grupo: </th>
                                <td><input align="left" type="text" name="grupo" size="20" required placeholder="Grupo do produto"/></td>
                                <th align="left"> &nbsp; Unidade de medida:</th>
                                <td>
                                <select name="unidadeMedida">
                                    <option value="kg">kg</option>
                                    <option value="m">g</option>
                                    <option value="m">L</option>
                                    <option value="m">mL</option>
                                    <option value="m">m</option>
                                    <option value="m">cm</option>
                                    <option value="un.">un.</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th align="left"> Quantidade: </th>
                                <td>
                                <input align="left" type="text" name="qntd" size="1" required />&nbsp;<output name="unidade" for="unidadeMedida"></output>
                                </td>
                                <th align="left"> &nbsp; Estoque mínimo: </th>
                                <td>
                                <input align="left" type="text" name="estoqueMinimo" size="1" required />&nbsp;<output name="unidadeA" for="unidadeMedida"></output>
                                </td>
                            </tr>
                            <tr>
                                <th align="left"> Preço de custo: </th>
                                <td> R$ <input align="left" id="precoCusto" type="text" name="precoCusto" size="10" /></td>
                                <th align="left"> &nbsp; Preço de venda: </th>
                                <td> R$ <input align="left" id="precoVenda" type="text" name="precoVenda" size="10" /></td>
                            </tr>
                        </table>
                       
                        <div style="float: right; padding-top: 10px;"><input type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/> &nbsp; <input type="submit" value="CADASTRAR" style="height: 40px; width: 105px; font-weight: bold;"/></div>
                                                                                       
                    </form>
                </fieldset>
            </div>
        </div>
        

    </body>
</html>    

