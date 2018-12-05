<?php

namespace Nzolt\NetSuite;

class EmployeeEmergencyContact
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $contact
     */
    protected $contact = null;

    /**
     * @var string $relationship
     */
    protected $relationship = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Nzolt\NetSuite\EmployeeEmergencyContact
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param string $contact
     * @return \Nzolt\NetSuite\EmployeeEmergencyContact
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param string $relationship
     * @return \Nzolt\NetSuite\EmployeeEmergencyContact
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \Nzolt\NetSuite\EmployeeEmergencyContact
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Nzolt\NetSuite\EmployeeEmergencyContact
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

}
