<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Conexao.php';
require '../model/core/Endereco.php';

namespace DAO;
class EnderecoDAO{
    
public function adicionarEndereco(Model\Core\Endereco $endereco) {
        
        try {
            
            $sql = "INSERT INTO endereco(
                    logradouro, numero, bairro, cep, cidade, estado) 
                    VALUES(:logradouro, :numero, :bairro, :cep, :cidade, :estado)";
            $prepareSql = DAO\Conexao::getInstance()->prepare($sql);
            
            $prepareSql->bindValue(":logradouro", $endereco->getLogradouro());
            $prepareSql->bindValue(":numero", $endereco->getNumero());
            $prepareSql->bindValue(":bairro", $endereco->getBairro());
            $prepareSql->bindValue(":cep", $endereco->getCep());
            $prepareSql->bindValue(":cidade", $endereco->getCidade());
            $prepareSql->bindValue(":estado", $endereco->getEstado());
            
            return $prepareSql->execute();
                    
        } catch (PDOException $e) {
            //GeraLog
        }
        
    }
    public function atualizarEndereco(Model\Core\Endereco $endereco) {
        
        try {
            
                $sql = "UPDATE endereco set
                logradouro = :logradouro,
                numero = :numero,
                bairro = :bairro,
                cep = :cep,
                cidade = :cidade,
                estado = :estado";
                
            $prepareSql = DAO\Conexao::getInstance()->prepare($sql);
            
            $prepareSql->bindValue(":logradouro", $endereco->getLogradouro());
            $prepareSql->bindValue(":numero", $endereco->getNumero());
            $prepareSql->bindValue(":bairro", $endereco->getBairro());
            $prepareSql->bindValue(":cep", $endereco->getCep());
            $prepareSql->bindValue(":cidade", $endereco->getCidade());
            $prepareSql->bindValue(":estado", $endereco->getEstado());
            
            return $prepareSql->execute();
                    
        } catch (PDOException $e) {
            //GeraLog
        }
        
    }
    public function removerEndereco(Model\Core\Endereco $endereco){
        
        try {
            
            $sql = "DELETE FROM endereco WHERE codEndereco = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $endereco->getcodEndereco());
 
            return $prepareSql->execute();
            
        } catch (PDOException $e) {

        }
    }
    public function getEnderecoPorCodigo($codEndereco) : \Model\Core\Endereco{
        try {
            $sql = "SELECT * FROM endereco WHERE codEndereco = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $codEndereco);
            $prepareSql->execute();
            
            return $this->populaEndereco($prepareSql->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {

        }
    }
    
    private function populaEndereco($row) : \Model\Core\Endereco {
        $endereco = new \Model\Core\Endereco();
        $endereco->setcodEndereco($row['codEndereco']);
        $endereco->setLogradouro($row['logradouro']);
        $endereco->setNumero($row['numero']);
        $endereco->setBairro($row['bairro']);
        $endereco->setCep($row['cep']);
        $endereco->setCidade($row['cidade']);
        $endereco->setEstado($row['Estado']);
        return $endereco;
    }
}

  