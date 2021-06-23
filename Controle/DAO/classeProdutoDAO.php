<?php

require_once 'conexao.php';

class classeProdutoDAO {

    public function cadastrarProduto(classeProduto $Produto) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO Produto(idproduto,descricao,preco)"
                    . "VALUES (?,?,?)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $Produto->getidProduto());
            $stmt->bindValue(2, $descricao->getdescricao());
            $stmt->bindValue(3, $preco->getpreco());
           
            $resultset = $stmt->execute();
                                    
            return $resultset;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
