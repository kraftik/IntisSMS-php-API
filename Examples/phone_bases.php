<?php
/*
 * Запрос списка баз
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';

$client = new IntisClient($login, $apiKey);

try{
    $phoneBases = $client->getPhoneBases();

    foreach($phoneBases as $oneBase){
        $oneBase->getBaseId();
        $oneBase->getTitle();
        $oneBase->getCount();
        $oneBase->getPages();
        
        $birthday = $oneBase->getBirthdayGreetingSettings();
        $birthday->getEnabled();
        $birthday->getDaysBefore();
        $birthday->getOriginator();
        $birthday->getTimeToSend();
        $birthday->getUseLocalTime();
        $birthday->getTemplate();
    }
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}
