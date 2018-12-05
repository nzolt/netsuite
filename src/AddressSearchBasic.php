<?php

namespace Nzolt\NetSuite;

class AddressSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $address
     */
    protected $address = null;

    /**
     * @var SearchStringField $address1
     */
    protected $address1 = null;

    /**
     * @var SearchStringField $address2
     */
    protected $address2 = null;

    /**
     * @var SearchStringField $address3
     */
    protected $address3 = null;

    /**
     * @var SearchStringField $addressee
     */
    protected $addressee = null;

    /**
     * @var SearchStringField $attention
     */
    protected $attention = null;

    /**
     * @var SearchStringField $city
     */
    protected $city = null;

    /**
     * @var SearchEnumMultiSelectField $country
     */
    protected $country = null;

    /**
     * @var SearchStringField $countryCode
     */
    protected $countryCode = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $override
     */
    protected $override = null;

    /**
     * @var SearchStringField $phone
     */
    protected $phone = null;

    /**
     * @var SearchStringField $state
     */
    protected $state = null;

    /**
     * @var SearchStringField $zip
     */
    protected $zip = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchStringField $address
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param SearchStringField $address1
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAddress1($address1)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param SearchStringField $address2
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAddress2($address2)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress3()
    {
      return $this->address3;
    }

    /**
     * @param SearchStringField $address3
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAddress3($address3)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressee()
    {
      return $this->addressee;
    }

    /**
     * @param SearchStringField $addressee
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAddressee($addressee)
    {
      $this->addressee = $addressee;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAttention()
    {
      return $this->attention;
    }

    /**
     * @param SearchStringField $attention
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setAttention($attention)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchStringField $city
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param SearchStringField $countryCode
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOverride()
    {
      return $this->override;
    }

    /**
     * @param SearchBooleanField $override
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setOverride($override)
    {
      $this->override = $override;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchStringField $phone
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchStringField $state
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchStringField $zip
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\AddressSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
