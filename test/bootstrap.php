<?php
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."CommandQueueFactory.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."CommandQueue.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."ICommand.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."IValidator.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."Area.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."MarsCoordinate.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."Rover.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."ICardinalDirectionState.class.php";
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverStates". DIRECTORY_SEPARATOR . 'NorthState.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverStates". DIRECTORY_SEPARATOR . 'WestState.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverStates". DIRECTORY_SEPARATOR . 'EastState.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverStates". DIRECTORY_SEPARATOR . 'SouthState.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverCommands". DIRECTORY_SEPARATOR . 'turnLeft.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverCommands". DIRECTORY_SEPARATOR . 'moveForward.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."RoverCommands". DIRECTORY_SEPARATOR . 'turnRight.class.php';
require_once dirname(__DIR__)  . DIRECTORY_SEPARATOR ."src". DIRECTORY_SEPARATOR ."MarsRover". DIRECTORY_SEPARATOR ."Validators". DIRECTORY_SEPARATOR . 'DestinationCoordinatesValidator.class.php';
