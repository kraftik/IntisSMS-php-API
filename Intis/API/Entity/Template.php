<?php
namespace Intis\API\Entity;

class Template{
    private $id;
    private $title;
    private $template;
    private $createdAt;
    
    public function __construct($id, $obj) {
        $this->id = $id;
        $this->title = $obj->name;
        $this->template = $obj->template;
        $this->createdAt = $obj->up_time;
    }

    /**
     * 
     * @return type
     */
    public function getId(){
        return $this->id;
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
    public function getTemplate() {
        return $this->template;
    }

    /**
     * 
     * @return type
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }
}

