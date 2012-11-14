<?php

namespace MarsRover\Validators;

class DestinationCoordinatesValidator implements \MarsRover\IValidator {

    private $__area;

    public function __construct(\MarsRover\Area $area) {
        $this->__area = $area;
    }

    public function isValid(\MarsRover\MarsCoordinate $destCoor) {
        if (
                ( $destCoor->getX() <= $this->__area->getX2() && $destCoor->getX() >= 0 ) && ( $destCoor->getY() <= $this->__area->getY2() && $destCoor->getY() >= 0 )
        ) {
            return true;
        } else {
            return false;
        }
    }

}