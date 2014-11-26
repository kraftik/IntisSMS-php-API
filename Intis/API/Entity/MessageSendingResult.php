<?php
namespace Intis\API\Entity;

class MessageSendingResult{
    private $phone;
    private $messageId;
    private $cost;
    private $currency;
    private $messagesCount;
    private $error;
    
    public function __construct($obj) {
        foreach($obj as $phone => $params){
            $this->phone = $phone;
            if(isset($params->id_sms))
                $this->messageId = $params->id_sms;
            if(isset($params->cost))
                $this->cost = $params->cost;
            if(isset($params->count_sms))
                $this->messagesCount = $params->count_sms;
            if(isset($params->error))
                $this->error = $params->error;
        }
    }

    /**
     * 
     * @return type
     */
    public function getPhone() {
        return $this->phone;
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
    public function getCost() {
        return $this->cost;
    }

    /**
     * 
     * @return type
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * 
     * @return type
     */
    public function getMessagesCount() {
        return $this->messagesCount;
    }
    
    /**
     * 
     * @return type
     */
    public function getError(){
        return $this->error;
    }
}
