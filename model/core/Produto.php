<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

/**
 * Description of Produto
 *
 * @author walli
 */
class Produto {
    
    private $codProduto;
    private $nome;
    private $descricao;
    private $imagens;
    private $historico;
    
    public function __construct() {
        
    }
    
    function getCodProduto() : int {
        return $this->codProduto;
    }

    function getNome() : string {
        return $this->nome;
    }

    function getDescricao() : string {
        return $this->descricao;
    }

    function getImagens() : \Model\Collections\Collection {
        return $this->imagens;
    }

    function getHistorico() : \Model\Collections\Collection {
        return $this->historico;
    }

    function setCodProduto(int $codProduto) {
        $this->codProduto = $codProduto;
    }

    function setNome(string $nome) {
        if ($nome != null && !empty($nome)) {
            $this->nome = $nome;
        } else {
            throw new Exception("Nome de produto não pode ser vazio!");
        }
    }

    function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    function setImagens(\Model\Collections\Collection $imagens) {
        $this->imagens = $imagens;
    }

    function setHistorico(\Model\Collections\Collection $historico) {
        $this->historico = $historico;
    }
    
}
