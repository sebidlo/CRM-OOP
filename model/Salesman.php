<?php

class Salesman {
    var $id;
    var $name;
    
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        
    }
    
    function getInfo() {
        return "Salesman: $this->id $this->name";
    }
}

