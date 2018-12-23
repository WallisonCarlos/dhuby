<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of Preco
 *
 * @author walli
 */
class Preco {
   
    private $codPreco;
    private $compra;
    private $venda;
    private $data;
    
    public function __construct() {
        
    }
    
    function getCodPreco() : int {
        return $this->codPreco;
    }

    function getCompra() : float {
        return $this->compra;
    }

    function getVenda() : float {
        return $this->venda;
    }

    function getData() : \DateTime {
        return $this->data;
    }

    function setCodPreco(int $codPreco) {
        $this->codPreco = $codPreco;
    }

    function setCompra(float $compra) {
        if ($compra >= 0) {
            $this->compra = $compra;
        } else {
            throw new Exception("Valor da compra deve ser maior ou igual a zero!");
        }
    }

    function setVenda(float $venda) {
        if ($venda >= 0) {
            $this->venda = $venda;
        } else {
            throw new Exception("Valor da venda deve ser maior ou igual a zero!");
        }
    }

    function setData(\DateTime $data) {
        $this->data = $data;
    }


}
