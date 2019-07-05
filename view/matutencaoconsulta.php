<?php
include_once '../dao/PacienteDao.php';
$Paciente= new PacienteDao();
$BFetch=$Paciente->listar();
// $BFetch=['Nome'];
var_dump($BFetch);
?>
<?php include("Header.php");?>
    <form action="../controllers/ControllerConsulta.php" method="POST">
        <h1>Cadastro da Consulta</h1>      
        <label>Consulta</label>
        <input type="date" name="Data" id="Data" required>
        
        <select name="Paciente_ID">
            <option  value="<?php echo $BFetch['ID']; ?>"><?php echo $BFetch['Nome']; ?></option>
        </select>
        
        <input type="text" name="NomeDent" id="NomeDent" placeholder="Nome do dentista"required>      
        
        <input type="submit">            
    </form>
<?php include("Footer.php");?>