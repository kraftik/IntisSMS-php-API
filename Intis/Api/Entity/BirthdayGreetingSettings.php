<?php
namespace Intis\API\Entity;

class BirthdayGreetingSettings{
    private $enabled;
    private $daysBefore;
    private $originator;       
    private $timeToSend;
    private $useLocalTime;
    private $template;
    
    public function __construct($obj) {
        $this->enabled = $obj->on_birth;
        $this->daysBefore = $obj->day_before;
        $this->originator = $obj->birth_sender;
        $this->timeToSend = $obj->time_birth;
        $this->useLocalTime = $obj->local_time;
        $this->template = $obj->birth_text;
    }

    /**
     * 
     * @return type
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * 
     * @return type
     */
    public function getDaysBefore() {
        return $this->daysBefore;
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
    public function getTimeToSend() {
        return $this->timeToSend;
    }

    /**
     * 
     * @return type
     */
    public function getUseLocalTime() {
        return $this->useLocalTime;
    }

    /**
     * 
     * @return type
     */
    public function getTemplate() {
        return $this->template;
    }
}

