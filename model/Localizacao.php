<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;

/**
 * Description of Localizacao
 *
 * @author walli
 */
class Localizacao {
    
    private $codLocalizacao;
    private $latitude;
    private $longitude;
    
    public function __construct() {
        
    }
    
    function getCodLocalizacao() {
        return $this->codLocalizacao;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function setCodLocalizacao($codLocalizacao) {
        $this->codLocalizacao = $codLocalizacao;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

}
