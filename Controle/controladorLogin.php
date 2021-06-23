<?php
require_once './DAO/classeLoginDAO.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

$loginDAO = new classeLoginDAO();
$usuario = $loginDAO->fazerLogin($email, $senha);

if($usuario == NULL) {
    header('Location:../index.php?PAGINA=principal&MSG=Email/Senha Incorretos');       
}else{    
    header('Location:../index.php?PAGINA=principal&MSG=Login com Sucesso'); 
}

