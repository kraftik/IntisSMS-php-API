<?php
namespace Intis\API\Entity;

class Stats{
    private $state;
    private $cost;
    private $currency;
    private $count;
    
    public function __construct($state, $obj) {
        $this->state = $state;
        $this->cost = $obj->cost;
        $this->count = $obj->parts;
    }

    /**
     * 
     * @return type
     */
    public function getState() {
        return MessageState::parse($this->state);
    }

    /**
     * 
     * @return type
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * 
     * @return type
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * 
     * @return type
     */
    public function getCount() {
        return $this->count;
    }
}
