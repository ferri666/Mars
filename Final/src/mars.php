<?php

require 'rover.php';
require 'square.php';


function rover() {
    if (isset($_POST['height']) && isset($POST['width']) && isset ($POST['commands']) && isset ($POST['orientation']) && isset ($POST['posX'])&& isset ($POST['posY'])) {
        $height=$_POST['height'];
        $width=$_POST['width'];
        $posX = $_POST['posX'];
        $posY = $_POST['posY'];
        $orientation = $_POST['orientation'];
        $commands = $_POST['commands'];
        if (count_chars($commands, 3)=="ALR") {
            $val_commands=str_split($commands);
        } else {
            echo 'Comando no válido';
        }
        $square = new Square($width, $height);
        $max_width = $square->width;
        $max_height = $square->height;

        $rover = new Rover($posX, $posY, $orientation);
            
              



        foreach ($val_commands as $command) {
            switch ($command) {
                case "L":
                    $rover->turn_left;
                    break;
                case "R":
                    $rover->turn_right;
                    break;
                case "A":
                    if ($rover->can_go()){
                        $rover->go;
                         break;
                    }else {
                        echo 'Fuera del mapa';
                        break;
                    }
            }
        }


    } else {
        echo 'Invalid Inputs';
    }
        

}






?>