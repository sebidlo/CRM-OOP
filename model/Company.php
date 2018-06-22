<?php

class Company {
    var $id;
    var $name;
    
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        
    }
    
    function getInfo() {
        return "Company: $this->id $this->name";
    }
}

