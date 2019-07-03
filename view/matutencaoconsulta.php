<?php include("../../view/Header.php");
if (isset($_GET["id"]))
$id=$_GET["id"];
$Paciente= new PacienteDao();
$BFetch=$Paciente->listar();

?>
        <form action="../controllers/ControllerConsulta.php" method="POST">
            <h1>Cadastro da Consulta<h1>      
            <input type="date" name="Data" id="Data" required>
            
            <select>
                <option <?php echo $?>></option>
            </select>
            
            <input type="text" name="NomeDent" id="NomeDent" placeholder="Nome do dentista"required>      
            
            <input type="submit" >            
        </form>
<?php include("../../view/Footer.php");?>