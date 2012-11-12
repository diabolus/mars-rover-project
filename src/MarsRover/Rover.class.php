<?php
namespace MarsRover;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rover
 *
 * @author Gurkan
 */
class Rover {

    private $__x;
    private $__y;
    private $area;
    private $__directionState;
    private $__commandQueue;
    
    const replacement = 1;

    public function __construct($__x , $__y ,\MarsRover\ICardinalDirectionState $__directionState , $commandSequence , Area $area) {
        
        $this->setX($__x);
        $this->setY($__y);
        $this->setDirectionState($__directionState);
        $this->setCommandQueue(\MarsRover\CommandQueueFactory::build($commandSequence));
        $this->setArea($area);
        
    }
    
    public function getX() {
        return $this->__x;
    }

    public function setX($__x) {
        $this->__x = $__x;
    }

    public function getY() {
        return $this->__y;
    }
    
    public function getCommandQueue() {
    return $this->__commandQueue;
    }

    public function setCommandQueue($__commandQueue) {
    $this->__commandQueue = $__commandQueue;
    }

    public function setY($__y) {
        $this->__y = $__y;
    }

    public function getDirectionState() {
        return $this->__directionState;
    }

    public function setDirectionState(ICardinalDirectionState $directionState) {
        $this->__directionState = $directionState;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }
    
    public function reportCurrentCoordinates(){
        return sprintf('Current Coordinates : %d-%d ',$this->getX(),  $this->getY());
    }
    
    public function reportCurrentHeadingDirection(){
        return sprintf('Current Heading Direction : %s ',$this->getDirectionState());
    }

    public function moveForward(){
        $this->__directionState->handleMoveForward($this);
    }
    
    public function turnLeft(){
        $this->__directionState->handleTurnLeft($this);
    }
    
    public function turnRight(){
        $this->__directionState->handleTurnRight($this);
    }
    
    public function executeCommands(){
        $this->__commandQueue->execute($this);
    }

    
}

?>
