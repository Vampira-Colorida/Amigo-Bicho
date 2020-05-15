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
        <script type="text/javascript" src="jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="jquery.mask.min.js"></script>
       
        <script type="text/javascript">
        
            $(document).ready(function(){
                $('#telefoneFuncionario').mask('(00)00000-0000');
                $('#cpf').mask('000.000.000-00');
                $('#salario').mask('000.000.000.000.000,00', {reverse: true});
                $('#data').mask('00/00/0000');
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
            <a href="Funcionarios.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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
        
        <div>
            <div class="divF">
                <fieldset style="border: 3px solid; border-radius: 30px 30px 30px 30px;width: 50%; margin: 0 auto 24px;" >
                    <legend style="letter-spacing: 2px; font-weight: 700;"> CADASTRO DE FUNCIONÁRIO(A) </legend>
                    <form method="post" action="guarda_func.php">
                        <table border="0">
                            <tr>
                                <th align="left" colspan="4"> DADOS PESSOAIS: </th>
                            </tr>
                            <tr>
                                <th align="left"> Nome: </th>
                                <td colspan="3"><input align="left" type="text" name="nomeFuncionario" size="74" required placeholder="Nome do funcionário"></td>
                            </tr>
                            <tr>
                                <th align="left"> CPF: </th>
                                <td><input align="left" type="text" id="cpf" name="cpf" size="28" required placeholder="xxx.xxx.xxx-xx"/></td>
                                <th align="left"> &nbsp; Data de nascimento: </th>
                                <td><input align="left" type="date" name="dataNascimento" size="10" required /></td>
                            </tr>
                            <tr>
                                <th align="left"> E-mail: </th>
                                <td colspan="3"><input align="left" type="email" name="emailFuncionario" size="30" required placeholder="E-mail do funcionário"/></td>
                            </tr>
                            <tr>
                                <th align="left" rowspan="4"> Endereço: </th>
                            </tr>                            
                            <tr>
                                <td colspan="3"><input align="left" type="text" name="logradouroEndereco" size="63" required placeholder="Logradouro"/>&nbsp;<input align="left" type="tel" name="numeroEndereco" size="5" required placeholder="Número"/></td>
                            </tr>
                            <tr>
                            <td colspan="3"><input align="left" type="text" name="bairroEndereco" size="28" required placeholder="Bairro"/>&nbsp;<input align="left" type="text" name="cidadeEndereco" size="30" required placeholder="Cidade"/>&nbsp;
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
            </select></td>
            </tr>
            <tr>
                <td colspan="3"><input align="left" type="text" name="complementoEndereco" size="74" placeholder="Complemento"/></td>
            </tr>
            <tr>
                <th align="left"> Telefone: </th>
                <td colspan="3"><input align="left" type="text" id="telefoneFuncionario" name="telefoneFuncionario" size="30" required placeholder="Telefone do funcionário"/>
                <div id="imendaHTMLtelefone"></div>
                <a href="#" id="btnAdicionaTelefone" ><i>+</i> Adicionar mais um(a)</a></td>
            </tr>
            </table>
                <br>
            <table border="0">
            <tr>
                <th align="left" colspan="4"> DADOS PROFISSIONAIS: </th>
            </tr>
            <tr>
                <th align="left"> Cargo: </th>
                <td colspan="3"><input align="left" type="text" name="cargo" size="71" required placeholder="Cargo do funcionário"/></td>
            </tr>
            <tr>
                <th align="left"> Salário: </th>
                <td> <b>R$ </b><input align="left" id="salario" type="text" name="salario" size="25" placeholder="Salário do funcionário"/></td>
                <th align="left"> &nbsp;Data de admissão: </th>
                <td><input align="left" type="date" name="dataAdmissao" size="10" required /></td>                              
            </tr>
            <tr>
                <th align="left"> Formação: </th>
                <td colspan="3"><input align="left" type="text" name="formacao" size="74" placeholder="Formação do funcionário"/></td>
            </tr>
            </table>
                       
            <div style="float: right; padding-top: 10px;"><input type="reset" value="LIMPAR" style="height: 40px; width: 105px; font-weight: bold;"/> &nbsp; <input type="submit" value="CADASTRAR" style="height: 40px; width: 105px; font-weight: bold;"/></div>
                                                                                       
            </form>
            </fieldset>
            </div>
        </div>
    </body>
</html>    