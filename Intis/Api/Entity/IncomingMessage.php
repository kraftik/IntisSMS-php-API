<?php
namespace Intis\API\Entity;

class IncomingMessage{
    private $messageId;
    private $receivedAt;
    private $originator;
    private $prefix;
    private $text;
    
    function __construct($messageId, $obj) {
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
    function getMessageId() {
        return $this->messageId;
    }

    /**
     * 
     * @return type
     */
    function getReceivedAt() {
        return $this->receivedAt;
    }

    /**
     * 
     * @return type
     */
    function getOriginator() {
        return $this->originator;
    }

    /**
     * 
     * @return type
     */
    function getPrefix() {
        return $this->prefix;
    }

    /**
     * 
     * @return type
     */
    function getText() {
        return $this->text;
    }
}
