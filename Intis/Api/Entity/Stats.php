<?php
namespace Intis\API\Entity;

class Stats{
    private $state;
    private $cost;
    private $currency;
    private $count;
    
    function __construct($state, $obj) {
        $this->state = $state;
        $this->cost = $obj->cost;
        $this->count = $obj->parts;
    }

    /**
     * 
     * @return type
     */
    function getState() {
        return MessageState::parse($this->state);
    }

    /**
     * 
     * @return type
     */
    function getCost() {
        return $this->cost;
    }

    /**
     * 
     * @return type
     */
    function getCurrency() {
        return $this->currency;
    }

    /**
     * 
     * @return type
     */
    function getCount() {
        return $this->count;
    }
}
