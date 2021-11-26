<?php

class Rover {
    public $posX;
    public $posY;
    public $direction;
    public $max_width;
    public $max_height;

    function __construct($x, $y, $d, $w, $h)
    {
        
        if ($d!="N"&&$d!="S"&&$d!="W"&&$d!="E"){
            echo("Direction Not Valid");
        } else $this->direction = $d;
        $this->max_width = $w;
        $this->max_height = $h;
        $this->posX = $x;
        $this->posY = $y;
    }

    function out_map(){
        if($this->posX<0||$this->posY<0||$this->posX>$this->max_width||$this->posY>$this->max_height) return true;
        else return false;
    }

    function turn_left() {
        switch ($this->direction) {
            case "N": 
                $this->direction = "W";
                break;
            case "E": 
                $this->direction = "N";
                break;
            case "S": 
                $this->direction = "E";
                break;
            case "W": 
                 $this->direction = "S";
                 break;
            default: 
                break;
        }
    }

    function turn_right() {
        switch ($this->direction) {
            case "N": 
                $this->direction = "E";
                break;
            case "W": 
                $this->direction = "N";
                break;
            case "S": 
                $this->direction = "W";
                break;
            case "E": 
                 $this->direction = "S";
                 break;
            default: 
                break;
        }
    }


        
    function can_go() {
        switch ($this->direction) {
            case "N": 
                if($this->posY<$this->max_height) return true;
                else return false;
            case "W":
                if($this->posX>0) return true;
                else return false;
            case "S": 
                if($this->posY>0) return true;
                else return false;
            case "E": 
                if($this->posX<$this->max_width) return true;
                else return false;
            default: 
                break;
        }
    }

    function go() {
        switch ($this->direction) {
            case "N": 
              $this->posY++;
              break;
            case "W":
               $this->posX--;
               break;
            case "S": 
                $this->posY--;
                break;
            case "E": 
               $this->posX++;
               break;
            default: 
               break;
        }
    }

}

?>