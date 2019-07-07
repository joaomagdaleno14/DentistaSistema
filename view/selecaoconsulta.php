<?php 
    include("../dao/ConsultaDao.php");
    include("../dao/PacienteDao.php");
    include("Header.php")
?>
<table class="Tabela">
    <h1>Seleção das Consultas</h1>
        <tr>
            <td>Data</td>
            <td>Paciente</td>
            <td>Dentista</td>
            <td>Tratamento</td>
            <td>Situação</td>
            <td>Ações</td>
        </tr>

        <!---- Estrutura de Loop ------>

        <?php $Consulta= new ConsultaDao();
            $BFetch=$Consulta->listar();
            $Paciente= new PacienteDao();
            $Fetch=$Paciente->listar();
        ?>
        <tr>
            <td><?php echo $BFetch['Data'];?></td>
            <td><?php echo $Fetch['Nome'];?></td>
            <td><?php echo $BFetch['NomeDent'];?></td>
            <td><?php echo $BFetch['Tratamento'];?></td>
            <td><?php echo $BFetch['Situacao'];?></td>

            <td>
                <a href="<?php echo "editarconsulta.php?id=".$BFetch['ID'].";"?>"><img src="../img/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "../Controllers/ControllerDeleteConsulta.php?id={$BFetch['ID']}"; ?>"><img src="../img/delete.png" alt="Deletar"></a>
            </td>


        </tr>
    </table>
<?php 
    include("Footer.php")
?>