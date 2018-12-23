<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Endereco.php';

namespace Model;
/**
 * Description of Usuario
 *
 * @author walli
 */
class Usuario {
    //put your code here
    private $codUsuario;
    private $nome;
    private $username;
    private $email;
    private $senha;
    private $endereco;
    private $avatar;
    
    public function __construct() {
        
    }
    
    function getCodUsuario() {
        return $this->codUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    function setNome($nome) {
        if ($nome != null || !empty($nome)) {
            $this->nome = $nome;
        } else {
            throw new Exception("Digite o seu nome!");
        }
    }

    function setUsername($username) {
        if ($username == null || empty($username)) {
            throw new Exception("Digite o seu username!");
        } else if (!preg_match("/^[a-z0-9]{6,10}$/", $username)) {
            throw new Exception("Username inválido! (Use somente letras e números de 6 a 10 caracteres)");
        } else { 
            $this->username = $username;
        }
    }

    function setEmail($email) {
        if ($email == null || empty($email)) {
            throw new Exception("Digite o seu e-mail!");
        } else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
            throw new Exception("E-mail inválido!");
        } else { 
            $this->$email = $email;
        }
    }

    function setSenha($senha) {
        if ($senha == null || empty($senha)) {
            throw new Exception("Digite o seu senha!");
        } else if (strlen($senha) >= 6) {
            throw new Exception("Sua senha deve ter 6 ou mais caracteres!");
        } else { 
            $this->$email = $email;
        }
    }

    function setEndereco(\Model\Endereco $endereco) {
        if ($endereco != null) {
            $this->endereco = $endereco;
        } else {
            throw new Exception("Informe um endereço!");
        }
    }

    function setAvatar($avatar) {
        if ($avatar != null || !empty($avatar)) {
            $this->avatar = $avatar;
        } else {
            throw new Exception("Avatar não pode ser vazio, selecione uma imagem!");
        }
    }

}
