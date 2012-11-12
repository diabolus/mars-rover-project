<?php
namespace MarsRover;

interface ICommand
{
    public function doCommand( Rover $rover );
}