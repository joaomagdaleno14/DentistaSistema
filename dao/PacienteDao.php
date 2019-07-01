<?php
include_once '../model/Paciente.php';
include_once '../common/respostas.php';

class PacienteDao extends Paciente{


    public function inserir( Paciente $paciente) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "INSERT INTO paciente (Nome, DtNasc, Endereco, Email, Celular) VALUES (:Nome, :DtNasc, :Endereco, :Email, :Celular)";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(":Nome",$paciente->getNome());
            $preparedStatment->bindValue(":DtNasc",$paciente->getDtNasc());
            $preparedStatment->bindValue(":Endereco",$paciente->getEndereco());
            $preparedStatment->bindValue(":Email",$paciente->getEmail());
            $preparedStatment->bindValue(":Celular",$paciente->getCelular());
            $preparedStatment->execute();
            $connection->commit();
           return SUCESSO;
        } catch (PDOException $exc) {
            if ((isset($connection)) && ($connection->inTransaction())) {
                $connection->rollBack();
            }
            echo $exc->getMessage();
            return FALHA;
        } finally {
            if (isset($connection)) {
                unset($connection);
            }
        }
    }

}
