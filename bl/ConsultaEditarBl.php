<?php

include_once '../model/Consulta.php';
include_once '../common/respostas.php';
include_once '../dao/ConsultaDao.php';
class ConsultaEditarBl {
    
    private $ConsultaDao;
    
    function __construct() {
        $this->ConsultaDao = new ConsultaDao();
    }

    public function alterarConsulta(Consulta $Consulta){        
        if ($Consulta->getData() == null || 
                $Consulta->getData() == "") {
            throw new InvalidArgumentException(""
                    . "O Data do Consulta esta em branco");
        }

        if ($Consulta->getPaciente_ID() == null || 
                $Consulta->getPaciente_ID() == "") {
            throw new InvalidArgumentException(""
                    . "A data de nascimento do Consulta esta em branco");
        }

        if ($Consulta->getNomeDent() == null || 
                $Consulta->getNomeDent() == "") {
            throw new InvalidArgumentException(""
                    . "O endereço do Consulta esta em branco");
        }

        if ($Consulta->getTratamento() == null || 
                $Consulta->getTratamento() == "") {
            throw new InvalidArgumentException(""
                    . "O e-mail do Consulta esta em branco");
        }

        if ($Consulta->getSituacao() == null || 
                $Consulta->getSituacao() == "") {
            throw new InvalidArgumentException(""
                    . "O número de SigetSituacao do Consulta esta em branco");
        }

        return $this->ConsultaDao->update($Consulta);
    }
    
}
