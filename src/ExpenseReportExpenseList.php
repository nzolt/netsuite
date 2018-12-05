<?php

namespace Nzolt\NetSuite;

class ExpenseReportExpenseList
{

    /**
     * @var ExpenseReportExpense[] $expense
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
     * @return ExpenseReportExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param ExpenseReportExpense[] $expense
     * @return \Nzolt\NetSuite\ExpenseReportExpenseList
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
     * @return \Nzolt\NetSuite\ExpenseReportExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
