<?php

namespace Nzolt\NetSuite;

class CreditMemoApply
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
     * @var \DateTime $applyDate
     */
    protected $applyDate = null;

    /**
     * @var string $job
     */
    protected $job = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $refNum
     */
    protected $refNum = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var float $due
     */
    protected $due = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var int $line
     */
    protected $line = null;

    
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
     * @return \Nzolt\NetSuite\CreditMemoApply
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
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setDoc($doc)
    {
      $this->doc = $doc;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getApplyDate()
    {
      if ($this->applyDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->applyDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $applyDate
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setApplyDate(\DateTime $applyDate = null)
    {
      if ($applyDate == null) {
       $this->applyDate = null;
      } else {
        $this->applyDate = $applyDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param string $job
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\CreditMemoApply
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
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return float
     */
    public function getDue()
    {
      return $this->due;
    }

    /**
     * @param float $due
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setDue($due)
    {
      $this->due = $due;
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
     * @return \Nzolt\NetSuite\CreditMemoApply
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
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
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
     * @return \Nzolt\NetSuite\CreditMemoApply
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

}
