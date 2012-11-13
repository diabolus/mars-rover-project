<?php

namespace MarsRover;

class CommandQueue {

    /**
     *
     * @var type 
     */
    private $__queue;

    public function __construct() {
        $this->__queue = new \SplQueue();
    }

    /**
     * 
     * @param \MarsRover\ICommand $command
     */
    public function addCommand(ICommand $command) {
        $this->__queue->enqueue($command);
    }

    /**
     * 
     * @param \MarsRover\Rover $rover
     * @return \MarsRover\ınt
     */
    public function execute(\MarsRover\Rover $rover) {
        $commandCount = 0;
        foreach ($this->__queue as $command) {
            if ($command->doCommand($rover)) {
                $command->dequeue();
                $commandCount++;
            }
        }
        return $commandCount;
    }

}