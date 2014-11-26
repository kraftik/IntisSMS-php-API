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

    public function __construct($obj) {
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
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    public function getStatus() {
        return HLRResponseState::parse($this->status);
    }

    /**
     * 
     * @return type
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     * 
     * @return type
     */
    public function getIMSI() {
        return $this->IMSI;
    }

    /**
     * 
     * @return type
     */
    public function getMCC() {
        return $this->MCC;
    }

    /**
     * 
     * @return type
     */
    public function getMNC() {
        return $this->MNC;
    }

    /**
     * 
     * @return type
     */
    public function getOriginalCountryName() {
        return $this->originalCountryName;
    }

    /**
     * 
     * @return type
     */
    public function getOriginalCountryCode() {
        return $this->originalCountryCode;
    }

    /**
     * 
     * @return type
     */
    public function getOriginalNetworkName() {
        return $this->originalNetworkName;
    }

    /**
     * 
     * @return type
     */
    public function getOriginalNetworkPrefix() {
        return $this->originalNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    public function getRoamingCountryName() {
        return $this->roamingCountryName;
    }

    /**
     * 
     * @return type
     */
    public function getRoamingCountryPrefix() {
        return $this->roamingCountryPrefix;
    }

    /**
     * 
     * @return type
     */
    public function getRoamingNetworkName() {
        return $this->roamingNetworkName;
    }

    /**
     * 
     * @return type
     */
    public function getRoamingNetworkPrefix() {
        return $this->roamingNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    public function getPortedCountryName() {
        return $this->portedCountryName;
    }

    /**
     * 
     * @return type
     */
    public function getPortedCountryPrefix() {
        return $this->portedCountryPrefix;
    }

    /**
     * 
     * @return type
     */
    public function getPortedNetworkName() {
        return $this->portedNetworkName;
    }

    /**
     * 
     * @return type
     */
    public function getPortedNetworkPrefix() {
        return $this->portedNetworkPrefix;
    }

    /**
     * 
     * @return type
     */
    public function getPricePerMessage() {
        return $this->pricePerMessage;
    }

    /**
     * 
     * @return type
     */
    public function isPorted() {
        if($this->ported == 'true')
            return true;
        return false;
    }

    /**
     * 
     * @return type
     */
    public function isInRoaming() {
        if($this->inRoaming == 'true')
            return true;
        return false;
    }
}
