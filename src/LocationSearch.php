<?php

namespace Nzolt\NetSuite;

class LocationSearch extends SearchRecord
{

    /**
     * @var LocationSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AddressSearchBasic $addressJoin
     */
    protected $addressJoin = null;

    /**
     * @var AddressSearchBasic $returnAddressJoin
     */
    protected $returnAddressJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocationSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param LocationSearchBasic $basic
     * @return \Nzolt\NetSuite\LocationSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getAddressJoin()
    {
      return $this->addressJoin;
    }

    /**
     * @param AddressSearchBasic $addressJoin
     * @return \Nzolt\NetSuite\LocationSearch
     */
    public function setAddressJoin($addressJoin)
    {
      $this->addressJoin = $addressJoin;
      return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getReturnAddressJoin()
    {
      return $this->returnAddressJoin;
    }

    /**
     * @param AddressSearchBasic $returnAddressJoin
     * @return \Nzolt\NetSuite\LocationSearch
     */
    public function setReturnAddressJoin($returnAddressJoin)
    {
      $this->returnAddressJoin = $returnAddressJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\LocationSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\LocationSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
