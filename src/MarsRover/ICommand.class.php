<?php

namespace MarsRover;

interface ICommand {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function doCommand(Rover $rover);
}