<?php
namespace Intis\API\Entity;

class DailyStats{
    private $day;
    private $stats;
    
    public function __construct($day, $stats) {
        $this->day = $day;
        $this->stats = $stats;
    }

    /**
     * 
     * @return type
     */
    public function getDay() {
        return $this->day;
    }

    /**
     * 
     * @return type
     */
    public function getStats() {
        return $this->stats;
    }
}

