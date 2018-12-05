<?php

namespace Nzolt\NetSuite;

class PayrollItemSearch extends SearchRecord
{

    /**
     * @var PayrollItemSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayrollItemSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PayrollItemSearchBasic $basic
     * @return \Nzolt\NetSuite\PayrollItemSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\PayrollItemSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
