<?php
namespace Intis\API\Entity;

class MessageState {

    const SCHEDULED = 0;
    const ENROUTE = 1;
    const DELIVERED = 2;
    const EXPIRED = 3;
    const DELETED = 4;
    const UNDELIVERABLE = 5;
    const ACCEPTED = 6;
    const UNKNOWN = 7;
    const REJECTED = 8;
    const SKIPPED = 9;

    /**
     * 
     * @param type $state
     * @return type
     */
    public static function parse($state) {
        switch ($state) {
            case 'deliver':
                return self::DELIVERED;
            case 'expired':
                return self::EXPIRED;
            case 'not_deliver':
                return self::UNDELIVERABLE;
            case 'partly_deliver':
                return self::ACCEPTED;
            default:
                return null;
        }
    }
}
