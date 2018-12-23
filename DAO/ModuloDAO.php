<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'Conexao.php';
require '../model/core/Modulo.php';

namespace DAO;

class ModuloDAO{
    
    public function adicionarModulo(Model\Core\Modulo $modulo) {
        
        try {
            
            $sql = "INSERT INTO modulo(nome, descricao, versao, valor) VALUES(:nome, :descricao, :versao, :valor)";
            $prepareSql = DAO\Conexao::getInstance()->prepare($sql);
            
            $prepareSql->bindValue(":nome", $modulo->getNome());
            $prepareSql->bindValue(":valor", $modulo->getValor());
            $prepareSql->bindValue(":descricao", $modulo->getDescricao());
            $prepareSql->bindValue(":versao", $modulo->getVersao());
            $prepareSql->bindValue(":valor", $modulo->getValor());
            
            return $prepareSql->execute();
                    
        } catch (PDOException $e) {
            //GeraLog
        }
        
    }
    public function atualizarModulo(Model\Core\Modulo $modulo) {
        
        try {
            
                $sql = "UPDATE modulo set
                nome = :nome,
                descricao = :descricao,
                versao = :versao,
                valor = :valor,
                WHERE codModulo = :codModulo";
                
            $prepareSql = DAO\Conexao::getInstance()->prepare($sql);
            
            $prepareSql->bindValue(":nome", $modulo->getNome());
            $prepareSql->bindValue(":valor", $modulo->getValor());
            $prepareSql->bindValue(":descricao", $modulo->getDescricao());
            $prepareSql->bindValue(":versao", $modulo->getVersao());
            $prepareSql->bindValue(":valor", $modulo->getValor());
            
            return $prepareSql->execute();
                    
        } catch (PDOException $e) {
            //GeraLog
        }
        
    }
    public function removerModulo(Model\Core\Modulo $modulo){
        
        try {
            
            $sql = "DELETE FROM modulo WHERE codModulo = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $modulo->getcodModulo());
 
            return $prepareSql->execute();
            
        } catch (PDOException $e) {

        }
    }
    public function getModuloPorCodigo($codModulo) : \Model\Core\Modulo{
        try {
            $sql = "SELECT * FROM usuario WHERE codModulo = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $codModulo);
            $prepareSql->execute();
            
            return $this->populaUsuario($prepareSql->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {

        }
    }
    
    private function populaModulo($row) : \Model\Core\Modulo {
        $modulo = new \Model\Core\Modulo();
        $modulo->setcodModulo($row['codModulo']);
        $modulo->setNome($row['nome']);
        $modulo->setDescricao($row['descricao']);
        $modulo->setVersao($row['versao']);
        $modulo->setValor($row['valor']);
        return $modulo;
    }
    
}