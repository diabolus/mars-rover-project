<?php

namespace MarsRover;

interface IValidator {

    /**
     * 
     * @param \MarsRover\MarsCoordinate $value
     */
    public function isValid(\MarsRover\MarsCoordinate $value);
}