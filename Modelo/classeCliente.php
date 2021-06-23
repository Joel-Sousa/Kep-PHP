<?php

require_once 'classeUsuario.php';

class classeCliente extends classeUsuario {

    private $idCliente;
    private $dataCadastro;
    private $perfil;
    function getIdCliente() {
        return $this->idCliente;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }


    
}
