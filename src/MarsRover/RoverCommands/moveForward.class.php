<?php

namespace MarsRover\RoverCommands;

class moveForward implements \MarsRover\ICommand {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function doCommand(\MarsRover\Rover $rover) {
        $rover->moveForward();
    }

}