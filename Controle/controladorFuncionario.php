<?php

if (isset($_GET['ACAO'])) {
    $acao = $_GET['ACAO'];

    switch ($acao) {
        case 'listar':
            require_once './Modelo/classeFuncionario.php';
            require_once './Controle/DAO/classeFuncionarioDAO.php';

            $funcionarioDAO = new classeFuncionarioDAO;
            $funcionarios = array();
            $funcionarios = $funcionarioDAO->listarFuncionario();

            echo "<div class='linha'>";
            echo "<div class='coluna_nome'>Nome</div>";
            echo "<div class='coluna_cargo'>Cargo</div>";
            echo "<div class='coluna_email'>Email</div>";
            echo "<div class='coluna_salario'>Salário</div>";
            echo "<div class='coluna_excluir'>Excluir</div>";
            echo "<div class='coluna_alterar'></div>";
            echo "</div>";
            foreach ($funcionarios as $funcionario) {
                echo "<div class='linha'>";
                echo "<div class='coluna_nome'>" . $funcionario->nome . "</div>";
                echo "<div class='coluna_cargo'>" . $funcionario->cargo . "</div>";
                echo "<div class='coluna_email'>" . $funcionario->email . "</div>";
                echo "<div class='coluna_salario'>" . $funcionario->salario . "</div>";
                echo "<div class='coluna_excluir'>"
                . "<a href='index.php?PAGINA=excluirFuncionario&&idFuncionario="
                . $funcionario->idFuncionario . "' onclick='return checkDelete()'>"
                . "X</a></div>";
                echo "<div class='coluna_alterar'>"
                        
                . "<a href='index.php?PAGINA=buscarFuncionario&&idFuncionario="
                . $funcionario->idFuncionario . "' ><img src='./Imagens/alterar.png' width='50' height='22'></a></div>";
                        
                echo "</div>";
            }
//            session_start();
//            $_SESSION['funcionarios'] = serialize($funcionarios);
//            header('Location:Visao/listarFuncionario.php');

            break;
        case 'cadastrar':
            require_once '../Modelo/classeFuncionario.php';
            require_once '../Controle/DAO/classeFuncionarioDAO.php';

            $idFuncionario = $_POST["idFuncionario"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];
            $dataAdmissao = $_POST["dataAdmissao"];
            $cargo = $_POST["cargo"];
            $salario = $_POST["salario"];
            $perfil = $_POST["perfil"];

            $novoFuncionario = new classeFuncionario();
            $novoFuncionario->setIdFuncionario($idFuncionario);
            $novoFuncionario->setNome($nome);
            $novoFuncionario->setEmail($email);
            $novoFuncionario->setCpf($cpf);
            $novoFuncionario->setSenha($senha);
            $novoFuncionario->setDataAdmissao($dataAdmissao);
            $novoFuncionario->setCargo($cargo);
            $novoFuncionario->setSalario($salario);
            $novoFuncionario->setPerfil($perfil);

            $funcionarioDAO = new classeFuncionarioDAO();
            $cadastrarFuncionario = $funcionarioDAO->cadastrarFuncionario($novoFuncionario);

            if ($cadastrarFuncionario == FALSE) {
                header('Location:../index.php?PAGINA=principal&MSG=Cadastro Não Realizado');
            } else {
                echo "<script>alert('Cadastrado com Sucesso');
                        window.location.href='../index.php?PAGINA=listarFuncionario';
                        </script>";
            }
            break;
        case 'excluir':
            require_once './Modelo/classeFuncionario.php';
            require_once './Controle/DAO/classeFuncionarioDAO.php';

            if (isset($_GET['idFuncionario'])) {
                $idFuncionario = $_GET['idFuncionario'];
            }

            $funcionarioDAO = new classeFuncionarioDAO();
            $deletar = $funcionarioDAO->excluirFuncionario($idFuncionario);
            if ($deletar) {
                echo "<script>alert('Excluído com Sucesso');
                        window.location.href='index.php?PAGINA=listarFuncionario';
                        </script>";
            }
            break;
        case 'buscarPorId':
            require_once './Modelo/classeFuncionario.php';
            require_once './Controle/DAO/classeFuncionarioDAO.php';

            if (isset($_GET['idFuncionario'])) {
                $idFuncionario = $_GET['idFuncionario'];
            }

            $funcionarioDAO = new classeFuncionarioDAO();
            $funcionario = $funcionarioDAO->buscarFuncionarioPorId($idFuncionario);
            if ($funcionario) {
                echo "<script>window.location.href='index.php?PAGINA=cadastrarFuncionario'</script>";
            }
            break;
        case 'alterar':
//            require_once '/Modelo/classeFuncionario.php';
//            require_once '/Controle/DAO/classeFuncionarioDAO.php';

            $idFuncionario = $_POST["idFuncionario"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];
            $dataAdmissao = $_POST["dataAdmissao"];
            $cargo = $_POST["cargo"];
            $salario = $_POST["salario"];
            $perfil = $_POST["perfil"];

            $novoFuncionario = new classeFuncionario();
            $novoFuncionario->setIdFuncionario($idFuncionario);
            $novoFuncionario->setNome($nome);
            $novoFuncionario->setEmail($email);
            $novoFuncionario->setCpf($cpf);
            $novoFuncionario->setSenha($senha);
            $novoFuncionario->setDataAdmissao($dataAdmissao);
            $novoFuncionario->setCargo($cargo);
            $novoFuncionario->setSalario($salario);
            $novoFuncionario->setPerfil($perfil);

            $funcionarioDAO = new classeFuncionarioDAO();
            $alterarFuncionario = $funcionarioDAO->alterarFuncionario($novoFuncionario);

            if ($alterarFuncionario == FALSE) {
                header('Location:../index.php?PAGINA=principal&MSG=Alteração Não Realizada');
            } else {
                echo "<script>alert('Atualizado com Sucesso');
                        window.location.href='../index.php?PAGINA=listarFuncionario';
                        </script>";
            }
            break;
        default:
            break;
    }
}



        