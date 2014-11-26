<?php
namespace Intis\API\Entity;

class HLRResponseState{
    const SUCCESS = 1;
    const FAILED = 2;
    
    /**
     * 
     * @param type $string
     * @return type
     */
    public static function parse($string){
        if(strtolower($string) == 'delivrd')
            return self::SUCCESS;
        return self::FAILED;
    }
}
