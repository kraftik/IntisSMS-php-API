<?php
/*
 * Отправка СМС
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';

$client = new IntisClient($login, $apiKey);

try{
    $phone = array('79009009090','79009009091');
    /*
     * || $phone = '79009009090,79009009091,79009009092'
     */
    $originator = 'test';
    $text = 'test message';
    $messages = $client->sendMessage($phone, $originator, $text);
    
    foreach($messages as $one){
        $one->getPhone();
        $one->getMessageId();
        $one->getCost();
        $one->getMessagesCount();
    }
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}
