<?php

namespace Nzolt\NetSuite;

class SubsidiarySearchRow extends SearchRow
{

    /**
     * @var SubsidiarySearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AddressSearchRowBasic $addressJoin
     */
    protected $addressJoin = null;

    /**
     * @var AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin
     */
    protected $defaultAdvanceToApplyAccountJoin = null;

    /**
     * @var AddressSearchRowBasic $returnAddressJoin
     */
    protected $returnAddressJoin = null;

    /**
     * @var AddressSearchRowBasic $shippingAddressJoin
     */
    protected $shippingAddressJoin = null;

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
     * @return SubsidiarySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SubsidiarySearchRowBasic $basic
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
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
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
     */
    public function setAddressJoin($addressJoin)
    {
      $this->addressJoin = $addressJoin;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin()
    {
      return $this->defaultAdvanceToApplyAccountJoin;
    }

    /**
     * @param AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
     */
    public function setDefaultAdvanceToApplyAccountJoin($defaultAdvanceToApplyAccountJoin)
    {
      $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
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
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
     */
    public function setReturnAddressJoin($returnAddressJoin)
    {
      $this->returnAddressJoin = $returnAddressJoin;
      return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin()
    {
      return $this->shippingAddressJoin;
    }

    /**
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
     */
    public function setShippingAddressJoin($shippingAddressJoin)
    {
      $this->shippingAddressJoin = $shippingAddressJoin;
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
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
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
     * @return \Nzolt\NetSuite\SubsidiarySearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
