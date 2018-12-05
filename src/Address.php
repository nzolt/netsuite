<?php

namespace Nzolt\NetSuite;

class Address extends Record
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var Country $country
     */
    protected $country = null;

    /**
     * @var string $attention
     */
    protected $attention = null;

    /**
     * @var string $addressee
     */
    protected $addressee = null;

    /**
     * @var string $addrPhone
     */
    protected $addrPhone = null;

    /**
     * @var string $addr1
     */
    protected $addr1 = null;

    /**
     * @var string $addr2
     */
    protected $addr2 = null;

    /**
     * @var string $addr3
     */
    protected $addr3 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var string $addrText
     */
    protected $addrText = null;

    /**
     * @var boolean $override
     */
    protected $override = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Address
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param Country $country
     * @return \Nzolt\NetSuite\Address
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttention()
    {
      return $this->attention;
    }

    /**
     * @param string $attention
     * @return \Nzolt\NetSuite\Address
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressee()
    {
      return $this->addressee;
    }

    /**
     * @param string $addressee
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddressee($addressee)
    {
      $this->addressee = $addressee;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddrPhone()
    {
      return $this->addrPhone;
    }

    /**
     * @param string $addrPhone
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddrPhone($addrPhone)
    {
      $this->addrPhone = $addrPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddr1()
    {
      return $this->addr1;
    }

    /**
     * @param string $addr1
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddr1($addr1)
    {
      $this->addr1 = $addr1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddr2()
    {
      return $this->addr2;
    }

    /**
     * @param string $addr2
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddr2($addr2)
    {
      $this->addr2 = $addr2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddr3()
    {
      return $this->addr3;
    }

    /**
     * @param string $addr3
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddr3($addr3)
    {
      $this->addr3 = $addr3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Nzolt\NetSuite\Address
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \Nzolt\NetSuite\Address
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param string $zip
     * @return \Nzolt\NetSuite\Address
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddrText()
    {
      return $this->addrText;
    }

    /**
     * @param string $addrText
     * @return \Nzolt\NetSuite\Address
     */
    public function setAddrText($addrText)
    {
      $this->addrText = $addrText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverride()
    {
      return $this->override;
    }

    /**
     * @param boolean $override
     * @return \Nzolt\NetSuite\Address
     */
    public function setOverride($override)
    {
      $this->override = $override;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Address
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
