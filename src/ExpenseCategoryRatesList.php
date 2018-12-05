<?php

namespace Nzolt\NetSuite;

class ExpenseCategoryRatesList
{

    /**
     * @var ExpenseCategoryRates[] $expenseCategoryRates
     */
    protected $expenseCategoryRates = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return ExpenseCategoryRates[]
     */
    public function getExpenseCategoryRates()
    {
      return $this->expenseCategoryRates;
    }

    /**
     * @param ExpenseCategoryRates[] $expenseCategoryRates
     * @return \Nzolt\NetSuite\ExpenseCategoryRatesList
     */
    public function setExpenseCategoryRates(array $expenseCategoryRates = null)
    {
      $this->expenseCategoryRates = $expenseCategoryRates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\ExpenseCategoryRatesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
