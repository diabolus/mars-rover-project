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

class BasicRoverTest extends PHPUnit_Framework_TestCase {

    protected $_rover = null;
    protected $_initState = null;

    public function setUp() {
        $this->_initState = new \MarsRover\RoverStates\NorthState();
        $this->_rover = new \MarsRover\Rover(new \MarsRover\MarsCoordinate(0, 0), $this->_initState , "", new \MarsRover\Area(5, 5));
    }
    public function tearDown() {
        unset($this->_rover);
    }
    public function testInitStateOfRover(){
         $this->assertInstanceOf('MarsRover\RoverStates\NorthState', $this->_initState);
    }
    public function testInvalidCharOnCommandSequence(){
        $this->setExpectedException('InvalidArgumentException');
        $this->_rover->setCommandQueue(\MarsRover\CommandQueueFactory::build("-"));
        $this->_rover->executeCommands();
        $this->assertInstanceOf('MarsRover\RoverStates\WestState', $this->_rover->getDirectionState());
    }
    public function testTurnLeft(){
        $this->_rover->setCommandQueue(\MarsRover\CommandQueueFactory::build("L"));
        $this->_rover->executeCommands();
        $this->assertInstanceOf('MarsRover\RoverStates\WestState', $this->_rover->getDirectionState());
    }
    public function testTurnRight(){
        $this->_rover->setCommandQueue(\MarsRover\CommandQueueFactory::build("R"));
        $this->_rover->executeCommands();
        $this->assertInstanceOf('MarsRover\RoverStates\EastState', $this->_rover->getDirectionState());
    }
    
    public function testLandingCoordinatesIsValid() {
        $this->setExpectedException('OutOfRangeException');
        $this->_rover = new \MarsRover\Rover(new \MarsRover\MarsCoordinate(5, 5), $this->_initState , "", new \MarsRover\Area(0, 0));
    }
    
    public function testDestinationCoordinatesValidator(){
        $validator = new \MarsRover\Validators\DestinationCoordinatesValidator(new \MarsRover\Area(3, 3));
        $this->assertTrue($validator->isValid(new \MarsRover\MarsCoordinate(0,0)));
        $this->assertFalse($validator->isValid(new \MarsRover\MarsCoordinate(5,5)));

    }

}

?>
