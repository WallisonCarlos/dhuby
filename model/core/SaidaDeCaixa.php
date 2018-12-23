<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of SaidaDeCaixa
 *
 * @author walli
 */
class SaidaDeCaixa {
    private $codSaida;
    private $valor;
    private $data;
    private $responsavel;
    private $motivo;
    
    public function __construct() {
        
    }
    
    function getCodSaida() : int {
        return $this->codSaida;
    }

    function getValor() : float {
        return $this->valor;
    }

    function getData() : \DateTime {
        return $this->data;
    }

    function getResponsavel() : \Model\Core\UsuarioPessoa {
        return $this->responsavel;
    }

    function getMotivo() : string {
        return $this->motivo;
    }

    function setCodSaida(int $codSaida) {
        $this->codSaida = $codSaida;
    }

    function setValor(float $valor) {
        if ($valor > 0) {
            $this->valor = $valor;
        } else {
            throw new Exception("Valor de saída deve ser maior que zero!");
        }
    }

    function setData(\DateTime $data) {
        $this->data = $data;
    }

    function setResponsavel(\Model\Core\UsuarioPessoa $responsavel) {
        if ($usuario != null) {
            $this->responsavel = $responsavel;
        } else {
            throw new Exception("Deve ser informado o responsável!");
        }
    }

    function setMotivo(string $motivo) {
        if ($motivo != null && !empty($motivo)) {
            $this->motivo = $motivo;
        } else {
            throw new Exception("Deve ser apresentado o motivo da saída!");
        }
    }
}
