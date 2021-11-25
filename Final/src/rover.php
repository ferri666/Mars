<?php

class Rover {
    public $posX;
    public $posY;
    public $direction;

    function __construct($x, $y, $d)
    {
        $this->posX = $x;
        $this->posY = $y;
        if ($d!="N"&&$d!="S"&&$d!="W"&&$d!="E"){
            echo("Direction Not Valid");
        } else $this->direction = $d;
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
        }
    }

    function can_go() {
        switch ($this->direction) {
            case "N": 
                if($this->posY<$GLOBALS['max_height']) return true;
                else return false;
            case "W":
                if($this->posX>0) return true;
                else return false;
            case "S": 
                if($this->posY>0) return true;
                else return false;
            case "E": 
                if($this->posX<$GLOBALS['max_width']) return true;
                else return false;
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
        }
    }

}

?>