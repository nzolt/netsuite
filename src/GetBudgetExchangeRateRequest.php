<?php

namespace Nzolt\NetSuite;

class GetBudgetExchangeRateRequest
{

    /**
     * @var BudgetExchangeRateFilter $budgetExchangeRateFilter
     */
    protected $budgetExchangeRateFilter = null;

    /**
     * @param BudgetExchangeRateFilter $budgetExchangeRateFilter
     */
    public function __construct($budgetExchangeRateFilter)
    {
      $this->budgetExchangeRateFilter = $budgetExchangeRateFilter;
    }

    /**
     * @return BudgetExchangeRateFilter
     */
    public function getBudgetExchangeRateFilter()
    {
      return $this->budgetExchangeRateFilter;
    }

    /**
     * @param BudgetExchangeRateFilter $budgetExchangeRateFilter
     * @return \Nzolt\NetSuite\GetBudgetExchangeRateRequest
     */
    public function setBudgetExchangeRateFilter($budgetExchangeRateFilter)
    {
      $this->budgetExchangeRateFilter = $budgetExchangeRateFilter;
      return $this;
    }

}
