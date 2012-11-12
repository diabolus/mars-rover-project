<?php

namespace MarsRover\RoverCommands;

class moveForward implements \MarsRover\ICommand {

    public function doCommand(\MarsRover\Rover $rover) {
            $rover->moveForward();
        }

}