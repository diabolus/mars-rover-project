<?php

namespace MarsRover\RoverStates;

class SouthState implements \MarsRover\ICardinalDirectionState {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover) {
        return new \MarsRover\MarsCoordinate($rover->getCurrentCoordinates()->getX(),$rover->getCurrentCoordinates()->getY() - \MarsRover\Rover::replacement);
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new EastState());
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new WestState());
    }

    /**
     * 
     * @return strıng
     */
    public function __toString() {
        return "South";
    }

}