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
                    $('#telefoneFornecedor').mask('(00)00000-0000');
                    $('#cnpj').mask('00.000.000/0000-00');
                    $('#inscricaoEstadual').mask('00.000.00-0');                  
                });
               
        </script>
        <style>
            input, td, th{height: 25px} th{background-color: #bfbfbf; width: 200px;}td{background-color: #e6e6e6;}
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
                    <legend style="letter-spacing: 2px; font-weight: 700;"> CADASTRO DE FORNECEDOR(A) </legend>
                    <form method="post" action="guarda_func.php">
                        <br>
                        <table border="0">
                        <tr>
                            <th align="left" colspan="4"> DADOS PESSOAIS: </th>
                        </tr>
                        <tr>
                            <th align="left"> CNPJ: </th>
                            <td><input align="left" type="text" id="cnpj" name="cnpj" size="15" required placeholder="xx.xxx.xxx/xxxx-xx"></td>
                            <th align="left" > Inscrição estadual: </th>
                            <td><input align="left" type="text" id="inscricaoEstadual" name="inscricaoEstadual" size="15" required placeholder="xx.xxx.xx-x"/></td>
                        </tr>
                        <tr>
                            <th align="left"> Razão Social: </th>
                            <td colspan="3"><input align="left" type="text" name="razaoSocial" size="67" required placeholder="Razão Social do fornecedor"></td>
                        </tr>
                        <tr>
                            <th align="left"> Nome Fantasia: </th>
                            <td colspan="3"><input align="left" type="text" name="nomeFantasia" size="67" required placeholder="Nome Fantasia do fornecedor"></td>
                        </tr>
                        <tr>
                            <th align="left"> E-mail: </th>
                            <td colspan="3"><input align="left" type="email" name="emailFornecedor" size="30" required placeholder="E-mail do fornecedor"/></td>
                        </tr>
                        <tr>
                            <th align="left"> Telefone: </th>
                            <td colspan="3"><input align="left" type="text" id="telefoneFornecedor" name="telefoneFornecedor" size="30" required placeholder="Telefone do fornecedor"/></td>
                        </tr>
                        <tr>
                            <th align="left" rowspan="4"> Endereço: </th>
                        </tr>                            
                        <tr>
                            <td colspan="3"><input align="left" type="text" name="logradouroEndereco" size="56" required placeholder="Logradouro"/>&nbsp;<input align="left" type="tel" name="numeroEndereco" size="5" required placeholder="Número"/></td>
                        </tr>
                        <tr>
                        <td colspan="3"><input align="left" type="text" name="bairroEndereco" size="26" required placeholder="Bairro"/>&nbsp;<input align="left" type="text" name="cidadeEndereco" size="25" required placeholder="Cidade"/>&nbsp;
                            <select name="estadoEndereco">
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input align="left" type="text" name="complementoEndereco" size="67" placeholder="Complemento"/></td>
                        </tr>                          
                        </table>
                        
                        <div style="float: right; padding-top: 10px;"><input type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/> &nbsp; <input type="submit" value="CADASTRAR" style="height: 40px; width: 105px; font-weight: bold;"/></div>
                                                                                       
                    </form>
                </fieldset>
            </div>
        </div>
        

    </body>
</html> 
