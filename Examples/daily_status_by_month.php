<?php
/*
 * Общая статистика за месяц по дням
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';

$client = new IntisClient($login, $apiKey);

try{
    $year = 2014;
    $month = 10;

    $result = $client->getDailyStatsByMonth($year, $month);
    
    foreach($result as $one){
        $one->getDay();
        
        $stats = $one->getStats();
        foreach($stats as $i){
            $i->getState();
            $i->getCost();
            $i->getCount();
        }
    }
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}
