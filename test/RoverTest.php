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
        $this->_roverA = new \MarsRover\Rover(1, 2, new \MarsRover\RoverStates\NorthState() , "LMLMLMLMM" , new \MarsRover\Area(5, 5));
        $this->_roverA->executeCommands();
        $this->_roverB = new \MarsRover\Rover(3, 3, new \MarsRover\RoverStates\EastState()  , "MMRMMRMRRM", new \MarsRover\Area(5, 5));
        $this->_roverB->executeCommands();
    }
    public function tearDown() {
        unset($this->_roverA,$this->_roverB);
    }
    public function testRoverAScenario(){
        $this->assertEquals($this->_roverA->getX(), 1);
        $this->assertEquals($this->_roverA->getY(), 3);
        $this->assertEquals((string)$this->_roverA->getDirectionState(), "North");
    }
    public function testRoverBScenario(){
        $this->assertEquals($this->_roverB->getX(), 5);
        $this->assertEquals($this->_roverB->getY(), 1);
        $this->assertEquals((string)$this->_roverB->getDirectionState(), "East");
    }


}

?>
