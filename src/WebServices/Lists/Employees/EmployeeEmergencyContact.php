<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeEmergencyContact
 */
class EmployeeEmergencyContact {

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var string
     */
    protected $contact;

    /**
     * @access public
     * @var string
     */
    protected $relationship;

    /**
     * @access public
     * @var string
     */
    protected $address;

    /**
     * @access public
     * @var string
     */
    protected $phone;

    static $paramtypesmap = array(
    	"id" => "integer",
    	"contact" => "string",
    	"relationship" => "string",
    	"address" => "string",
    	"phone" => "string",
    );

    /**
     * Set id
     *
     * @param integer $id
     * @return EmployeeEmergencyContact
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set contact
     *
     * @param string $contact
     * @return EmployeeEmergencyContact
     */
    public function setContact($contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact() {
        return $this->contact;
    }


    /**
     * Set relationship
     *
     * @param string $relationship
     * @return EmployeeEmergencyContact
     */
    public function setRelationship($relationship) {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Get relationship
     *
     * @return string
     */
    public function getRelationship() {
        return $this->relationship;
    }


    /**
     * Set address
     *
     * @param string $address
     * @return EmployeeEmergencyContact
     */
    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * @return EmployeeEmergencyContact
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }

}