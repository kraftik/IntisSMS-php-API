<?php
namespace Intis\API\Entity;

class Originator{
    private $originator;
    private $state;
    
    public function __construct($originator, $state) {
        $this->originator = $originator;
        $this->state = $state;
    }

    /**
     * 
     * @return type
     */
    public function getOriginator() {
        return $this->originator;
    }

    /**
     * 
     * @return type
     */
    public function getState() {
        return OriginatorState::parse($this->state);
    }
}

