<?php
include_once '../model/Consulta.php';
include_once '../common/respostas.php';

class ConsultaDao extends Consulta {
    
    
    public function inserir( Consulta $consulta) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8','root','');
            $connection->beginTransaction();
            $sql = "INSERT INTO consulta (Data, Paciente_ID, NomeDent) VALUES (:Data, :Paciente_ID, :NomeDent)";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(":Data",$consulta->getData());
            $preparedStatment->bindValue(":Paciente_ID",$consulta->getPaciente_ID());
            $preparedStatment->bindValue(":NomeDent",$consulta->getNomeDent());
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

    public function listar() {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "SELECT * FROM consulta";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->execute();

            $resultado=$preparedStatment->fetchAll(PDO::FETCH_ASSOC);
            $connection->commit();

            return $resultado;
            var_dump($resultado);
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

    public function listarunico($obj) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "SELECT * FROM consulta WHERE id = $obj";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->execute();

            $resultado=$preparedStatment->fetch(PDO::FETCH_ASSOC);
            $connection->commit();

            return $resultado;
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

    public function update(Consulta $Consulta) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "UPDATE consulta SET
            Data = :Data,  Paciente_ID = :Paciente_ID, Tratamento = :Tratamento, Situacao = :Situacao WHERE ID = :id";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(":id",$Consulta->getId());
            $preparedStatment->bindValue(":Data",$Consulta->getData());
            $preparedStatment->bindValue(":Paciente_ID",$Consulta->getPaciente_ID());
            $preparedStatment->bindValue(":Tratamento",$Consulta->getTratamento());
            $preparedStatment->bindValue(":Sitacao",$Consulta->getSituacao());
            $preparedStatment->execute();
            $connection->commit();
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
