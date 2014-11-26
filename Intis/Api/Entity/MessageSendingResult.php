<?php
namespace Intis\API\Entity;

class MessageSendingResult{
    private $phone;
    private $messageId;
    private $cost;
    private $currency;
    private $messagesCount;
    
    function __construct($phone, $obj) {
        $this->phone = $phone;
        $this->messageId = $obj->id_sms;
        $this->cost = $onj->cost;
        $this->messagesCount = $obj->count_sms;
    }

    /**
     * 
     * @return type
     */
    function getPhone() {
        return $this->phone;
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
    function getCost() {
        return $this->cost;
    }

    /**
     * 
     * @return type
     */
    function getCurrency() {
        return $this->currency;
    }

    /**
     * 
     * @return type
     */
    function getMessagesCount() {
        return $this->messagesCount;
    }
}
