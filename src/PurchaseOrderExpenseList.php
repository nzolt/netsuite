<?php

namespace Nzolt\NetSuite;

class PurchaseOrderExpenseList
{

    /**
     * @var PurchaseOrderExpense[] $expense
     */
    protected $expense = null;

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
     * @return PurchaseOrderExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param PurchaseOrderExpense[] $expense
     * @return \Nzolt\NetSuite\PurchaseOrderExpenseList
     */
    public function setExpense(array $expense = null)
    {
      $this->expense = $expense;
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
     * @return \Nzolt\NetSuite\PurchaseOrderExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
