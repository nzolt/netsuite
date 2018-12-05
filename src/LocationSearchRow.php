<?php

namespace Nzolt\NetSuite;

class LocationSearchRow extends SearchRow
{

    /**
     * @var LocationSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AddressSearchRowBasic $addressJoin
     */
    protected $addressJoin = null;

    /**
     * @var AddressSearchRowBasic $returnAddressJoin
     */
    protected $returnAddressJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param LocationSearchRowBasic $basic
     * @return \Nzolt\NetSuite\LocationSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getAddressJoin()
    {
      return $this->addressJoin;
    }

    /**
     * @param AddressSearchRowBasic $addressJoin
     * @return \Nzolt\NetSuite\LocationSearchRow
     */
    public function setAddressJoin($addressJoin)
    {
      $this->addressJoin = $addressJoin;
      return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getReturnAddressJoin()
    {
      return $this->returnAddressJoin;
    }

    /**
     * @param AddressSearchRowBasic $returnAddressJoin
     * @return \Nzolt\NetSuite\LocationSearchRow
     */
    public function setReturnAddressJoin($returnAddressJoin)
    {
      $this->returnAddressJoin = $returnAddressJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\LocationSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\LocationSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
