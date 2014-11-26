<?php
namespace Intis\API\Entity;

class DeliveryStatus{
    private $messageId;
    private $messageStatus;
    
    public function __construct($messageId, $messageStatus) {
        $this->messageId = $messageId;
        $this->messageStatus = $messageStatus;
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
    public function getMessageStatus() {
        return MessageState::parse($this->messageStatus);
    }
}
