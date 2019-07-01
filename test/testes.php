<?php

include_once '../dao/PacienteDao.php';
include_once '../model/Pacientes.php';
include_once '../common/respostas.php';
include_once '../bl/PacientesBl.php';

$paciente = new Pacientes();
$paciente->setNome(null);

$pDao = new PacientesBl();

echo  $pDao->registrarPaciente($paciente);
        


