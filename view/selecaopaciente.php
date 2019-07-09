<?php 
    include("../dao/PacienteDao.php");
    include("Header.php")
?>
<table class="Tabela">
    <h1>Seleção dos Pacientes</h1>
        <tr>
            <td>Nome</td>
            <td>Nascimento</td>
            <td>Endereço</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Ações</td>
        </tr>

        <!---- Estrutura de Loop ------>

        <?php $Paciente= new PacienteDao();
            $BFetch=$Paciente->listar();
            foreach($BFetch as $row){
        ?>
        <tr>
            <td><?php echo $BFetch['Nome'];?></td>
            <td><?php echo $BFetch['DtNasc'];?></td>
            <td><?php echo $BFetch['Endereco'];?></td>
            <td><?php echo $BFetch['Email'];?></td>
            <td><?php echo $BFetch['Celular'];?></td>

            <td>
                <a href="<?php echo "editarpaciente.php?id=".$BFetch['ID'].";"?>"><img src="../img/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "../Controllers/ControllerDelete.php?id={$BFetch['ID']}"; ?>"><img src="../img/delete.png" alt="Deletar"></a>
            </td>


        </tr>
        <?php  
        }?>
    </table>
<?php 
    include("Footer.php")
?>