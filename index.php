<?php
session_start();
if (isset($_SESSION['ClienteLogado'])) {
    $nomeClienteLogado = $_SESSION['NomeClienteLogado'];
    $perfilClienteLogado = $_SESSION['PerfilClienteLogado'];
}else{
    $nomeClienteLogado = NULL;
    $perfilClienteLogado = NULL;
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>KEP - bone</title>
        <link rel="stylesheet" type="text/css" href="Visao/Estilo/estilo.css">
        
        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm('Deseja Continuar?');
            }
        </script>
    </head>
    <body>
        <div id="tudo">

            <div id="topo">
                <div id="imagemTopo"><img src="Imagens/KEP2.png" height="140px" width="550px"></div>

            </div>
            <div id="usuarioLogado">

            </div>

            <div id="principal">
                
                            <?php
                if (isset($_GET["PAGINA"])) {
                    $pagina = $_GET["PAGINA"];
                    switch ($pagina) {
                        case 'login':
                            require_once './Visao/formLogin.php';
                            break;
                         case "cadastrarProduto":
                            require_once './Visao/formProduto.php';
                            break;
                        case "principal":
                            require_once './Visao/principal.php';
                            break;
                        case "cadastrarFuncionario":
                            require_once './Visao/formFuncionario.php';
                            break;
                        case "alterarFuncionario":
                            $_GET['ACAO'] = 'alterar';
                            require_once './Controle/controladorFuncionario.php';
                            break;
                        case "buscarFuncionario":
                            $_GET['ACAO'] = 'buscarPorId';
                            require_once './Controle/controladorFuncionario.php';
                            break;
                        case "listarFuncionario":
                            $_GET['ACAO'] = 'listar';
                            require_once ("./Controle/controladorFuncionario.php");
                            break;
                        case "excluirFuncionario":
                            $_GET['ACAO'] = 'excluir';
                            require_once ("./Controle/controladorFuncionario.php");
                            break;
                        case "cadastrarCliente":
                            require_once ("./Visao/formCliente.php");
                            break;
                        case "listarCliente":
                            $_GET['ACAO'] = 'listar';
                            require_once ("./Controle/controladorCliente.php");
                            break;
                        case "excluirCliente":
                            $_GET['ACAO'] = 'excluir';
                            require_once ("./Controle/controladorCliente.php");
                            break;

                        default:
                    }
                } else {
                    
                }
                ?>

<div class="slides">
             <ul> <!-- slides -->
                 <li><img src="Imagens/foto2.jpg" height="400" width="400"/></li>
                 <li><img src="../imagens/camera.jpg" height="400" width="1220"/></li>
                 <li><img src="../imagens/cabo.jpg" height="400" width="1220"/> </li> 
                 <li><img src="../imagens/caixasom.jpg" height="400" width="1220"/></li>

             </ul>
         </div>
            </div>
            
            <div class="navegacao">
               <div class="menu"
                <li><button class="btn btn-inserir"> <li><a href="index.php">Home</a></li></button>
               </div>
                <?php
                require_once './Visao/menu.php';
                ?>

            </div>

            <div id = "rodape">
                <?php
                include './Visao/rodape.php';
                ?>
            </div>

        </div>

        <?php
//        
        ?>
    </body>
</html>
