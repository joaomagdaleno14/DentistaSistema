<?php
    include("../dao/ConsultaDao.php");
include("Header.php");
if(isset($_GET['id'])){
    $obj=$_GET['id'];
    $Consulta= new ConsultaDao();
    $BFetch=$Consulta->listarunico($obj);

    $Data=$BFetch['Data'];
    $Paciente_ID=$BFetch['Paciente_ID'];
    $NomeDent=$BFetch['NomeDent'];
    $Tratamento=$BFetch['Tratamento'];
    $Situacao=$BFetch['Situacao'];
}
?>
<form name="FormCadastro" id="FormCadastro" action="<?php echo '../controllers/ControllerEditarConsulta.php';?>" method="post">
    <h1>Editar Consulta</h1>
    <label>Data de consulta</label><input  type="text" name="Data" id="Data" value="<?php echo $Data?>" required><br>
    <label>Paciente</label><input  type="text" name="Paciente_ID" id="Paciente_ID" value="<?php echo $Paciente_ID?>" required><br>
    <label>Dentista</label><input type="text" name="NomeDent" id="NomeDent" placeholder="Nome do denstista" value="<?php echo $NomeDent?>" required><br>
    <label>Tratamento</label><input  type="text" id="Tratamento" name="Tratamento" placeholder="Tratamento" value="<?php echo $Tratamento?>" required><br>
    <label>Situação</label><select name="Situacao">
        <option  value="Concluida">Concluida</option>
    </select>
    <input  type="submit">
    </div>
    </div>
</form>
<?php include("Footer.php");?>