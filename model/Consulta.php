<?php

include_once 'Paciente.php';

class Consulta {

    private $id;
    private $NomeDent;
    private $Data;
    private $Paciente_ID;
    private $Situacao;
    private $paciente;
    private $Tratamento;

    function __construct() {
        $this->paciente = new Paciente();
    }

    public function getId() {
        return $this->id;
    }
    public function getNomeDent() {
        return $this->NomeDent;
    }
    public function getData() {
        return $this->Data;
    }
    public function getPaciente_ID(){
        return $this->Paciente_ID;
    }
    public function getTratamento() {
        return $this->Tratamento;
    }
    public function getSituacao() {
        return $this->Situacao;
    }
    public function getPaciente() {
        return $this->paciente;
    }


    public function setId($id) {
        $this->id = $id;
    }
    public function setNomeDent($NomeDent) {
        $this->NomeDent = $NomeDent;
    }
    public function setData($Data) {
        $this->Data = $Data;
    }
    public function setPaciente_ID($Paciente_ID) {
        $this->Paciente_ID = $Paciente_ID;
    }
    public function setTratamento($Tratamento) {
        $this->Tratamento = $Tratamento;
    }
    public function setSituacao($Situacao) {
        $this->Situacao = $Situacao;
    }
    public function setPaciente($paciente) {
        $this->paciente = $paciente;
    }
}
