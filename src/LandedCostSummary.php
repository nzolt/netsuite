<?php

namespace Nzolt\NetSuite;

class LandedCostSummary
{

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var LandedCostSource $source
     */
    protected $source = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\LandedCostSummary
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Nzolt\NetSuite\LandedCostSummary
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return LandedCostSource
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param LandedCostSource $source
     * @return \Nzolt\NetSuite\LandedCostSummary
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\LandedCostSummary
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
      return $this;
    }

}
