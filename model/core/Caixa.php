<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of Caixa
 *
 * @author walli
 */
class Caixa {
    
    private $codCaixa;
    private $entradas;
    private $saidas;
    private $responsaveis;
    private $aberturas;
    private $fechamentos;
    private $status;
    
    public function __construct() {
        
    }
    
    function getCodCaixa() : int {
        return $this->codCaixa;
    }

    function getEntradas() : \Model\Collections\Collection {
        return $this->entradas;
    }

    function getSaidas() : \Model\Collections\Collection {
        return $this->saidas;
    }

    function getResponsaveis() : \Model\Collections\Collection {
        return $this->responsaveis;
    }

    function getAberturas() : \Model\Collections\Collection {
        return $this->aberturas;
    }

    function getFechamentos() : \Model\Collections\Collection {
        return $this->fechamentos;
    }

    function getStatus() : bool{
        return $this->status;
    }

    function setCodCaixa(int $codCaixa) {
        $this->codCaixa = $codCaixa;
    }

    function setEntradas(\Model\Collections\Collection $entradas) {
        $this->entradas = $entradas;
    }

    function setSaidas(\Model\Collections\Collection $saidas) {
        $this->saidas = $saidas;
    }

    function setResponsaveis(\Model\Collections\Collection $responsaveis) {
        $this->responsaveis = $responsaveis;
    }

    function setAberturas(\Model\Collections\Collection $aberturas) {
        $this->aberturas = $aberturas;
    }

    function setFechamentos(\Model\Collections\Collection $fechamentos) {
        $this->fechamentos = $fechamentos;
    }

    function setStatus(bool $status) {
        $this->status = $status;
    }    
    
}
