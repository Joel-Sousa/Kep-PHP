<?php

if (isset($_GET['ACAO'])) {
    $acao = $_GET['ACAO'];

    switch ($acao) {
        case 'listar':
            require_once './Modelo/classeCliente.php';
            require_once './Controle/DAO/classeClienteDAO.php';

            $clienteDAO = new classeClienteDAO;
            $clientes = array();
            $clientes = $clienteDAO->listarCliente();

            echo "<div class='linha'>";
            echo "<div class='coluna_nome'>Nome</div>";

            echo "<div class='coluna_email'>Email</div>";

            echo "<div class='coluna_excluir'>Excluir</div>";
            echo "</div>";
            if (isset($clientes)) {
                foreach ($clientes as $cliente) {
                    echo "<div class='linha'>";
                    echo "<div class='coluna_nome'>" . $cliente->nome . "</div>";
                    echo "<div class='coluna_email'>" . $cliente->email . "</div>";
                    echo "<div class='coluna_excluir'>"
                    . "<a href='index.php?PAGINA=excluirCliente&&idCliente="
                    . $cliente->idCliente . "' onclick='return checkDelete()'>"
                    . "X</a></div>";
                    echo "</div>";
                }
            }
//            session_start();
//            $_SESSION['clientes'] = serialize($clientes);
//            header('Location:Visao/listarCliente.php');

            break;
        case 'cadastrar':
            require_once '../Modelo/classeCliente.php';
            require_once '../Controle/DAO/classeClienteDAO.php';

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];

            $dataCadastro = date("y/m/d");

            $novoCliente = new classeCliente();
            $novoCliente->setNome($nome);
            $novoCliente->setEmail($email);
            $novoCliente->setCpf($cpf);
            $novoCliente->setSenha($senha);
            $novoCliente->setDataCadastro($dataCadastro);
            $novoCliente->setPerfil(5);

            $clienteDAO = new classeClienteDAO();
            $cadastrarCliente = $clienteDAO->cadastrarCliente($novoCliente);

            if ($cadastrarCliente == FALSE) {
                header('Location:../index.php?PAGINA=principal&MSG=Cadastro Não Realizado');
            } else {
                echo "<script>alert('Cadastrado com Sucesso');
                        window.location.href='../index.php?PAGINA=listarCliente';
                        </script>";
            }
            break;
        case 'excluir':
            require_once './Modelo/classeCliente.php';
            require_once './Controle/DAO/classeClienteDAO.php';

            if (isset($_GET['idCliente'])) {
                $idCliente = $_GET['idCliente'];
            }

            $clienteDAO = new classeClienteDAO();
            $deletar = $clienteDAO->excluirCliente($idCliente);
            if ($deletar) {
                echo "<script>alert('Excluído com Sucesso');
                        window.location.href='index.php?PAGINA=listarCliente';
                        </script>";
            }


//            session_start();
//            $_SESSION['clientes'] = serialize($clientes);
//            header('Location:Visao/listarCliente.php');

            break;

        default:
            break;
    }
}



        