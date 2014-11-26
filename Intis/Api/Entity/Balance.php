<?php

namespace Intis\API\Entity;

class Balance{
    private $amount;
    private $currency;
    
    function __construct($obj) {
        $this->amount = $obj->money;
        $this->currency = $obj->currency;
    }

    /**
     * 
     * @return type
     */
    public function getAmount(){
        return $this->amount;
    }
    
    /**
     * 
     * @return type
     */
    public function getCurrency(){
        return $this->currency;
    }
}

