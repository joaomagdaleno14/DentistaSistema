<?php

include_once '../model/Paciente.php';
include_once '../common/respostas.php';
include_once '../dao/PacienteDao.php';
class PacienteEditarBl {
    
    private $pacienteDao;
    
    function __construct() {
        $this->pacienteDao = new PacienteDao();
    }

    public function alterarPaciente(Paciente $paciente){        
        if ($paciente->getNome() == null || 
                $paciente->getNome() == "") {
            throw new InvalidArgumentException(""
                    . "O nome do paciente esta em branco");
        }

        if ($paciente->getDtNasc() == null || 
                $paciente->getDtNasc() == "") {
            throw new InvalidArgumentException(""
                    . "A data de nascimento do paciente esta em branco");
        }

        if ($paciente->getEndereco() == null || 
                $paciente->getEndereco() == "") {
            throw new InvalidArgumentException(""
                    . "O endereço do paciente esta em branco");
        }

        if ($paciente->getEmail() == null || 
                $paciente->getEmail() == "") {
            throw new InvalidArgumentException(""
                    . "O e-mail do paciente esta em branco");
        }

        if ($paciente->getCelular() == null || 
                $paciente->getCelular() == "") {
            throw new InvalidArgumentException(""
                    . "O número de celular do paciente esta em branco");
        }

        return $this->pacienteDao->update($paciente);
    }
    
}
