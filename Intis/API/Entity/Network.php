<?php
namespace Intis\API\Entity;

class Network{
    private $title;
    
    function __construct($obj) {
        $this->title = $obj->operator;
    }
    
    /**
     * 
     * @return type
     */
    public function getTitle(){
        return $this->title;
    }

}
