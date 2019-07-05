<?php
    include("../dao/PacienteDao.php");
include("Header.php");
if(isset($_GET['id'])){
    $obj=$_GET['id'];
    $Paciente= new PacienteDao();
    $BFetch=$Paciente->listarunico($obj);

    $Nome=$BFetch['Nome'];
    $DtNasc=$BFetch['DtNasc'];
    $Endereco=$BFetch['Endereco'];
    $Email=$BFetch['Email'];
    $Celular=$BFetch['Celular'];
}
?>
<form name="FormCadastro" id="FormCadastro" action="<?php echo '../controllers/ControllerEditar.php';?>" method="post">
    <h1>Cadastrar Paciente</h1>
    <input  type="text" name="Nome" id="Nome" placeholder="Nome" value="<?php echo $Nome?>" required><br>
    <input  type="date" name="DtNasc" id="DtNasc" value="<?php echo $DtNasc?>" required><br>
    <input type="text" name="Endereco" id="Endereco" placeholder="Endereço" value="<?php echo $Endereco?>" required>
    <input  type="email" id="Email" name="Email" placeholder="Email" value="<?php echo $Email?>" required><br>
    <input  type="text" name="Celular" id="Celular" placeholder="Celular" value="<?php echo $Celular?>" required><br>
    <input  type="submit">
    </div>
    </div>
</form>
<?php include("Footer.php");?>




