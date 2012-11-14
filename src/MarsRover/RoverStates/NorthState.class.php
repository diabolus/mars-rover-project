<?php

namespace MarsRover\RoverStates;

class NorthState implements \MarsRover\ICardinalDirectionState {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover) {
        return new \MarsRover\MarsCoordinate($rover->getX(),$rover->getY() + \MarsRover\Rover::replacement);
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new WestState());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new EastState());
    }

    /**
     * 
     * @return strıng
     */
    public function __toString() {
        return "North";
    }

}