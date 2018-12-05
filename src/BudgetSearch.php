<?php

namespace Nzolt\NetSuite;

class BudgetSearch extends SearchRecord
{

    /**
     * @var BudgetSearchBasic $basic
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
     * @return BudgetSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param BudgetSearchBasic $basic
     * @return \Nzolt\NetSuite\BudgetSearch
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
     * @return \Nzolt\NetSuite\BudgetSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
