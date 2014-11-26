<?php
namespace Intis\API\Entity;

class IncomingMessage{
    private $messageId;
    private $receivedAt;
    private $originator;
    private $prefix;
    private $text;
    
    public function __construct($messageId, $obj) {
        $this->messageId = $messageId;
        $this->receivedAt = $obj->date;
        $this->originator = $obj->sender;
        $this->prefix = $obj->prefix;
        $this->text = $obj->text;
    }

    /**
     * 
     * @return type
     */
    public function getMessageId() {
        return $this->messageId;
    }

    /**
     * 
     * @return type
     */
    public function getReceivedAt() {
        return $this->receivedAt;
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
    public function getPrefix() {
        return $this->prefix;
    }

    /**
     * 
     * @return type
     */
    public function getText() {
        return $this->text;
    }
}
