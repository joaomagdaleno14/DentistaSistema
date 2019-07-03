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
    
    public function listar() {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "SELECT * FROM paciente";
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

    public function listarunico($obj) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "SELECT nome FROM paciente WHERE id=$obj";
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

    public function update(Paciente $paciente) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "UPDATE paciente SET
            Nome = :Nome,  DtNasc = :DtNasc, Celular = :Celular, Email = :Email, Senha = :Senha WHERE ID = :id";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(":id",$paciente->getid());
            $preparedStatment->bindValue(":Nome",$paciente->getNome());
            $preparedStatment->bindValue(":DtNasc",$paciente->getDtNasc());
            $preparedStatment->bindValue(":Celular",$paciente->getCelular());
            $preparedStatment->bindValue(":Email",$paciente->getEmail());

            $preparedStatment->execute();
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

    public function verificarConsultaUsuario($obj) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "SELECT * FROM consulta WHERE Paciente_ID=$obj";
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

    public function delete($id) {
        try {
            $connection = new PDO('mysql:host=127.0.0.1;dbname=sistemadentista;charset=utf8', 'root', '');
            $connection->beginTransaction();
            $sql = "DELETE FROM Paciente WHERE ID = :id";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(":id",$id);
            $resultado=$preparedStatment->execute();
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

}
