    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Início</title>
    </head>
    <body class="inicio1">
        <div class="container-fluid" >
        <div class="inicio2" >
                 
        <h1 style="font-size:65px; color: #e1e1d0">Amigo Bicho <i class=" fa fa-paw " style="font-size:65px; color: #e1e1d0"></i></h1>
            <div class="inicio3">
                <div>    
                    <a href="Home.php">Ir Para Home</a>
                </div>
                <h2>Área Restrita</h2>

                    <form method="POST" action="valida.php">
                        <table style="margin: 0 auto;">    
                            <tr style="height: 40px;">
                            <th style="width: 80px;"><label>Usuário</label></th>
                            <td><input type="user" name="user" placeholder="Usuário" required autofocus></td>
                            </tr>
                            <tr style="height: 40px;">
                            <th style="width: 80px;"><label>Senha</label></th>
                            <td><input type="password" name="senha" placeholder="Senha" required></td>
                            </tr>

                        </table>
                        <br>
                        <button type="submit">Acessar</button>
                    </form>
                

            </div> 
        </div>
        </div>
     <!--Responsivo em telas pequenas-->
         
    </body>
</html>

