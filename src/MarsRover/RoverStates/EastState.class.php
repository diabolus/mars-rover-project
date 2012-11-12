<?php

namespace MarsRover\RoverStates;

class EastState implements \MarsRover\ICardinalDirectionState {

    public function handleMoveForward(\MarsRover\Rover $rover) {
        $rover->setX($rover->getX()+  \MarsRover\Rover::replacement);
    }

    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new NorthState());
    }

    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new SouthState());
    }
    
    public function __toString() {
    return "East";
}

}