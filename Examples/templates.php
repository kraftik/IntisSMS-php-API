<?php
/*
 * Запрос списка шаблонов
 */

require_once('autoloader.php');

use Intis\API\IntisClient;
use Intis\API\APIException;

$login = 'rso';
$apiKey = 'cfe4fb6f670914b7897cc2783234b7428d6dc826';
$apiHost = 'http://dev.sms16.ru/get/';

$client = new IntisClient($login, $apiKey, $apiHost);

try{
    $templates = $client->getTemplates();

    foreach($templates as $template){
        $template->getId();
        $template->getTitle();
        $template->getTemplate();
        $template->getCreatedAt();
    }
}
catch (APIException $e){
    $errorMessage = $e->getMessage();
    $code = $e->getCode();
}
