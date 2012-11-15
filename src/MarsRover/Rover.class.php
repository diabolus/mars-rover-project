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

    const ROVER_NOT_LANDED = 0;
    const ROVER_LANDED = 1;
    const replacement = 1;
    
    private $__x;
    private $__y;
    private $__area;
    private $__directionState;
    private $__commandQueue;
    private $__validator;
    private $__currentCoordinates;
    private $__roverStatus = self::ROVER_NOT_LANDED;
   

    /**
     * 
     * @param \MarsRover\MarsCoordinate $landingCoor
     * @param \MarsRover\ICardinalDirectionState $__directionState
     * @param type $commandSequence
     * @param \MarsRover\Area $area
     */
    
    public function __construct(\MarsRover\MarsCoordinate $landingCoor, \MarsRover\ICardinalDirectionState $__directionState, $commandSequence, \MarsRover\Area $area) {
        $this->setArea($area);
        $this->__validator = new \MarsRover\Validators\DestinationCoordinatesValidator($this->__area);
        $this->__landRover($landingCoor);
        $this->setDirectionState($__directionState);
        $this->setCommandQueue(\MarsRover\CommandQueueFactory::build($commandSequence));
    }
    
    /**
     * Landing function to destination Coordinates on area
     * 
     * @param type $landingCoor
     * @throws \LogicException
     * @throws \OutOfRangeException
     */
    private function __landRover($landingCoor){
        
        if($this->getRoverStatus() == self::ROVER_LANDED)
            throw new \LogicException(sprintf("Rover has already landed!!!"));
            
        if ( $this->__validator->isValid($landingCoor)) {
            
            //Rover has landed
            $this->setCurrentCoordinates($landingCoor);
            $this->setRoverStatus(self::ROVER_LANDED);
            
            
        } else {
            throw new \OutOfRangeException(sprintf("[%d,%d] landing destination is out of area", $landingCoor->getX(), $landingCoor->getY()));
        }
    }
    /**
     * 
     * @return type
     */
    public function getCurrentCoordinates() {
        return $this->__currentCoordinates;
    }
    /**
     * 
     * @param \MarsRover\MarsCoordinate $__currentCoordinates
     */
    public function setCurrentCoordinates(\MarsRover\MarsCoordinate $__currentCoordinates) {
        $this->__currentCoordinates = $__currentCoordinates;
    }

        /**
     * 
     * @return type
     */
    public function getCommandQueue() {
        return $this->__commandQueue;
    }
    
    public function getRoverStatus() {
        return $this->__roverStatus;
    }

    public function setRoverStatus($__roverStatus) {
        $this->__roverStatus = $__roverStatus;
    }

    /**
     * 
     * @param type $__commandQueue
     */
    public function setCommandQueue($__commandQueue) {
        $this->__commandQueue = $__commandQueue;
    }

    /**
     * 
     * @return type
     */
    public function getDirectionState() {
        return $this->__directionState;
    }

    /**
     * 
     * @param \MarsRover\ICardinalDirectionState $directionState
     */
    public function setDirectionState(ICardinalDirectionState $directionState) {
        $this->__directionState = $directionState;
    }

    /**
     * 
     * @return type
     */
    public function getArea() {
        return $this->__area;
    }

    /**
     * 
     * @param type $area
     */
    public function setArea($area) {
        $this->__area = $area;
    }

    /**
     * 
     * @return type
     */
    public function reportCurrentCoordinates() {
        return sprintf('Current Coordinates : %d-%d ', $this->getCurrentCoordinates()->getX(), $this->getCurrentCoordinates()->getY());
    }

    /**
     * 
     * @return type
     */
    public function reportCurrentHeadingDirection() {
        return sprintf('Current Heading Direction : %s ', (string) $this->getDirectionState());
    }

    public function calculateDestinationCoordinates(){
        return $this->__directionState->handleMoveForward($this);
    }
    
    public function moveForward() {
        $destCoor = $this->calculateDestinationCoordinates();
        if ( $this->__validator->isValid($destCoor)){
            $this->setCurrentCoordinates($destCoor);
        } 
        // in else case rover ignore the invalid command 
    }

    public function turnLeft() {
        $this->__directionState->handleTurnLeft($this);
    }

    public function turnRight() {
        $this->__directionState->handleTurnRight($this);
    }

    public function executeCommands() {
        if ( $this->getRoverStatus() == self::ROVER_LANDED ){
           $this->__commandQueue->execute($this); 
        } else {
           throw new \LogicException(sprintf("Rover is not landed yet.")); 
        }
        
    }

}

?>
