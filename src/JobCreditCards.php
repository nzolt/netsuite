<?php

namespace Nzolt\NetSuite;

class JobCreditCards
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
     * @var string $ccMemo
     */
    protected $ccMemo = null;

    /**
     * @var boolean $ccDefault
     */
    protected $ccDefault = null;

    /**
     * @var string $debitCardIssueNo
     */
    protected $debitCardIssueNo = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    
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
     * @return \Nzolt\NetSuite\JobCreditCards
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
     * @return \Nzolt\NetSuite\JobCreditCards
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
     * @return \Nzolt\NetSuite\JobCreditCards
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
     * @return \Nzolt\NetSuite\JobCreditCards
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
     * @return \Nzolt\NetSuite\JobCreditCards
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
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
     * @return \Nzolt\NetSuite\JobCreditCards
     */
    public function setCcMemo($ccMemo)
    {
      $this->ccMemo = $ccMemo;
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
     * @return \Nzolt\NetSuite\JobCreditCards
     */
    public function setCcDefault($ccDefault)
    {
      $this->ccDefault = $ccDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitCardIssueNo()
    {
      return $this->debitCardIssueNo;
    }

    /**
     * @param string $debitCardIssueNo
     * @return \Nzolt\NetSuite\JobCreditCards
     */
    public function setDebitCardIssueNo($debitCardIssueNo)
    {
      $this->debitCardIssueNo = $debitCardIssueNo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->validFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->validFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $validFrom
     * @return \Nzolt\NetSuite\JobCreditCards
     */
    public function setValidFrom(\DateTime $validFrom = null)
    {
      if ($validFrom == null) {
       $this->validFrom = null;
      } else {
        $this->validFrom = $validFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

}
