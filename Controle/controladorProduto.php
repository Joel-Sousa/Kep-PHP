<?php
require_once '../Modelo/classeProduto.php';
require_once './DAO/classeProdutoDAO.php';

$idproduto = $_POST["idproduto"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];


$novoProduto = new classeProduto();
$novoProduto->setIdFuncionario($idproduto);
$novoProduto->setdescricao($descricao);
$novoProduto->setpreco($preco);


$ProdutoDAO = new classeProdutoDAO();
$cadastrar = $ProdutoDAO->cadastrarProduto($novoProduto);
if ($cadastrar) {
    header('Location: ../index.php?MENSAGEM=Produto Cadastrado com SUCESSO!!!');
}  else {
    header('Location: ../index.php?MENSAGEM=Erro de Cadastro!!!'); 
}


        

?>
