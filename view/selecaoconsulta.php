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
            $BFetch=$Consulta->listarFetchAll();

            foreach($BFetch as $row){
        ?>
        <tr>
            <td><?php echo $row['Data'];?></td>
            <td><?php echo $row['Nome'];?></td>
            <td><?php echo $row['NomeDent'];?></td>
            <td><?php echo $row['Tratamento'];?></td>
            <td><?php echo $row['Situacao'];?></td>

            <td>
                <a href="<?php echo "editarconsulta.php?id=".$row['ID'].";"?>"><img src="../img/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "../Controllers/ControllerDeleteConsulta.php?id={$row['ID']}"; ?>"><img src="../img/delete.png" alt="Deletar"></a>
            </td>


        </tr>
        <?php  
        }?>
    </table>
<?php 
    include("Footer.php")
?>