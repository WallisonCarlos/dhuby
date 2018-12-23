<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Usuario.php';

namespace Model\Core;

/**
 * Description of UsuarioPessoa
 *
 * @author walli
 */
class UsuarioPessoa extends \Model\Usuario{
    //put your code here
    
    private $cpf;
    private $rg;
    private $nascimento;
    
    public function __construct() {
        parent::__construct();
    }
    
    function getCpf() : string {
        return $this->cpf;
    }

    function getRg() : string {
        return $this->rg;
    }

    function getNascimento() : string {
        return $this->nascimento;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }


}
