<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of FechamentoCaixa
 *
 * @author walli
 */
class FechamentoCaixa {
    
    private $codFechamento;
    private $responsavel;
    private $data;
    
    public function __construct() {
        
    }
    
    function getCodFechamento() : int {
        return $this->codFechamento;
    }

    function getResponsavel() : \Model\Core\UsuarioPessoa{
        return $this->responsavel;
    }

    function getData() : \DateTime {
        return $this->data;
    }

    function setCodFechamento(int $codFechamento) {
        $this->codFechamento = $codFechamento;
    }

    function setResponsavel(\Model\Core\UsuarioPessoa $responsavel) {
        if ($responsavel != null) {
            $this->responsavel = $responsavel;
        } else {
            throw new Exception("Deve ser informado um responsável para fechar o caixa!");
        }
    }

    function setData(\DateTime $data) {
        $this->data = $data;
    }
    
}
