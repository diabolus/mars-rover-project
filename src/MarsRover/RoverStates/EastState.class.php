<?php

namespace MarsRover\RoverStates;

class EastState implements \MarsRover\ICardinalDirectionState {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover) {
        return new \MarsRover\MarsCoordinate($rover->getX() + \MarsRover\Rover::replacement,$rover->getY());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new NorthState());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new SouthState());
    }

    /**
     * 
     * @return strıng
     */
    public function __toString() {
        return "East";
    }

}