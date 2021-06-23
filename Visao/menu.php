

 <link rel="stylesheet" type="text/css" href="Visao/Estilo/estilo.css">
<div class="menu"
<ul>
<?php

if (isset($_SESSION['FuncionarioLogado']) && ($_SESSION['PerfilFuncionarioLogado'] < 3)) {
    echo '<a href="index.php?PAGINA=cadastrarFuncionario"><button class="btn btn-inserir"><li>Cadastrar Funcionário</li></button></a><br/>';
}
if (isset($_SESSION['FuncionarioLogado']) && ($_SESSION['PerfilFuncionarioLogado'] < 2)) {
    echo '<a href="index.php?PAGINA=listarFuncionario"><button class="btn btn-inserir"><li>Listar Funcionários</li></button></a><br/>';
}

if (isset($_SESSION['FuncionarioLogado']) && ($_SESSION['PerfilFuncionarioLogado'] < 2)) {
    echo '<a href="index.php?PAGINA=cadastrarProduto"><button class="btn btn-inserir"><li>cadastrar Produto</li></button></a><br/>';
}
if (!isset($_SESSION['FuncionarioLogado']) || (!isset($_SESSION['ClienteLogado']))) {
    echo '<a href="index.php?PAGINA=cadastrarCliente"><button class="btn btn-inserir"><li>Cadastrar Cliente</li></button></a><br/>';
}
if (isset($_SESSION['FuncionarioLogado']) && ($_SESSION['PerfilFuncionarioLogado'] < 3)) {
    echo '<a href="index.php?PAGINA=listarCliente"><button class="btn btn-inserir"><li>Listar Clientes</li></button></a><br/>';
}

if ((isset($_SESSION['FuncionarioLogado'])) || (isset($_SESSION['ClienteLogado']))) {
    echo '<a href = "Controle/logout.php"><button class="btn btn-inserir"><li>Sair</li></button></a>';
} else {
    $_POST['PAGINA']="login";
    echo "<a href='index.php?PAGINA=login'><button class='btn btn-inserir'><li>Fazer Login</li></button></a></a><br/>";
}
?>
</ul>
</div>