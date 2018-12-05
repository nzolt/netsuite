<?php

namespace Nzolt\NetSuite;

class CustomerCreditCards
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var \DateTime $ccExpireDate
     */
    protected $ccExpireDate = null;

    /**
     * @var string $ccName
     */
    protected $ccName = null;

    /**
     * @var RecordRef $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var RecordRef $cardState
     */
    protected $cardState = null;

    /**
     * @var \DateTime $stateFrom
     */
    protected $stateFrom = null;

    /**
     * @var string $debitcardIssueNo
     */
    protected $debitcardIssueNo = null;

    /**
     * @var string $ccMemo
     */
    protected $ccMemo = null;

    /**
     * @var \DateTime $validfrom
     */
    protected $validfrom = null;

    /**
     * @var boolean $ccDefault
     */
    protected $ccDefault = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param string $ccNumber
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCcExpireDate()
    {
      if ($this->ccExpireDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ccExpireDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ccExpireDate
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCcExpireDate(\DateTime $ccExpireDate = null)
    {
      if ($ccExpireDate == null) {
       $this->ccExpireDate = null;
      } else {
        $this->ccExpireDate = $ccExpireDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCcName()
    {
      return $this->ccName;
    }

    /**
     * @param string $ccName
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCcName($ccName)
    {
      $this->ccName = $ccName;
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
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCardState()
    {
      return $this->cardState;
    }

    /**
     * @param RecordRef $cardState
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCardState($cardState)
    {
      $this->cardState = $cardState;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStateFrom()
    {
      if ($this->stateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->stateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $stateFrom
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setStateFrom(\DateTime $stateFrom = null)
    {
      if ($stateFrom == null) {
       $this->stateFrom = null;
      } else {
        $this->stateFrom = $stateFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitcardIssueNo()
    {
      return $this->debitcardIssueNo;
    }

    /**
     * @param string $debitcardIssueNo
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setDebitcardIssueNo($debitcardIssueNo)
    {
      $this->debitcardIssueNo = $debitcardIssueNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCcMemo()
    {
      return $this->ccMemo;
    }

    /**
     * @param string $ccMemo
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCcMemo($ccMemo)
    {
      $this->ccMemo = $ccMemo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidfrom()
    {
      if ($this->validfrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validfrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validfrom
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setValidfrom(\DateTime $validfrom = null)
    {
      if ($validfrom == null) {
       $this->validfrom = null;
      } else {
        $this->validfrom = $validfrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCcDefault()
    {
      return $this->ccDefault;
    }

    /**
     * @param boolean $ccDefault
     * @return \Nzolt\NetSuite\CustomerCreditCards
     */
    public function setCcDefault($ccDefault)
    {
      $this->ccDefault = $ccDefault;
      return $this;
    }

}
