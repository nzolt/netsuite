<?php

namespace Nzolt\NetSuite;

class VendorReturnAuthorizationExpenseList
{

    /**
     * @var VendorReturnAuthorizationExpense[] $expense
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
     * @return VendorReturnAuthorizationExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param VendorReturnAuthorizationExpense[] $expense
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpenseList
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
     * @return \Nzolt\NetSuite\VendorReturnAuthorizationExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
