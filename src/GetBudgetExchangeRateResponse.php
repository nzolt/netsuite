<?php

namespace Nzolt\NetSuite;

class GetBudgetExchangeRateResponse
{

    /**
     * @var GetBudgetExchangeRateResult $getBudgetExchangeRateResult
     */
    protected $getBudgetExchangeRateResult = null;

    /**
     * @param GetBudgetExchangeRateResult $getBudgetExchangeRateResult
     */
    public function __construct($getBudgetExchangeRateResult)
    {
      $this->getBudgetExchangeRateResult = $getBudgetExchangeRateResult;
    }

    /**
     * @return GetBudgetExchangeRateResult
     */
    public function getGetBudgetExchangeRateResult()
    {
      return $this->getBudgetExchangeRateResult;
    }

    /**
     * @param GetBudgetExchangeRateResult $getBudgetExchangeRateResult
     * @return \Nzolt\NetSuite\GetBudgetExchangeRateResponse
     */
    public function setGetBudgetExchangeRateResult($getBudgetExchangeRateResult)
    {
      $this->getBudgetExchangeRateResult = $getBudgetExchangeRateResult;
      return $this;
    }

}
