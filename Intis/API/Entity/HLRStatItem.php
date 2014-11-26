<?php
namespace Intis\API\Entity;

class HLRStatItem extends HLRResponse {

    private $phone;
    private $messageId;
    private $totalPrice;
    private $requestId;
    private $requestTime;

    public function __construct($phone, $obj) {
        parent::__construct($obj);
        $this->phone = $phone;
        $this->messageId = $obj->message_id;
        $this->totalPrice = $obj->total_price;
        $this->requestId = $obj->request_id;
        $this->requestTime = $obj->request_time;
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
    public function getMessageId() {
        return $this->messageId;
    }

    /**
     * 
     * @return type
     */
    public function getTotalPrice() {
        return $this->totalPrice;
    }

    /**
     * 
     * @return type
     */
    public function getRequestId() {
        return $this->requestId;
    }

    /**
     * 
     * @return type
     */
    public function getRequestTime() {
        return $this->requestTime;
    }
}
