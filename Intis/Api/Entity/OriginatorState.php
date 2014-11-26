<?php
namespace Intis\API\Entity;

class OriginatorState{
    const COMPLETED = 1;
    const MODERATION = 2;
    const REJECTED = 3;

    /**
     * 
     * @param type $string
     * @return type
     */
    public static function parse($string){
          if ($string == 'completed'){
                return self::COMPLETED;
          }
          else if ($string == 'order'){
                return self::MODERATION;
          }
          else if ($string == 'rejected'){
                return self::REJECTED;
          }
          return null;
    }
}