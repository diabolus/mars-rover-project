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

class Area {

    private $__x1 = 0;
    private $__y1 = 0;
    private $__x2 = 0;
    private $__y2 = 0;

    /**
     * 
     * @return type
     */
    public function getX2() {
        return $this->__x2;
    }

    /**
     * 
     * @param type $__x2
     */
    public function setX2($__x2) {
        $this->__x2 = $__x2;
    }

    /**
     * 
     * @return type
     */
    public function getY2() {
        return $this->__y2;
    }

    /**
     * 
     * @param type $__y2
     */
    public function setY2($__y2) {
        $this->__y2 = $__y2;
    }

    /**
     * 
     * @param type $x
     * @param type $y
     */
    public function __construct($x, $y) {
        $this->setX2($x);
        $this->setY2($y);
    }

}

?>
