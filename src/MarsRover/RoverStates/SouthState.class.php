<?php

namespace MarsRover\RoverStates;

class SouthState implements \MarsRover\ICardinalDirectionState {

    public function handleMoveForward(\MarsRover\Rover $rover) {
        $rover->setY($rover->getY()-\MarsRover\Rover::replacement);
    }

    public function handleTurnLeft(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new EastState());
    }

    public function handleTurnRight(\MarsRover\Rover $rover) {
        $rover->setDirectionState(new WestState());
    }
    
    public function __toString() {
    return "South";
}

}