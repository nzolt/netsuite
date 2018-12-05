<?php

namespace Nzolt\NetSuite;

class CustomerRefundDeposit
{

    /**
     * @var boolean $apply
     */
    protected $apply = null;

    /**
     * @var int $doc
     */
    protected $doc = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var \DateTime $depositDate
     */
    protected $depositDate = null;

    /**
     * @var string $refNum
     */
    protected $refNum = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $remaining
     */
    protected $remaining = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getApply()
    {
      return $this->apply;
    }

    /**
     * @param boolean $apply
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setApply($apply)
    {
      $this->apply = $apply;
      return $this;
    }

    /**
     * @return int
     */
    public function getDoc()
    {
      return $this->doc;
    }

    /**
     * @param int $doc
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setDoc($doc)
    {
      $this->doc = $doc;
      return $this;
    }

    /**
     * @return int
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param int $line
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepositDate()
    {
      if ($this->depositDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->depositDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $depositDate
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setDepositDate(\DateTime $depositDate = null)
    {
      if ($depositDate == null) {
       $this->depositDate = null;
      } else {
        $this->depositDate = $depositDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRefNum()
    {
      return $this->refNum;
    }

    /**
     * @param string $refNum
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setRefNum($refNum)
    {
      $this->refNum = $refNum;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemaining()
    {
      return $this->remaining;
    }

    /**
     * @param float $remaining
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setRemaining($remaining)
    {
      $this->remaining = $remaining;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
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
     * @return \Nzolt\NetSuite\CustomerRefundDeposit
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
