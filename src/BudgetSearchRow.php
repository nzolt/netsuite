<?php

namespace Nzolt\NetSuite;

class BudgetSearchRow extends SearchRow
{

    /**
     * @var BudgetSearchRowBasic $basic
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
     * @return BudgetSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param BudgetSearchRowBasic $basic
     * @return \Nzolt\NetSuite\BudgetSearchRow
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
     * @return \Nzolt\NetSuite\BudgetSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
