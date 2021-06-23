<?php

require_once 'conexao.php';

class classeFuncionarioDAO {

    public function cadastrarFuncionario(classeFuncionario $funcionario) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO funcionario(nome,cpf,email,senha,dataadmissao,cargo,salario,perfil)"
                    . "VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getEmail());
            $stmt->bindValue(4, $funcionario->getSenha());
            $stmt->bindValue(5, $funcionario->getDataAdmissao());
            $stmt->bindValue(6, $funcionario->getCargo());
            $stmt->bindValue(7, $funcionario->getSalario());
            $stmt->bindValue(8, $funcionario->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function alterarFuncionario(classeFuncionario $funcionario) {
        try {
            $pdo = conexao::getInstance();
            $sql = "UPDATE funcionario SET nome=?,cpf=?,email=?,senha=?,dataadmissao=?,cargo=?,salario=?,perfil=?"
                    . " WHERE idFuncionario = " . $funcionario->getIdFuncionario().";";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getEmail());
            $stmt->bindValue(4, $funcionario->getSenha());
            $stmt->bindValue(5, $funcionario->getDataAdmissao());
            $stmt->bindValue(6, $funcionario->getCargo());
            $stmt->bindValue(7, $funcionario->getSalario());
            $stmt->bindValue(8, $funcionario->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarFuncionario() {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM funcionario";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $funcionarios = array();
            While ($funcionario = $stmt->fetchObject(__CLASS__)) {
                $funcionarios[] = $funcionario;
            }
            return $funcionarios;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function excluirFuncionario($idFuncionario) {
        try {
            $pdo = conexao::getInstance();
            $sql = "DELETE FROM funcionario WHERE idFuncionario = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idFuncionario);
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            
        }
    }

    public function buscarFuncionarioPorId($idFuncionario) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM funcionario WHERE idFuncionario = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idFuncionario);
            $stmt->execute();
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($funcionario != NULL) {
                $_SESSION['AlterarFuncionario'] = 1;
                $_SESSION['IdFuncionario'] = $funcionario['idFuncionario'];
                $_SESSION['NomeFuncionario'] = $funcionario['nome'];
                $_SESSION['CpfFuncionario'] = $funcionario['cpf'];
                $_SESSION['EmailFuncionario'] = $funcionario['email'];
                $_SESSION['SenhaFuncionario'] = $funcionario['senha'];
                $_SESSION['DataAdmissaoFuncionario'] = $funcionario['dataadmissao'];
                $_SESSION['CargoFuncionario'] = $funcionario['cargo'];
                $_SESSION['SalarioFuncionario'] = $funcionario['salario'];
                $_SESSION['PerfilFuncionario'] = $funcionario['perfil'];
                return $funcionario;
            }
            return $result;
        } catch (Exception $ex) {
            
        }
    }

}
