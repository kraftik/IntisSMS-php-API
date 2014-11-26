<?php
/*
 * Поиск номера в стоп-листе
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';
$apiHost = 'http://dev.sms16.ru/get/';

$client = new IntisClient($login, $apiKey, $apiHost);

try{
    $phone = '79009009090';

    $deliveryStatus = $client->checkStopList($phone);
    $deliveryStatus->getId();
    $deliveryStatus->getDescription();
    $deliveryStatus->getTimeAddedAt();
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}
