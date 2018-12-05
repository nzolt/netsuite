<?php

namespace Nzolt\NetSuite;

class ItemReceiptExpenseList
{

    /**
     * @var ItemReceiptExpense[] $expense
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
     * @return ItemReceiptExpense[]
     */
    public function getExpense()
    {
      return $this->expense;
    }

    /**
     * @param ItemReceiptExpense[] $expense
     * @return \Nzolt\NetSuite\ItemReceiptExpenseList
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
     * @return \Nzolt\NetSuite\ItemReceiptExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
