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
    <body>listar Funcionario
        <?php
        
        require_once '../Modelo/classeFuncionario.php';
        $funcionario = new classeFuncionario();
        
        session_start();
        if (isset($_SESSION['funcionarios'])) {
            $funcionarios = unserialize($_SESSION['funcionarios']);
            foreach ($funcionarios as $funcionario) {
                echo $funcionario->nome;
                echo $funcionario['cargo'];
                echo $funcionario['perfil'];
                echo $funcionario['salario'] . "<br />";
            }
        }
        ?>
    </body>
</html>
