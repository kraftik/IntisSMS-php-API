<?php
namespace Intis\API\Entity;

class PhoneBaseItem{
    private $phone;
    private $firstName;
    private $middleName;
    private $lastName;
    private $birthDay;
    private $gender;
    private $area;
    private $network;
    private $note1;
    private $note2;
    
    public function __construct($phone, $obj) {
        $this->phone = $phone;
        $this->firstName = $obj->name;
        $this->middleName = $obj->middle_name;
        $this->lastName = $obj->last_name;
        $this->birthDay = $obj->date_birth;
        $this->gender = $obj->male;
        $this->area = $obj->region;
        $this->network = $obj->operator;
        $this->note1 = $obj->note1;
        $this->note2 = $obj->note2;
    }
    
    /**
     * 
     * @return type
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * 
     * @return type
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * 
     * @return type
     */
    public function getMiddleName() {
        return $this->middleName;
    }

    /**
     * 
     * @return type
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * 
     * @return type
     */
    public function getBirthDay() {
        return $this->birthDay;
    }

    /**
     * 
     * @return type
     */
    public function getGender() {
        return Gender::parse($this->gender);
    }

    /**
     * 
     * @return type
     */
    public function getArea() {
        return $this->area;
    }

    /**
     * 
     * @return type
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * 
     * @return type
     */
    public function getNote1() {
        return $this->note1;
    }

    /**
     * 
     * @return type
     */
    public function getNote2() {
        return $this->note2;
    }
}
