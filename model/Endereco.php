<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Model;
/**
 * Description of Endereco
 *
 * @author walli
 */
class Endereco {
    
    private $codEndereco;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $cep;
    private $estado;
    private $localizacao;
    
    public function __construct() {
        
    }
    
    function getCodEndereco() : int {
        return $this->codEndereco;
    }

    function getLogradouro() : string {
        return $this->logradouro;
    }

    function getNumero() : int {
        return $this->numero;
    }

    function getBairro() : string {
        return $this->bairro;
    }

    function getCidade() : string {
        return $this->cidade;
    }

    function getCep() : string {
        return $this->cep;
    }

    function getEstado() : string {
        return $this->estado;
    }

    function getLocalizacao() : string {
        return $this->localizacao;
    }

    function setCodEndereco(int $codEndereco) {
        $this->codEndereco = $codEndereco;
    }

    function setLogradouro(string $logradouro) {
        if ($logradouro != null && !empty($logradouro)) {
            $this->logradouro = $logradouro;
        } else {
            throw new Exception("Logradouro não pode ser vazio!");
        }
    }

    function setNumero(int $numero) {
        if ($numero > 0) {
            $this->numero = $numero;
        } else {
            throw new Exception("Digite um número válido!");
        }
    }

    function setBairro(string $bairro) {
        if ($bairro != null && !empty($bairro)) {
            $this->bairro = $bairro;
        } else {
            throw new Exception("Bairro não pode ser vazio!");
        }
    }

    function setCidade(string $cidade) {
        if ($cidade != null && !empty($cidade)) {
            $this->cidade = $cidade;
        } else {
            throw new Exception("Cidade não pode ser vazia!");
        }
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setEstado($estado) {
        if ($estado != null && !empty($estado)) {
            $this->estado = $estado;
        } else {
            throw new Exception("Estado não pode ser vazio!");
        }
    }

    function setLocalizacao(\Model\Localizacao $localizacao) {
        if ($localizacao != null) {
            $this->localizacao = $localizacao;
        } else {
            throw new Exception("Localização não pode ser vazio!");
        }
    }


    
}
