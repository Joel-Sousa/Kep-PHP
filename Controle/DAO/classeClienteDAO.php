<?php

require_once 'conexao.php';

class classeClienteDAO {

    public function cadastrarCliente(classeCliente $cliente) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO cliente(nome,cpf,email,senha,dataCadastro,perfil)"
                    . "VALUES (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cliente->getNome());
            $stmt->bindValue(2, $cliente->getCpf());
            $stmt->bindValue(3, $cliente->getEmail());
            $stmt->bindValue(4, $cliente->getSenha());
            $stmt->bindValue(5, $cliente->getDataCadastro());
            $stmt->bindValue(6, $cliente->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarCliente() {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM cliente";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $clientes = array();
            While ($Cliente = $stmt->fetchObject(__CLASS__)) {
                $Clientes[] = $Cliente;
            }
            
            return $Clientes;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function excluirCliente($idCliente) {
        try {
            $pdo = conexao::getInstance();
            $sql="DELETE FROM cliente WHERE idCliente = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idCliente);
            $result = $stmt->execute();
            return $result;
            
        } catch (Exception $ex) {
            
        }
    }

}
