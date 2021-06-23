<?php

require_once 'classeUsuario.php';

class classeFuncionario extends classeUsuario {

    private $idFuncionario;
    private $dataAdmissao;
    private $cargo;
    private $salario;
    private $perfil;

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getSalario() {
        return $this->salario;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setDataAdmissao($dataAdmissao) {
        $this->dataAdmissao = $dataAdmissao;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}
