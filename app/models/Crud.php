<?php

namespace app\models;

class Crud extends Connection
{
    public function create_func(){

        if ($_POST) {        
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
            $conn = $this->connect();
            $sql = "INSERT INTO tb_person VALUES (default, :nome, :email)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            return $stmt;
        }
    }

    public function create_prod(){

        if ($_POST) {        
            $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
            $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $qt_prod = filter_input(INPUT_POST, 'qt_prod', FILTER_SANITIZE_NUMBER_INT);
    
            $conn = $this->connect();
            $sql = "INSERT INTO tb_produto VALUES (default, :produto, :valor, :qt_prod)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':produto', $produto);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':qt_prod', $qt_prod);
            $stmt->execute();

            return $stmt;
        }
    }

    public function readPerson(){
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person order by nome";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function readEstoque(){
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_produto order by id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function update(){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();
        $sql = "UPDATE tb_person SET nome = :nome, email = :email WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt;
    }


    public function updateproduto(){
        $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $conn = $this->connect();
        $sql = "UPDATE tb_produto SET produto = :produto, valor = :valor, quantidade = :quantidade WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':valor', $valor);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt;
    }
    public function delete(){

        $id = base64_decode (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $conn = $this->connect();

        $sql = "DELETE FROM tb_person WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;

    }

    public function deleteProduto(){

        $id = base64_decode (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $conn = $this->connect();

        $sql = "DELETE FROM tb_produto WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;

    }

    public function editForm()
    {
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person WHERE id LIKE :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


}