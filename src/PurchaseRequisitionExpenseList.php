<?php

namespace Nzolt\NetSuite;

class PurchaseRequisitionExpenseList
{

    /**
     * @var PurchaseRequisitionExpense[] $purchaseRequisitionExpense
     */
    protected $purchaseRequisitionExpense = null;

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
     * @return PurchaseRequisitionExpense[]
     */
    public function getPurchaseRequisitionExpense()
    {
      return $this->purchaseRequisitionExpense;
    }

    /**
     * @param PurchaseRequisitionExpense[] $purchaseRequisitionExpense
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpenseList
     */
    public function setPurchaseRequisitionExpense(array $purchaseRequisitionExpense = null)
    {
      $this->purchaseRequisitionExpense = $purchaseRequisitionExpense;
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
     * @return \Nzolt\NetSuite\PurchaseRequisitionExpenseList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
