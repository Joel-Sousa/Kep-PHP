<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Formulário Produto</p>
        <div class="area">
        <form id="formProduto" name="formProduto"
              method="POST" action="Controle/controladorProduto.php">  
            <input id="idproduto" name="idproduto"
                   type="hidden"
                   value=""><br /><br />
            <label for="">descricao:</label>  
            <input id="descricao" name="descricao"
                   type="text"
                   value=""><br /><br />
            <label for="">preco:</label>  
            <input id="preco" name="preco"
                   type="text"
                   value=""><br /><br />
            <input id="submit" name="submit"
                   type="submit"
                   value="cadastrar" >            
                    
            
        </form>
        </div>
    </body>
</html>

