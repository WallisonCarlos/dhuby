<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Conexao.php';
require '../model/core/Usuario.php';

namespace DAO;

/**
 * Description of UsuarioDAO
 *
 * @author walli
 */
class UsuarioDAO {
    //put your code here

    public function __construct() {
     
    }

    public function adicionarUsuario(Model\Core\Usuario $usuario) {
        
        try {
            
            $sql = "INSERT INTO usuario(nome) VALUES(:nome)";
            $prepareSql = DAO\Conexao::getInstance()->prepare($sql);
            
            $prepareSql->bindValue(":nome", $usuario->getNome());
            
            return $prepareSql->execute();
                    
        } catch (PDOException $e) {
            //GeraLog
        }
        
    }
    
    public function atualizaUsuario(Model\Core\Usuario $usuario) {
        
        try {
            $sql = "UPDATE usuario set
        nome = :nome,
                email = :email,
                senha = :senha,
                ativo = :ativo,
                cod_perfil = :cod_perfil WHERE cod_usuario = :cod_usuario";
 
            $prepareSql = Conexao::getInstance()->prepare($sql);
 
            $prepareSql->bindValue(":nome", $usuario->getNome());

            $prepareSql->bindValue(":cod_usuario", $usuario->getCod_usuario());
 
            return $prepareSql->execute();
            
        } catch (PDOException $e) {

        }
    
    }
    
    public function removeUsuario(Model\Core\Usuario $usuario){
        
        try {
            
            $sql = "DELETE FROM usuario WHERE cod_usuario = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $usuario->getCodUsuario());
 
            return $prepareSql->execute();
            
        } catch (PDOException $e) {

        }
    }
    
    public function getUsuarioPorCodigo($codUsuario) {
        try {
            $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
            $prepareSql = Conexao::getInstance()->prepare($sql);
            $prepareSql->bindValue(":cod", $codUsuario);
            $prepareSql->execute();
            
            return $this->populaUsuario($prepareSql->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {

        }
    }
    
    
}
