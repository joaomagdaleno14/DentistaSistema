<?php include("Header.php");?>
    <form action="../controllers/ControllerCadastro.php" method="POST">
            <h1>Cadastro do Paciente</h1>      
            <input type="text" name="Nome" id="Nome" placeholder="Nome" required>

            <label> Data de Nascimento <input type="date" name="DtNasc" id="DtNasc" required></label>

            <input type="text" name="Endereco" id="Endereco" placeholder="Endereço" required>

            <input type="email" name="Email" id="Email" placeholder="Email" required>            
            
            <input type="text" name="Celular" id="Celular" placeholder="Celular" required>
            <label>Data da Consulta<input type="date" name="Data" id="Data" required></label>
            <input type="text" name="NomeDent" id="NomeDent" placeholder="Nome do dentista"required>   

            <input type="submit" >            
    </form>
<?php include("Footer.php");?>




