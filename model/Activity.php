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
    private $status;
    //var $status;
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

function getStatus(){
    if ($this->status == 1){
        return ActivityStatus::OPEN;
    }
    if ($this->status == 2){
        return ActivityStatus::IN_PROGRES;
    }
    if ($this->status == 3){
        return ActivityStatus::CLOSED;
    }
}

function setStatus($newStatus){
    if ($newStatus == ActivityStatus::OPEN){
        $this->status = 1;
    }
    if ($newStatus == ActivityStatus::IN_PROGRES){
        $this->status = 2;
    }
    if ($newStatus == ActivityStatus::CLOSED){
        $this->status = 3;
    }
}

class ActivityType {
    const PHONE = "telefon";
    const METTONG = "spotkanie";
    const EMAIL =  "email";
    
}

class ActivityStatus {
    const OPEN = "aplanowane";//1
    const IN_PROGRES = "w trakcie";//2
    const CLOSED = "zakończone";//3
    
}