<?php

namespace MarsRover\RoverStates;

class SouthState implements \MarsRover\ICardinalDirectionState {

    /**
     * 
     * @param \MarsRover\Rover $rover
     */
    public function handleMoveForward(\MarsRover\Rover $rover) {
        $rover->setY($rover->getY() - \MarsRover\Rover::replacement);
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