<?php

namespace MarsRover\RoverCommands;

class turnLeft implements \MarsRover\ICommand
{
    public function doCommand(\MarsRover\Rover $rover) {
        $rover->turnLeft();
    }
}