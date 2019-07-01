<?php 
    include("../dao/PacienteDao.php");
?>

<div class="Content">
    <table class="Tabela">
    <h1>Seleção dos Pacientes<h1>
        <tr>
            <td>Nome</td>
            <td>Data de Nascimento</td>
            <td>Endereço</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Ações</td>
        </tr>

        <!---- Estrutura de Loop ------>

        <?php $Paciente= new PacienteDao();
            $BFetch=$Paciente->listar();
        ?>
        <tr>
            <td><?php echo $BFetch['Nome'];?></td>
            <td><?php echo $BFetch['DtNasc'];?></td>
            <td><?php echo $BFetch['Endereco'];?></td>
            <td><?php echo $BFetch['Email'];?></td>
            <td><?php echo $BFetch['Celular'];?></td>

            <td>
                <a href="<?php echo "Visualizar.php?id=".$BFetch['ID'].";" ?>"><img src="Images/search.png" alt="Visualizar"></a>
                <a href="<?php echo "Cadastro.php?id=".$BFetch['ID'].";"?>"><img src="Images/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "Controllers/ControllerDelete.php?id={$BFetch['ID']}"; ?>"><img src="Images/delete.png" alt="Deletar"></a>
            </td>


        </tr>

        <?php  
        //} 
                    ?>
    </table>
</div>