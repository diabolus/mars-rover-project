<?php

namespace MarsRover\RoverStates;

class WestState implements \MarsRover\ICardinalDirectionState {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover) {
        return new \MarsRover\MarsCoordinate($rover->getX() - \MarsRover\Rover::replacement,$rover->getY());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new SouthState());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new NorthState());
    }

    /**
     * 
     * @return strıng
     */
    public function __toString() {
        return "West";
    }

}