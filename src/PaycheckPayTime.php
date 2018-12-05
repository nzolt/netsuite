<?php

namespace Nzolt\NetSuite;

class PaycheckPayTime
{

    /**
     * @var boolean $apply
     */
    protected $apply = null;

    /**
     * @var int $line
     */
    protected $line = null;

    /**
     * @var int $payItem
     */
    protected $payItem = null;

    /**
     * @var string $payItemName
     */
    protected $payItemName = null;

    /**
     * @var \DateTime $ddate
     */
    protected $ddate = null;

    /**
     * @var string $custJob
     */
    protected $custJob = null;

    /**
     * @var string $serviceItem
     */
    protected $serviceItem = null;

    /**
     * @var float $count
     */
    protected $count = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

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
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setApply($apply)
    {
      $this->apply = $apply;
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
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param int $payItem
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayItemName()
    {
      return $this->payItemName;
    }

    /**
     * @param string $payItemName
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setPayItemName($payItemName)
    {
      $this->payItemName = $payItemName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDdate()
    {
      if ($this->ddate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ddate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ddate
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setDdate(\DateTime $ddate = null)
    {
      if ($ddate == null) {
       $this->ddate = null;
      } else {
        $this->ddate = $ddate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCustJob()
    {
      return $this->custJob;
    }

    /**
     * @param string $custJob
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setCustJob($custJob)
    {
      $this->custJob = $custJob;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceItem()
    {
      return $this->serviceItem;
    }

    /**
     * @param string $serviceItem
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setServiceItem($serviceItem)
    {
      $this->serviceItem = $serviceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param float $count
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
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
     * @return \Nzolt\NetSuite\PaycheckPayTime
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
