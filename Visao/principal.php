<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['MSG'])) {
            $mensagem = $_GET['MSG']."<br />";
            echo $mensagem;
        }
        if (isset($_SESSION['FuncionarioLogado'])&& ($_SESSION['FuncionarioLogado'] == 1)) {
            $nomeFuncionarioLogado = $_SESSION['NomeFuncionarioLogado'];
            $perfilFuncionarioLogado = $_SESSION['PerfilFuncionarioLogado'];
            $cargoFuncionarioLogado = $_SESSION['CargoFuncionarioLogado'];
            echo "Nome: ".$nomeFuncionarioLogado."<br />";
            echo "Perfil: ".$perfilFuncionarioLogado."<br />";
            echo "Cargo: ".$cargoFuncionarioLogado."<br />";
        } elseif(isset($_SESSION['ClienteLogado'])&& ($_SESSION['ClienteLogado'] == 1)) {
            $nomeClienteLogadoLogado = $_SESSION['NomeClienteLogado'];
            $perfilClienteLogado = $_SESSION['PerfilClienteLogado'];
            echo "Nome: ".$nomeClienteLogadoLogado."<br />";
            echo "Perfil: ".$perfilClienteLogado."<br />";
        }
        ?>
    </body>
</html>
