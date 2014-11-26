<?php
namespace Intis\API\Entity;

class Template{
    private $id;
    private $title;
    private $template;
    private $createdAt;
    
    function __construct($title, $obj) {
        $this->title = $title;
        $this->id = $obj->id;
        $this->template = $obj->template;
        $this->createdAt = $obj->up_time;
    }

    /**
     * 
     * @return type
     */
    function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @return type
     */
    function getTemplate() {
        return $this->template;
    }

    /**
     * 
     * @return type
     */
    function getCreatedAt() {
        return $this->createdAt;
    }
}

