<?php

namespace Nzolt\NetSuite;

class PaycheckPayExp
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
     * @var int $origDoc
     */
    protected $origDoc = null;

    /**
     * @var string $transaction
     */
    protected $transaction = null;

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
     * @return \Nzolt\NetSuite\PaycheckPayExp
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
     * @return \Nzolt\NetSuite\PaycheckPayExp
     */
    public function setLine($line)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrigDoc()
    {
      return $this->origDoc;
    }

    /**
     * @param int $origDoc
     * @return \Nzolt\NetSuite\PaycheckPayExp
     */
    public function setOrigDoc($origDoc)
    {
      $this->origDoc = $origDoc;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param string $transaction
     * @return \Nzolt\NetSuite\PaycheckPayExp
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
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
     * @return \Nzolt\NetSuite\PaycheckPayExp
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
