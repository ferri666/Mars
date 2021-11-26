<?php

require 'rover.php';
require 'square.php';

rover();

function rover() {
    
        $height=$_POST['height'];
        $width=$_POST['width'];
        $posX = $_POST['posX'];
        $posY = $_POST['posY'];
        $orientation = $_POST['orientation'];
        $commands = strtoupper($_POST['commands']);
        if (count_chars($commands, 3)=="ALR" || count_chars($commands, 3)=="AL" || count_chars($commands, 3)=="LR" || count_chars($commands, 3)=="AR" || count_chars($commands, 3)=="A" || count_chars($commands, 3)=="R" || count_chars($commands, 3)=="L") {
            $val_commands=str_split($commands);
        } else {
            echo 'Comando no válido';
        }
        $square = new Square($width, $height);
        $max_width = $square->width;
        $max_height = $square->height;

        $rover = new Rover($posX, $posY, $orientation, $width, $height);


        foreach ($val_commands as $command) {
            switch ($command) {
                case "L":
                    $rover->turn_left();
                    break;
                case "R":
                    $rover->turn_right();
                    break;
                case "A":
                    if ($rover->can_go()){
                        $rover->go();
                         break;
                    }else {
                        echo 'Sonda salió del mapa <br />';
                        return;
                    }
            }
        }

        if ($rover->out_map()) echo 'Fuera del mapa';
        else echo $rover->posX." ".$rover->posY." ".$rover->direction;

        


}


?>