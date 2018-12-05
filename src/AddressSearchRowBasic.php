<?php

namespace Nzolt\NetSuite;

class AddressSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $address
     */
    protected $address = null;

    /**
     * @var SearchColumnStringField[] $address1
     */
    protected $address1 = null;

    /**
     * @var SearchColumnStringField[] $address2
     */
    protected $address2 = null;

    /**
     * @var SearchColumnStringField[] $address3
     */
    protected $address3 = null;

    /**
     * @var SearchColumnStringField[] $addressee
     */
    protected $addressee = null;

    /**
     * @var SearchColumnStringField[] $attention
     */
    protected $attention = null;

    /**
     * @var SearchColumnStringField[] $city
     */
    protected $city = null;

    /**
     * @var SearchColumnEnumSelectField[] $country
     */
    protected $country = null;

    /**
     * @var SearchColumnStringField[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $override
     */
    protected $override = null;

    /**
     * @var SearchColumnStringField[] $phone
     */
    protected $phone = null;

    /**
     * @var SearchColumnStringField[] $state
     */
    protected $state = null;

    /**
     * @var SearchColumnStringField[] $zip
     */
    protected $zip = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchColumnStringField[] $address
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAddress(array $address = null)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param SearchColumnStringField[] $address1
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAddress1(array $address1 = null)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param SearchColumnStringField[] $address2
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAddress2(array $address2 = null)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress3()
    {
      return $this->address3;
    }

    /**
     * @param SearchColumnStringField[] $address3
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAddress3(array $address3 = null)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressee()
    {
      return $this->addressee;
    }

    /**
     * @param SearchColumnStringField[] $addressee
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAddressee(array $addressee = null)
    {
      $this->addressee = $addressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAttention()
    {
      return $this->attention;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setAttention(array $attention = null)
    {
      $this->attention = $attention;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setCity(array $city = null)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setCountry(array $country = null)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param SearchColumnStringField[] $countryCode
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOverride()
    {
      return $this->override;
    }

    /**
     * @param SearchColumnBooleanField[] $override
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setOverride(array $override = null)
    {
      $this->override = $override;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setPhone(array $phone = null)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param SearchColumnStringField[] $state
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setState(array $state = null)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip()
    {
      return $this->zip;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setZip(array $zip = null)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\AddressSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
