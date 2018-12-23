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
    //put your code here
    private $cnpj;
    private $clientes;
    
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


}
