<?php 
    include_once '../model/Paciente.php';
    include_once '../bl/PacientesEditarBl.php';
    include_once '../common/respostas.php';
    if (isset($_POST)){
        $Paciente = new Paciente();
        $Paciente->setNome($_POST['Nome']);                   
        $Paciente->setDtNasc($_POST['DtNasc']);        
        $Paciente->setEndereco($_POST['Endereco']);        
        $Paciente->setEmail($_POST['Email']);             
        $Paciente->setCelular($_POST['Celular']);        
        $pBl = new PacienteEditarBl();
        $resultado = $pBl->alterarPaciente($Paciente);
        
        if ($resultado == SUCESSO){
            echo "ok editado com sucesso";
        } else {
            echo "nao foi editado";    
        }
        
        
    }?>