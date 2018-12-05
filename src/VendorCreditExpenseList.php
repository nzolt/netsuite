<?php

namespace Nzolt\NetSuite;

class VendorCreditExpenseList
{

    /**
     * @var VendorCreditExpense[] $expense
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
     * @return VendorCreditExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param VendorCreditExpense[] $expense
     * @return \Nzolt\NetSuite\VendorCreditExpenseList
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
     * @return \Nzolt\NetSuite\VendorCreditExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
