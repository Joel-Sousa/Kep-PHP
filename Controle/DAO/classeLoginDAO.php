<?php

session_start();
require_once 'conexao.php';

class classeLoginDAO {

    public function fazerLogin($email, $senha) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT nome,cargo,perfil FROM funcionario f
                    WHERE f.email = ? AND f.senha = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($funcionario == NULL) {
                try {
                    $sql = "SELECT nome,perfil FROM cliente c
                    WHERE c.email = ? AND c.senha = ?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(1, $email);
                    $stmt->bindValue(2, $senha);
                    $stmt->execute();
                    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($cliente != NULL) {
                        $_SESSION['ClienteLogado'] = 1;
                        $_SESSION['NomeClienteLogado'] = $cliente['nome'];
                        $_SESSION['PerfilClienteLogado'] = $cliente['perfil'];
                        return $cliente;
                    }
                } catch (Exception $ex) {
                    echo "erro" . $exc->getMessage();
                }
            } else {
                $_SESSION['FuncionarioLogado'] = 1;
                $_SESSION['NomeFuncionarioLogado'] = $funcionario['nome'];
                $_SESSION['CargoFuncionarioLogado'] = $funcionario['cargo'];
                $_SESSION['PerfilFuncionarioLogado'] = $funcionario['perfil'];
                return $funcionario;
            }
        } catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
        }
    }

}
