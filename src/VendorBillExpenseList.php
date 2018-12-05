<?php

namespace Nzolt\NetSuite;

class VendorBillExpenseList
{

    /**
     * @var VendorBillExpense[] $expense
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
     * @return VendorBillExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param VendorBillExpense[] $expense
     * @return \Nzolt\NetSuite\VendorBillExpenseList
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
     * @return \Nzolt\NetSuite\VendorBillExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
