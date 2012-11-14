<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Area
 *
 * @author Gurkan
 */

namespace MarsRover;

class MarsCoordinate {

    private $__x = 0;
    private $__y = 0;

    /**
     * 
     * @return type
     */
    public function getX() {
        return $this->__x;
    }

    /**
     * 
     * @param type $__x
     */
    public function setX($__x) {
        $this->__x = $__x;
    }

    /**
     * 
     * @return type
     */
    public function getY() {
        return $this->__y;
    }

    /**
     * 
     * @param type $__y
     */
    public function setY($__y) {
        $this->__y = $__y;
    }

    /**
     * 
     * @param type $x
     * @param type $y
     */
    public function __construct( $x, $y) {
        $this->setX($x);
        $this->setY($y);
    }
    
    public function __toString() {
        return sprintf('[%d,%d]',$this->getX(),$this->getY());
}

}

?>
