<?php

namespace Nzolt\NetSuite;

class GetBudgetExchangeRateResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var BudgetExchangeRateList $budgetExchangeRateList
     */
    protected $budgetExchangeRateList = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\GetBudgetExchangeRateResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return BudgetExchangeRateList
     */
    public function getBudgetExchangeRateList()
    {
      return $this->budgetExchangeRateList;
    }

    /**
     * @param BudgetExchangeRateList $budgetExchangeRateList
     * @return \Nzolt\NetSuite\GetBudgetExchangeRateResult
     */
    public function setBudgetExchangeRateList($budgetExchangeRateList)
    {
      $this->budgetExchangeRateList = $budgetExchangeRateList;
      return $this;
    }

}
