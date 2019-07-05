<?php include("Header.php");?>
    <form action="../controllers/ControllerCadastro.php" method="POST">
            <h1>Cadastro do Paciente</h1>      
            <label>Nome:<input type="text" name="Nome" id="Nome" placeholder="Nome" required></label><br>

            <label>Data de Nascimento:<input type="date" name="DtNasc" id="DtNasc" required></label><br>

            <label>Endereço:<input type="text" name="Endereco" id="Endereco" placeholder="Endereço" required></label><br>

            <label>Email:<input type="email" name="Email" id="Email" placeholder="Email" required></label><br>      
            
            <label>Celular:<input type="text" name="Celular" id="Celular" placeholder="Celular" required></label><br>
            <input type="submit">            
    </form>
<?php include("Footer.php");?>




