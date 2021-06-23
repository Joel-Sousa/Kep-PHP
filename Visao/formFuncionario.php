<?php
require_once './Modelo/classeFuncionario.php';
$funcionarioAlterado = new classeFuncionario;

if (isset($_SESSION['AlterarFuncionario']) && ($_SESSION['AlterarFuncionario'] == 1)) {
    $funcionarioAlterado->setIdFuncionario($_SESSION['IdFuncionario']);
    $funcionarioAlterado->setNome($_SESSION['NomeFuncionario']);
    $funcionarioAlterado->setCpf($_SESSION['CpfFuncionario']);
    $funcionarioAlterado->setEmail($_SESSION['EmailFuncionario']);
    $funcionarioAlterado->setSenha($_SESSION['SenhaFuncionario']);
    $funcionarioAlterado->setDataAdmissao($_SESSION['DataAdmissaoFuncionario']);
    $funcionarioAlterado->setCargo($_SESSION['CargoFuncionario']);
    $funcionarioAlterado->setSalario($_SESSION['SalarioFuncionario']);
    $funcionarioAlterado->setPerfil($_SESSION['PerfilFuncionario']);
    $url="Controle/controladorFuncionario.php?ACAO=alterar";
    $submitValue="Alterar";
} else {
    $funcionarioAlterado->setIdFuncionario('');
    $funcionarioAlterado->setNome('');
    $funcionarioAlterado->setCpf('');
    $funcionarioAlterado->setEmail('');
    $funcionarioAlterado->setSenha('');
    $funcionarioAlterado->setDataAdmissao('');
    $funcionarioAlterado->setCargo('');
    $funcionarioAlterado->setSalario('');
    $funcionarioAlterado->setPerfil('');
    $url="Controle/controladorFuncionario.php?ACAO=cadastrar";
    $submitValue="Cadastrar";

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
        <title></title>
    </head>
    <body>
        <div class="area">
            <form id="formFuncionario"
                  name="formFuncionario"
                  method="POST"
                  action="<?php echo $url;?>">
                <fieldset>
                    <div id="fundo"
                    <legend>Funcionário</legend>                 
                    <input class="idFuncionario" name="idFuncionario"
                           type="hidden"
                           value="<?php echo $funcionarioAlterado->getIdFuncionario(); ?>">

                    <br /><br />

                    <label for="nome">Nome:</label>
                    <input class="nome" name="nome"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getNome(); ?>">

                    <br /><br />
                    <label for="email">Email:</label>
                    <input class="email" name="email"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getEmail(); ?>">                    
                    <br /><br />

                    <label for="cpf">CPF:</label>
                    <input class="cpf" name="cpf"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getCpf(); ?>">

                    <br /><br />
                    <label for="senha">Senha:</label>            
                    <input class="senha" name="senha"
                           type="password"
                           value="<?php echo $funcionarioAlterado->getSenha(); ?>">
                    <br /><br />

                    <label for="dataAdmissao">Data de Admissão:</label>            
                    <input class="dataAdmissao" name="dataAdmissao"
                           type="date"
                           value="<?php echo $funcionarioAlterado->getDataAdmissao();?>">
                    <br /><br />
                    
                    
                    <label for="cargo">Cargo:</label>            
                    <input class="cargo" name="cargo"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getCargo();?>">
                    <br /><br />                                                           

                    <label for="salario">Salário:</label>  
                    <input class="salario" name="salario"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getSalario();?>">
                    <br /><br />

                    <label for="perfil">Perfil:</label>  
                    <input class="perfil" name="perfil"
                           type="text"
                           value="<?php echo $funcionarioAlterado->getPerfil();?>">
                    <br /><br />
                    
                    <input class="" name="submit"
                            type="reset"  name="reset" value="Limpar">

                    <input class="submit" name="submit"
                           type="submit"
                           value="<?php echo $submitValue;?>">
                    </div>
                </fieldset>

            </form>
        </div>
    </body>
</html>
