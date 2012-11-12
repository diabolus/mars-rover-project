<?php
namespace MarsRover;

interface ICardinalDirectionState
{
       public function handleTurnRight(\MarsRover\Rover $rover);
       
       public function handleTurnLeft(\MarsRover\Rover $rover);

       public function handleMoveForward(\MarsRover\Rover $rover); 
}