<?php
/*
 * Запрос оператора по номеру
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';
$apiHost = 'http://dev.sms16.ru/get/';

$client = new IntisClient($login, $apiKey, $apiHost);

try{
    $phone = '79802503672';
    $network = $client->getNetworkByPhone($phone);

    $network->getTitle();
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}

