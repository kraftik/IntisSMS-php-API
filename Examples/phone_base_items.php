<?php
/*
 * Запрос списка отправителей
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';

$client = new IntisClient($login, $apiKey);

try{
    $baseId = 125480;
    $page = 1;
    $items = $client->getPhoneBaseItems($baseId, $page);

    foreach($items as $item){
        $item->getPhone();
        $item->getFirstName();
        $item->getMiddleName();
        $item->getLastName();
        $item->getGender();
        $item->getNetwork();
        $item->getArea();
        $item->getNote1();
        $item->getNote2();
    }
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}