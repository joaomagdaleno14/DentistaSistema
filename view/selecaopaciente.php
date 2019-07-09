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
            $BFetch=$Paciente->listarFetchAll();
            foreach($BFetch as $row){
        ?>
        <tr>
            <td><?php echo $row['Nome'];?></td>
            <td><?php echo $row['DtNasc'];?></td>
            <td><?php echo $row['Endereco'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Celular'];?></td>

            <td>
                <a href="<?php echo "editarpaciente.php?id=".$row['ID'].";"?>"><img src="../img/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "../Controllers/ControllerDelete.php?id={$row['ID']}"; ?>"><img src="../img/delete.png" alt="Deletar"></a>
            </td>


        </tr>
        <?php  
        }?>
    </table>
<?php 
    include("Footer.php")
?>