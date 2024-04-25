<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home()
    {
        require_once __DIR__ . '/../views/home.php';
    }

    public function cad_func()
    {
        $cad_func = $this->create_func();
        require_once __DIR__ . '/../views/cad_func.php';
    }
    
    public function cad_prod()
    {
        $cad_prod = $this->create_prod();
        require_once __DIR__ . '/../views/cad_prod.php';
    }
    public function consulta()
    {   
        $consulta = $this->readPerson();
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function estoque()
    {   
        $estoque = $this->readEstoque();
        require_once __DIR__ . '/../views/estoque.php';
    }


    public function editar()
    {
        $editarForm = $this->editForm();
        require_once __DIR__ . '/../views/editar.php';
    }

    public function alterar()
    {
        $alterar = $this->update();
        header('Location:?router=Site/consulta/');
    }

    public function editarproduto()
    {
        $alterarprod = $this->updateproduto();
        header('Location:?router=Site/editarproduto/');
    }

    public function confirmaDelete()
    {   
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../views/confirmaDelete.php';
    }

    public function confirmaDeleteProduto()
    {   
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../views/confirmaDeleteProduto.php';
    }
    public function deletar()
    {
        $deletar = $this->delete();
        header('Location:?router=Site/consulta/');
    }

    public function deletarProduto()
    {
        $deletarprod = $this->deleteProduto();
        header('Location:?router=Site/estoque/');
    }
}