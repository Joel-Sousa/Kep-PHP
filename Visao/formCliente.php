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
            <form id="formCliente"
                  name="formCliente"
                  method="POST"
                  action="Controle/controladorCliente.php?ACAO=cadastrar">
                <fieldset>
                    <legend>Cliente</legend>                 
                    <input class="idCliente" name="idCliente"
                           type="hidden"
                           value=""><br /><br />

                    <label for="nome">Nome:</label>
                    <input class="nome" name="nome"
                           type="text"
                           value=""><br /><br />
                    <label for="email">Email:</label>
                    <input class="email" name="email"
                           type="text"
                           value=""><br /><br />

                    <label for="cpf">CPF:</label>
                    <input class="cpf" name="cpf"
                           type="text"
                           value=""><br /><br />
                    
                    <label for="senha">Senha:</label>            
                    <input class="senha" name="senha"
                           type="password"
                           value=""><br /><br />

                    <input class="submit" name="submit"
                           type="submit"
                           value="Cadastrar">
                </fieldset>

            </form>
        </div>
    </body>
</html>
