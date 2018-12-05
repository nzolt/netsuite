<?php

namespace Nzolt\NetSuite;

class PayrollItemSearchRow extends SearchRow
{

    /**
     * @var PayrollItemSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PayrollItemSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PayrollItemSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
