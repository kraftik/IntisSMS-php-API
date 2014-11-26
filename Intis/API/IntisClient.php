<?php

namespace Intis\API;

use Intis\API\IClient;
use Intis\API\AClient;
use Intis\API\Entity\Balance;
use Intis\API\Entity\Originator;
use Intis\API\Entity\PhoneBase;
use Intis\API\Entity\PhoneBaseItem;
use Intis\API\Entity\DeliveryStatus;
use Intis\API\Entity\StopList;
use Intis\API\Entity\MessageSendingResult;
use Intis\API\Entity\Template;
use Intis\API\Entity\DailyStats;
use Intis\API\Entity\Stats;
use Intis\API\Entity\HLRResponse;
use Intis\API\Entity\HLRStatItem;
use Intis\API\Entity\Network;
use Intis\API\Entity\IncomingMessage;


class IntisClient extends AClient implements IClient {

    /**
     * 
     * @param string $login
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct($login, $apiKey, $apiHost) {
        $this->login = $login;
        $this->apiKey = $apiKey;
        $this->apiHost = $apiHost;
    }

    public function getBalance() {
        $content = $this->getContent('balance');

        $balance = new Balance($content);

        return $balance;
    }

    public function getPhoneBases() {
        $content = $this->getContent('base');

        $phoneBases = array();
        foreach ($content as $key => $bgs) {
            $phoneBases[] = new PhoneBase($key, $bgs);
        }

        return $phoneBases;
    }

    public function getOriginators() {
        $content = $this->getContent('senders');

        $originators = array();
        foreach ($content as $originator => $state) {
            $originators[] = new Originator($originator, $state);
        }

        return $originators;
    }

    public function getPhoneBaseItems($baseId, $page = 1) {
        $content = $this->getContent('phone', array('base' => $baseId, 'page' => $page));

        $items = array();
        foreach ($content as $phone => $item) {
            $items[] = new PhoneBaseItem($phone, $item);
        }

        return $items;
    }

    public function getDeliveryStatus($messageId) {
        if (!is_array($messageId))
            $messageId = array($messageId);
        $str = implode(',', $messageId);

        $content = $this->getContent('status', array('state' => $str));

        $deliveryStatus = array();
        foreach ($content as $messageId => $messageStatus) {
            $deliveryStatus[] = new DeliveryStatus($messageId, $messageStatus);
        }

        return $deliveryStatus;
    }

    public function sendMessage($phone, $originator, $text) {
        if (!is_array($phone))
            $phone = array($phone);
        $str = implode(',', $phone);

        $content = $this->getContent('send', array('phone' => $str, 'sender' => $originator, 'text' => $text));

        $messages = array();
        foreach ($content as $message) {
            $messages[] = new MessageSendingResult($message);
        }

        return $messages;
    }

    public function checkStopList($phone) {
        $content = $this->getContent('find_on_stop', array('phone' => $phone));

        $stopList = new StopList($content);

        return $stopList;
    }

    public function addToStopList($phone) {
        $content = $this->getContent('add2stop', array('phone' => $phone));

        return $content->id;
    }

    public function getTemplates() {
        $content = $this->getContent('template');

        $templates = array();
        foreach ($content as $title => $template) {
            $templates[] = new Template($title, $template);
        }

        return $templates;
    }

    public function addTemplate($title, $template) {
        $content = $this->getContent('add_template', array('name' => $title, 'text' => $template));

        return $content->id;
    }

    public function getDailyStatsByMonth($year, $month) {
        $date = date("Y-m", mktime(0, 0, 0, $month, 1, $year));

        $content = $this->getContent('stat_by_month', array('month' => $date));

        $dailyStats = array();
        foreach ($content as $row1) {
            $stats = array();
            foreach ($row1 as $day => $one) {
                foreach ($one as $row2) {
                    foreach ($row2 as $state => $values) {
                        foreach ($values as $value) {
                            $stats[] = new Stats($state, $value);
                        }
                    }
                }

                $dailyStats[] = new DailyStats($day, $stats);
            }
        }

        return $dailyStats;
    }

    public function makeHLRRequest($phone) {
        if (!is_array($phone))
            $phone = array($phone);
        $str = implode(',', $phone);

        $content = $this->getContent('hlr', array('phone' => $str));

        $hlr = array();
        foreach ($content as $one) {
            $hlr[] = new HLRResponse($one);
        }
        return $hlr;
    }

    public function getHlrStats($from, $to) {
        $content = $this->getContent('hlr_stat', array('from' => $from, 'to' => $to));

        $stats = array();
        foreach ($content as $phone => $one) {
            $stats[] = new HLRStatItem($phone, $one);
        }

        return $stats;
    }

    public function getNetworkByPhone($phone) {
        $content = $this->getContent('operator', array('phone' => $phone));

        $network = new Network($content);

        return $network;
    }

    public function getIncomingMessages($date) {
        $content = $this->getContent('incoming', array('date' => $date));

        $messages = array();
        foreach ($content as $key => $one) {
            $messages[] = new IncomingMessage($key, $one);
        }

        return $messages;
    }
}
