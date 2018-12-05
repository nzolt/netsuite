<?php

namespace Nzolt\NetSuite;

class SalesTaxItemSearchRow extends SearchRow
{

    /**
     * @var SalesTaxItemSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var TaxTypeSearchRowBasic $taxTypeJoin
     */
    protected $taxTypeJoin = null;

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
     * @return SalesTaxItemSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SalesTaxItemSearchRowBasic $basic
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TaxTypeSearchRowBasic
     */
    public function getTaxTypeJoin()
    {
      return $this->taxTypeJoin;
    }

    /**
     * @param TaxTypeSearchRowBasic $taxTypeJoin
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRow
     */
    public function setTaxTypeJoin($taxTypeJoin)
    {
      $this->taxTypeJoin = $taxTypeJoin;
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRow
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
