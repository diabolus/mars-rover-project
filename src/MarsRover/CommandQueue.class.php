<?php

namespace MarsRover;

class CommandQueue
{
    private $__queue;

    public function __construct() {
        $this->__queue = new \SplQueue();
    }

    public function addCommand(ICommand $command) {
        $this->__queue->enqueue($command);
    }

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