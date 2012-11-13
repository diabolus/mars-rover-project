<?php

namespace MarsRover;

class CommandQueueFactory {

    /**
     * 
     * @param type $sequence
     * @return \MarsRover\CommandQueue
     * @throws \InvalidArgumentException
     */
    public static function build($sequence) {
        $commandQueue = new \MarsRover\CommandQueue;
        $sequence = strtoupper($sequence);
        for ($i = 0, $j = strlen($sequence); $i < $j; $i++) {
            switch ($sequence[$i]) {
                case "M":
                    $commandQueue->addCommand(new \MarsRover\RoverCommands\moveForward());
                    break;
                case "L":
                    $commandQueue->addCommand(new \MarsRover\RoverCommands\turnLeft());
                    break;
                case "R":
                    $commandQueue->addCommand(new \MarsRover\RoverCommands\turnRight());
                    break;
                default:
                    throw new \InvalidArgumentException(sprintf("[%s] is an invalid char for command sequence", $sequence[$i]));
            }
        }
        return $commandQueue;
    }

}