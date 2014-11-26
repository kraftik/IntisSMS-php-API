<?php
namespace Intis\API\Entity;

class DailyStats{
    private $day;
    private $stats;
    
    function __construct($day, $stats) {
        $this->day = $day;
        $this->stats = $stats;
    }

    /**
     * 
     * @return type
     */
    function getDay() {
        return $this->day;
    }

    /**
     * 
     * @return type
     */
    function getStats() {
        return $this->stats;
    }
}

