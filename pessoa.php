<?php

class Pessoa {

    public $nome;
    public $cpf;
    public $dataNascimento;
    public $endereco;

    public function __construct($nome, $cpf, $data, $end) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $data;
        $this->endereco = $end;
    }

    public function imprimir() {
        echo "Nome:", $this->nome,"<br>";
        echo "Cpf:",  $this->cpf,"<br>";
        echo "Data de Nascimento:", $this->dataNascimento,"<br>";
        echo "Endereco:",  $this->endereco;      
    }

    public function __destruct() {
        //echo "morreu o objeto";
    }
                                //10/10/2000
    public function calcularIdade($data){
        $arraydata = explode("/", $data);
        $idade = date("Y") - $arraydata[2];
        return $idade;
    }
}

?>
