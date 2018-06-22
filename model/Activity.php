<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Activity {
    var $id;
    var $subject;
    var $time;
    var $salesman;
    var $company;
    var $type;
    var $status;
    var $note;
    
    function __construct($id, $subject, $time, $company, $salesman, $type, $status, $note) {
        $this->id = $id;
        $this->subject = $subject;
        $this->time = $time;
        $this->company = $company;
        $this->salesman = $salesman;
        $this->type = $type;
        $this->status = $status;
        $this->note = $note;   
    }
    
    function getInfo() {
        
        return "Activity: $this->id $this->subject {$this->time->format("Y-m-d")} "
        . "{$this->company->getInfo()} "
        . "{$this->salesman->getInfo()} "
        . " $this->type $this->status $this->note";
    }
          
    function asHtmlTableRow(){
        $html ="<tr>";
        $html .="<td>{$this->time->format("Y-m-d")}</td>";
        $html .="<td>{$this->subject}</td>";
        $html .="<td>{$this->company->name}</td>";
        $html .="<td>{$this->type}</td>";
        $html .="<td>{$this->status}</td>";
        $html .="<td>{$this->salesman->name}</td>";
        $html .="</tr>";
        
        return $html;
        }
    
    
}

class ActivityType {
    const PHONE = "telefon";
    const METTONG = "spotkanie";
    const EMAIL =  "email";
    
}

class ActivityStatus {
    const OPEN = "aplanowane";
    const IN_PROGRES = "w trakcie";
    const CLOSED = "zakończone";
    
}