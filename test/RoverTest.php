<?php

require_once "bootstrap.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoverTest
 *
 * @author Vaio
 */
class RoverTest extends PHPUnit_Framework_TestCase {

    protected $_roverA = null;
    protected $_roverB = null;

    public function setUp() {
        $this->_roverA = new \MarsRover\Rover(new \MarsRover\MarsCoordinate(1, 2), new \MarsRover\RoverStates\NorthState() , "LMLMLMLMM" , new \MarsRover\Area(3, 3));
        $this->_roverB = new \MarsRover\Rover(new \MarsRover\MarsCoordinate(3, 3), new \MarsRover\RoverStates\EastState()  , "MMRMMRMRRM", new \MarsRover\Area(5, 5));
    }
    public function tearDown() {
        unset($this->_roverA,$this->_roverB);
    }
    
    public function testLandingOutOfArea(){
        $this->setExpectedException('OutOfRangeException');
        new \MarsRover\Rover(new \MarsRover\MarsCoordinate(1, 2), new \MarsRover\RoverStates\EastState()  , "", new \MarsRover\Area(1, 1));
    }

    public function testRoverAScenario(){
        $this->_roverA->executeCommands();
        $this->assertEquals($this->_roverA->getCurrentCoordinates()->getX(), 1);
        $this->assertEquals($this->_roverA->getCurrentCoordinates()->getY(), 3);
        $this->assertEquals((string)$this->_roverA->getDirectionState(), "North");
    }
    public function testRoverBScenario(){
        $this->_roverB->executeCommands();
        $this->assertEquals($this->_roverB->getCurrentCoordinates()->getX(), 5);
        $this->assertEquals($this->_roverB->getCurrentCoordinates()->getY(), 1);
        $this->assertEquals((string)$this->_roverB->getDirectionState(), "East");
    }
    
    
    /**
     * Rover continue to move
     * 
     * @depends testRoverBScenario
     */
    
    public function testOutOfAreaMoveControl() {
        //Rover cannot move forward 
        $this->_roverB->setCommandQueue(\MarsRover\CommandQueueFactory::build("LMMMMMM"));
        $this->_roverB->executeCommands();
        $this->assertEquals($this->_roverB->getCurrentCoordinates()->getY(), 5);
    }

    
    public function testOutOfAreaMoveControlScenario() {
        $roverA = new \MarsRover\Rover(new \MarsRover\MarsCoordinate(1, 2), new \MarsRover\RoverStates\NorthState(), "MMMMMMMMMMMMMMMMMM", new \MarsRover\Area(5, 5));
        $roverA->executeCommands();
        $this->assertEquals($roverA->getCurrentCoordinates()->getY(), 5);
    }

}

?>
