<?php
namespace Intis\API\Entity;

class PhoneBase{
    private $baseId;
    private $title;
    private $count;
    private $pages;
    private $birthdayGreetingSettings;
    
    public function __construct($baseId, $obj) {
        $this->baseId = $baseId;
        $this->title = $obj->name;
        $this->count = $obj->count;
        $this->pages = $obj->pages;
        $this->birthdayGreetingSettings = new BirthdayGreetingSettings($obj);
    }
    
    /**
     * 
     * @return type
     */
    public function getBaseId(){
        return $this->baseId;
    }
    
    /**
     * 
     * @return type
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @return type
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * 
     * @return type
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * 
     * @return type
     */
    public function getBirthdayGreetingSettings() {
        return $this->birthdayGreetingSettings;
    }
}

