<?php
namespace Intis\API\Entity;

class StopList{
    private $id;
    private $timeAddedAt;
    private $description;
    
    public function __construct($obj) {
        foreach($obj as $id => $params){
            $this->id = $id;
            $this->timeAddedAt = $params->time_in;
            $this->description = $params->description;
        }
    }

    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    public function getTimeAddedAt() {
        return $this->timeAddedAt;
    }

    /**
     * 
     * @return type
     */
    public function getDescription() {
        return $this->description;
    }
}
