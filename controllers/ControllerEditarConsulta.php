<?php 
    include_once '../model/Consulta.php';
    include_once '../bl/ConsultaEditarBl.php';
    include_once '../common/respostas.php';
    if (isset($_POST)){
        $Consulta = new Consulta();
        $Consulta->setData($_POST['Data']);                   
        $Consulta->setPaciente_ID($_POST['Paciente_ID']);        
        $Consulta->setNomeDent($_POST['NomeDent']);        
        $Consulta->setTratamento($_POST['Tratamento']);             
        $Consulta->setSituacao($_POST['Situacao']);        
        $pBl = new ConsultaEditarBl();
        $resultado = $pBl->alterarConsulta($Consulta);
        
        if ($resultado == SUCESSO){
            echo "ok editado com sucesso";
        } else {
            echo "nao foi editado";    
        }
        
        
    }?>