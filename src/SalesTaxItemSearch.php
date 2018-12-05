<?php

namespace Nzolt\NetSuite;

class SalesTaxItemSearch extends SearchRecord
{

    /**
     * @var SalesTaxItemSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var TaxTypeSearchBasic $taxTypeJoin
     */
    protected $taxTypeJoin = null;

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
     * @return SalesTaxItemSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SalesTaxItemSearchBasic $basic
     * @return \Nzolt\NetSuite\SalesTaxItemSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TaxTypeSearchBasic
     */
    public function getTaxTypeJoin()
    {
      return $this->taxTypeJoin;
    }

    /**
     * @param TaxTypeSearchBasic $taxTypeJoin
     * @return \Nzolt\NetSuite\SalesTaxItemSearch
     */
    public function setTaxTypeJoin($taxTypeJoin)
    {
      $this->taxTypeJoin = $taxTypeJoin;
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearch
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
