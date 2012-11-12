<?php

namespace MarsRover\RoverCommands;

class turnRight implements \MarsRover\ICommand
{
    public function doCommand(\MarsRover\Rover $rover) {
         $rover->turnRight();
    }
}