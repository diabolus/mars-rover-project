<?php

namespace MarsRover\RoverCommands;

class turnRight implements \MarsRover\ICommand {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function doCommand(\MarsRover\Rover $rover) {
        $rover->turnRight();
    }

}