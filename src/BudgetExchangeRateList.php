<?php

namespace Nzolt\NetSuite;

class BudgetExchangeRateList
{

    /**
     * @var BudgetExchangeRate[] $budgetExchangeRate
     */
    protected $budgetExchangeRate = null;

    /**
     * @param BudgetExchangeRate[] $budgetExchangeRate
     */
    public function __construct(array $budgetExchangeRate)
    {
      $this->budgetExchangeRate = $budgetExchangeRate;
    }

    /**
     * @return BudgetExchangeRate[]
     */
    public function getBudgetExchangeRate()
    {
      return $this->budgetExchangeRate;
    }

    /**
     * @param BudgetExchangeRate[] $budgetExchangeRate
     * @return \Nzolt\NetSuite\BudgetExchangeRateList
     */
    public function setBudgetExchangeRate(array $budgetExchangeRate)
    {
      $this->budgetExchangeRate = $budgetExchangeRate;
      return $this;
    }

}
