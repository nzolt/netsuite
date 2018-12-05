<?php

namespace Nzolt\NetSuite;

class DepositPayment
{

    /**
     * @var boolean $deposit
     */
    protected $deposit = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var \DateTime $docDate
     */
    protected $docDate = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $docNumber
     */
    protected $docNumber = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $refNum
     */
    protected $refNum = null;

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $transactionAmount
     */
    protected $transactionAmount = null;

    /**
     * @var float $paymentAmount
     */
    protected $paymentAmount = null;

    /**
     * @var int $lineId
     */
    protected $lineId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDeposit()
    {
      return $this->deposit;
    }

    /**
     * @param boolean $deposit
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setDeposit($deposit)
    {
      $this->deposit = $deposit;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocDate()
    {
      if ($this->docDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->docDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $docDate
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setDocDate(\DateTime $docDate = null)
    {
      if ($docDate == null) {
       $this->docDate = null;
      } else {
        $this->docDate = $docDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocNumber()
    {
      return $this->docNumber;
    }

    /**
     * @param string $docNumber
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setDocNumber($docNumber)
    {
      $this->docNumber = $docNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param RecordRef $paymentMethod
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
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
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setRefNum($refNum)
    {
      $this->refNum = $refNum;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmount()
    {
      return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setTransactionAmount($transactionAmount)
    {
      $this->transactionAmount = $transactionAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
      return $this->paymentAmount;
    }

    /**
     * @param float $paymentAmount
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setPaymentAmount($paymentAmount)
    {
      $this->paymentAmount = $paymentAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineId()
    {
      return $this->lineId;
    }

    /**
     * @param int $lineId
     * @return \Nzolt\NetSuite\DepositPayment
     */
    public function setLineId($lineId)
    {
      $this->lineId = $lineId;
      return $this;
    }

}
