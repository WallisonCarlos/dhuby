<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author walli
 */

namespace DAO;

class Conexao {
    
    private static $instancia;
    
    private function __construct() {
        
    }
    
    public static function getInstance() {
        
        if (!isset(self::$instancia)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=dhuby', 'root', '',
 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        
        return $instancia;
    }
}
