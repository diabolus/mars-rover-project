<?php

namespace MarsRover;

interface ICardinalDirectionState {/**
 * 
 * @param \MarsRover\Rover $rover
 */

    public function handleTurnRight(\MarsRover\Rover $rover);

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnLeft(\MarsRover\Rover $rover);

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover);
}