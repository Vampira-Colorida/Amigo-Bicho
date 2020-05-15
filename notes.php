   
Colocar no logoff do home

<p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
</p> 
   
<p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
                if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
</p>

-->Criar tela de aviso na tela de cadastro caso usuário tente cadastrar item ou pessoa ja cadastrado.
-->Alinhar os campos dos forms
--> ícones da barra de navegação (GerenciarF)
-->Colocar e-mail e tel na mesma linha no formulário(GerenciarF)
-->Colocar novo campo quando apertar no botão adc(GerenciarF)
-->Descrição do Produto, na tela de Estoque: Colocar como caixinha
--> Repensar cor de seleção do HOME