<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of AberturaCaixa
 *
 * @author walli
 */
class AberturaCaixa {
    
    private $codAbertura;
    private $responsavel;
    private $data;
    
    public function __construct() {
        
    }
    
    function getCodAbertura() : int {
        return $this->codAbertura;
    }

    function getResponsavel() : \Model\Core\UsuarioPessoa{
        return $this->responsavel;
    }

    function getData() : \DateTime {
        return $this->data;
    }

    function setCodAbertura(int $codAbertura) {
        $this->codAbertura = $codAbertura;
    }

    function setResponsavel(\Model\Core\UsuarioPessoa $responsavel) {
        if ($responsavel != null) {
            $this->responsavel = $responsavel;
        } else {
            throw new Exception("Deve ser informado um responsável para abrir o caixa!");
        }
    }

    function setData(\DateTime $data) {
        $this->data = $data;
    }
    
}
