<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './Usuario.php';
require '../collections/Collection.php';

namespace Model\Core;

/**
 * Description of UsuarioEstabelecimento
 *
 * @author walli
 */
class UsuarioEstabelecimento extends \Model\Usuario{
    
    private $cnpj;
    private $clientes;
    private $produtos;
    private $caixa;
    
    public function __construct() {
        parent::__construct();
    }
    
    function getCnpj() : string {
        return $this->cnpj;
    }

    function getClientes() : \Model\Collections\Collection {
        return $this->clientes;
    }

    function setCnpj(string $cnpj) {
        $this->cnpj = $cnpj;
    }

    function setClientes(\Model\Collections\Collection $clientes) {
        $this->clientes = $clientes;
    }

    function getProdutos() : \Model\Collections\Collection {
        return $this->produtos;
    }

    function setProdutos(\Model\Collections\Collection $produtos) {
        $this->produtos = $produtos;
    }

    function getCaixa() : \Model\Core\Caixa {
        return $this->caixa;
    }

    function setCaixa(\Model\Core\Caixa $caixa) {
        if ($caixa != null) {
            $this->caixa = $caixa;
        } else {
            throw new Exception("Estabelecimento deve conter um caixa!");
        }
    }


    
}
