<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controllerPessoa.php" method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome"/></td>
                </tr>
                <tr>
                    <td>Cpf:</td>
                    <td><input type="text" name="cpf"/></td>
                </tr>
                <tr>
                    <td>Endereco:</td>
                    <td><input type="text" name="endereco"/></td>
                </tr>
                <tr>
                    <td>Data Nascimento:</td>
                    <td><input type="text" name="dtnasc"/></td>
                </tr> 
                <tr>
                    <td colspan="2">
                        <input type="submit" value="cadastrar"/>
                    </td>
                </tr> 
            </table>
        </form>
    </body>
</html>