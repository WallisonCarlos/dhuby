<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Model\Collections;
/**
 * Description of Collection
 *
 * @author walli
 */
class Collection {
    
    private $items = array();

    public function addItem($obj, $key = null) {
        if ($key == null) {
            $this->items[] = $obj;
        } else {
            if (isset($this->items[$key])) {
                throw new Exception("Chave $key já está em uso.");
            }
            else {
                $this->items[$key] = $obj;
            }
        }        
    }

    public function deleteItem($key) {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        } else {
            throw new Exception("Chave $key inválida.");
        }
    }

    public function getItem($key) {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        else {
            throw new Exception("Chave $key inválida.");
        }
    }
}
