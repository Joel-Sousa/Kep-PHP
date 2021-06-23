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
        <p>Formulário Login</p>
        <form id="formLogin" name="formLogin"
              method="POST" action="Controle/controladorLogin.php">
            <label for="email">Email:</label>  
            <input id="email" name="email" type="text" value=""><br/><br/>
            <label for="senha">Senha:</label>  
            <input id="senha" name="senha"
                   type="password"
                   value=""><br /><br />
            <input id="submit" name="submit"
                   type="submit"
                   value="Fazer Login" >            
                    
            
        </form>
    </body>
</html>