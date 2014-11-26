<?php
namespace Intis\API\Entity;

class StopList{
    private $id;
    private $timeAddedAt;
    private $description;
    
    function __construct($obj) {
        $this->id = $obj->id;
        $this->timeAddedAt = $obj->time_in;
        $this->description = $obj->description;
    }

    /**
     * 
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    function getTimeAddedAt() {
        return $this->timeAddedAt;
    }

    /**
     * 
     * @return type
     */
    function getDescription() {
        return $this->description;
    }
}
