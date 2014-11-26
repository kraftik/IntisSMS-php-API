<?php
namespace Intis\API\Lib;

interface IClient{
    
    /**
     * 
     * @return Intis\API\Entity\Balance
     */
    function getBalance();
    
    /**
     * 
     * @return Intis\API\Entity\PhoneBase[]
     */
    function getPhoneBases();
    
    /**
     * 
     * @return Intis\API\Entity\Originator[]
     */
    function getOriginators();
    
    /**
     * 
     * @param integer $baseId
     * @param integer $page
     * 
     * @return Intis\API\Entity\PhoneBaseItem[]
     */
    function getPhoneBaseItems($baseId, $page);
    
    /**
     * 
     * @param integer $messageId
     * 
     * @return Intis\API\Entity\DeliveryStatus[]
     */
    function getDeliveryStatus($messageId);
    
    /**
     * 
     * @param string|array $phone
     * @param string $originator
     * @param string $text
     * 
     * @return Intis\API\Entity\MessageSendingResult[]
     */
    function sendMessage($phone, $originator, $text);
    
    /**
     * 
     * @param string $phone
     * 
     * @return Intis\API\Entity\StopList
     */
    function checkStopList($phone);
    
    /**
     * 
     * @param string $phone
     * 
     * @return integer
     */
    function addToStopList($phone);
    
    /**
     * 
     * @return Intis\API\Entity\Template[]
     */
    function getTemplates();
    
    /**
     * 
     * @param string $title
     * @param string $template
     * 
     * @return integer
     */
    function addTemplate($title, $template);
    
    /**
     * 
     * @param string $year
     * @param string $month
     * 
     * @return Intis\API\Entity\DailyStats[]
     */
    function getDailyStatsByMonth($year, $month);
    
    /**
     * 
     * @param string|array $phone
     * 
     * @return Intis\API\Entity\HLRResponse[]
     */
    function makeHLRRequest($phone);
    
    /**
     * 
     * @param string $from
     * @param string $to
     * 
     * @return Intis\API\Entity\HLRStatItem[]
     */
    function getHlrStats($from, $to);
    
    /**
     * 
     * @param string $phone
     * 
     * @return Intis\API\Entity\Network
     */
    function getNetworkByPhone($phone);
    
    /**
     * 
     * @param string $date
     * 
     * @return Intis\API\Entity\IncomingMessage[]
     */
    function getIncomingMessages($date);
}
