<?php

namespace Nzolt\NetSuite;

class SubsidiarySearch extends SearchRecord
{

    /**
     * @var SubsidiarySearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AddressSearchBasic $addressJoin
     */
    protected $addressJoin = null;

    /**
     * @var AccountSearchBasic $defaultAdvanceToApplyAccountJoin
     */
    protected $defaultAdvanceToApplyAccountJoin = null;

    /**
     * @var AddressSearchBasic $returnAddressJoin
     */
    protected $returnAddressJoin = null;

    /**
     * @var AddressSearchBasic $shippingAddressJoin
     */
    protected $shippingAddressJoin = null;

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
     * @return SubsidiarySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SubsidiarySearchBasic $basic
     * @return \Nzolt\NetSuite\SubsidiarySearch
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
     * @return \Nzolt\NetSuite\SubsidiarySearch
     */
    public function setAddressJoin($addressJoin)
    {
      $this->addressJoin = $addressJoin;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin()
    {
      return $this->defaultAdvanceToApplyAccountJoin;
    }

    /**
     * @param AccountSearchBasic $defaultAdvanceToApplyAccountJoin
     * @return \Nzolt\NetSuite\SubsidiarySearch
     */
    public function setDefaultAdvanceToApplyAccountJoin($defaultAdvanceToApplyAccountJoin)
    {
      $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
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
     * @return \Nzolt\NetSuite\SubsidiarySearch
     */
    public function setReturnAddressJoin($returnAddressJoin)
    {
      $this->returnAddressJoin = $returnAddressJoin;
      return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin()
    {
      return $this->shippingAddressJoin;
    }

    /**
     * @param AddressSearchBasic $shippingAddressJoin
     * @return \Nzolt\NetSuite\SubsidiarySearch
     */
    public function setShippingAddressJoin($shippingAddressJoin)
    {
      $this->shippingAddressJoin = $shippingAddressJoin;
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
     * @return \Nzolt\NetSuite\SubsidiarySearch
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
     * @return \Nzolt\NetSuite\SubsidiarySearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
