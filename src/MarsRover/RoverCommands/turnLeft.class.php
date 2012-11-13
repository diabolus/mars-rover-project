<?php

namespace MarsRover\RoverCommands;

class turnLeft implements \MarsRover\ICommand {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function doCommand(\MarsRover\Rover $rover) {
        $rover->turnLeft();
    }

}