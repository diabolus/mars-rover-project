<?php

include 'autoload.php';

$plateu = new \MarsRover\Area(5,5);

$rover = new \MarsRover\Rover(1, 2, new \MarsRover\RoverStates\NorthState(), "LMLMLMLMM", $plateu);
$rover->executeCommands();

echo $rover->reportCurrentCoordinates()."\n";
echo $rover->reportCurrentHeadingDirection()."\n";

$rover2 = new \MarsRover\Rover(3, 3, new \MarsRover\RoverStates\EastState(), "MMRMMRMRRM", $plateu);
$rover2->executeCommands();

echo $rover2->reportCurrentCoordinates()."\n";
echo $rover2->reportCurrentHeadingDirection()."\n";
