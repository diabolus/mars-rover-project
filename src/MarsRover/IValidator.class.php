<?php

namespace MarsRover;

interface IValidator {

    /**
     * 
     * @param $value
     */
    public function isValid(\MarsRover\MarsCoordinate $value);
}