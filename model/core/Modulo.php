<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model\Core;

class Modulo{
    
    private  $codModulo;
    private  $nome;
    private  $descrição;
    private  $versao;
    private  $valor;
    
    function getCodModulo():int {
        return $this->codModulo;
    }

    function getNome() :string  {
        return $this->nome;
    }

    function getDescrição() : string {
        return $this->descrição;
    }

    function getVersao() : string {
        return $this->versao;
    }

    function getValor(): float {
        return $this->valor;
    }

    function setCodModulo(int $codModulo) {
        $this->codModulo = $codModulo;
        
    }

    function setNome(string $nome) {
        $this->nome = $nome;
        if ($nome != null && !empty($nome)) {
            $this->nome = $nome;
        } else {
            throw new Exception("Digite o seu nome!");
        }
    }

    function setDescrição(string $descrição) {
        $this->descrição = $descrição;
        

    }

    function setVersa(string $versao) {
        $this->versao = $versao;
    }

    function setValor(float $valor) {
        if($valor == NULL){
            throw new Exception("Digite o valor!");
        } else if($valor >= 0){
            $this->valor = $valor;
        } else {
            throw new Exception("Valor inválido!");
            
        }
    }


    
    
    
}