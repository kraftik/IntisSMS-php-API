<?php
namespace Intis\API\Entity;

class Gender{
    const MALE = 1;
    const FEMALE = 2;
    const UNDEFINED = 3;
    
    /**
     * 
     * @param type $string
     * @return type
     */
    public static function parse($string){
        switch ($string){
            case 'm':
                return self::MALE;
            case 'f':
                return self::FEMALE;
            default :
                return self::UNDEFINED;
        }
    }
}
