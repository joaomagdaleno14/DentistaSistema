<?php

class Paciente {

    private $id;
    private $nome;
    private $DtNasc;
    private $Endereco;
    private $Email;
    private $Celular;


    public function getId() {
        return $this->id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getDtNasc() {
        return $this->DtNasc;
    }
    public function getEndereco() {
        return $this->Endereco;
    }
    public function getEmail() {
        return $this->Email;
    }
    public function getCelular() {
        return $this->Celular;
    }



    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setDtNasc($DtNasc) {
        $this->DtNasc = $DtNasc;
    }
    public function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }
    public function setEmail($Email) {
        $this->Email = $Email;
    }
    public function setCelular($Celular) {
        $this->Celular = $Celular;
    }


}
