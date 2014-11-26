<?php
namespace Intis\API\Entity;

class HLRResponse {

    private $id;
    private $destination;
    private $status;
    private $IMSI;
    private $MCC;
    private $MNC;
    
    private $originalCountryName;
    private $originalCountryCode;
    private $originalNetworkName;
    private $originalNetworkPrefix;
    
    private $roamingCountryName;
    private $roamingCountryPrefix;
    private $roamingNetworkName;
    private $roamingNetworkPrefix;
    
    private $portedCountryName;
    private $portedCountryPrefix;
    private $portedNetworkName;
    private $portedNetworkPrefix;
    
    private $pricePerMessage;
    private $ported;
    private $inRoaming;

    function __construct($obj) {
        if(isset($obj->id))
            $this->id = $obj->id;
        if(isset($obj->destination))
            $this->destination = $obj->destination;
        $this->status = $obj->stat;
        $this->IMSI = $obj->IMSI;
        $this->MCC = substr($obj->mccmnc, 0, 3);
        $this->MNC = substr($obj->mccmnc, 3);
        
        $this->originalCountryName = $obj->ocn;
        $this->originalCountryCode = $obj->ocp;
        $this->originalNetworkName = $obj->orn;
        $this->originalNetworkPrefix = $obj->onp;
        
        $this->roamingCountryName = $obj->rcn;
        $this->roamingCountryPrefix = $obj->rcp;
        $this->roamingNetworkName = $obj->ron;
        $this->roamingNetworkPrefix = $obj->rnp;
        
        $this->portedCountryName = $obj->pcn;
        $this->portedCountryPrefix = $obj->pcp;
        $this->portedNetworkName = $obj->pon;
        $this->portedNetworkPrefix = $obj->pnp;
        
        $this->pricePerMessage = $obj->ppm;
        $this->ported = $obj->is_ported;
        if(isset($obj->is_roaming))
            $this->inRoaming = $obj->is_roaming;
    }

    /**
     * 
     * @return type
     */
    function getId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    function getStatus() {
        return HLRResponseState::parse($this->status);
    }

    /**
     * 
     * @return type
     */
    function getDestination() {
        return $this->destination;
    }

    /**
     * 
     * @return type
     */
    function getIMSI() {
        return $this->IMSI;
    }

    /**
     * 
     * @return type
     */
    function getMCC() {
        return $this->MCC;
    }

    /**
     * 
     * @return type
     */
    function getMNC() {
        return $this->MNC;
    }

    /**
     * 
     * @return type
     */
    function getOriginalCountryName() {
        return $this->originalCountryName;
    }

    /**
     * 
     * @return type
     */
    function getOriginalCountryCode() {
        return $this->originalCountryCode;
    }

    /**
     * 
     * @return type
     */
    function getOriginalNetworkName() {
        return $this->originalNetworkName;
    }

    /**
     * 
     * @return type
     */
    function getOriginalNetworkPrefix() {
        return $this->originalNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    function getRoamingCountryName() {
        return $this->roamingCountryName;
    }

    /**
     * 
     * @return type
     */
    function getRoamingCountryPrefix() {
        return $this->roamingCountryPrefix;
    }

    /**
     * 
     * @return type
     */
    function getRoamingNetworkName() {
        return $this->roamingNetworkName;
    }

    /**
     * 
     * @return type
     */
    function getRoamingNetworkPrefix() {
        return $this->roamingNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    function getPortedCountryName() {
        return $this->portedCountryName;
    }

    /**
     * 
     * @return type
     */
    function getPortedCountryPrefix() {
        return $this->portedCountryPrefix;
    }

    /**
     * 
     * @return type
     */
    function getPortedNetworkName() {
        return $this->portedNetworkName;
    }

    /**
     * 
     * @return type
     */
    function getPortedNetworkPrefix() {
        return $this->portedNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    function getPricePerMessage() {
        return $this->pricePerMessage;
    }

    /**
     * 
     * @return type
     */
    function isPorted() {
        if($this->ported == 'true')
            return true;
        return false;
    }

    /**
     * 
     * @return type
     */
    function isInRoaming() {
        if($this->inRoaming == 'true')
            return true;
        return false;
    }
}
