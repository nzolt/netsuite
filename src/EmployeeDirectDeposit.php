<?php

namespace Nzolt\NetSuite;

class EmployeeDirectDeposit
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $netAccount
     */
    protected $netAccount = null;

    /**
     * @var boolean $savingsAccount
     */
    protected $savingsAccount = null;

    /**
     * @var boolean $accountPrenoted
     */
    protected $accountPrenoted = null;

    /**
     * @var EmployeeDirectDepositAccountStatus $accountStatus
     */
    protected $accountStatus = null;

    /**
     * @var string $bankName
     */
    protected $bankName = null;

    /**
     * @var string $bankId
     */
    protected $bankId = null;

    /**
     * @var string $bankNumber
     */
    protected $bankNumber = null;

    /**
     * @var string $bankRoutingNumber
     */
    protected $bankRoutingNumber = null;

    /**
     * @var string $bankAccountNumber
     */
    protected $bankAccountNumber = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetAccount()
    {
      return $this->netAccount;
    }

    /**
     * @param boolean $netAccount
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setNetAccount($netAccount)
    {
      $this->netAccount = $netAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSavingsAccount()
    {
      return $this->savingsAccount;
    }

    /**
     * @param boolean $savingsAccount
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setSavingsAccount($savingsAccount)
    {
      $this->savingsAccount = $savingsAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccountPrenoted()
    {
      return $this->accountPrenoted;
    }

    /**
     * @param boolean $accountPrenoted
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setAccountPrenoted($accountPrenoted)
    {
      $this->accountPrenoted = $accountPrenoted;
      return $this;
    }

    /**
     * @return EmployeeDirectDepositAccountStatus
     */
    public function getAccountStatus()
    {
      return $this->accountStatus;
    }

    /**
     * @param EmployeeDirectDepositAccountStatus $accountStatus
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setAccountStatus($accountStatus)
    {
      $this->accountStatus = $accountStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setBankName($bankName)
    {
      $this->bankName = $bankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankId()
    {
      return $this->bankId;
    }

    /**
     * @param string $bankId
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setBankId($bankId)
    {
      $this->bankId = $bankId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankNumber()
    {
      return $this->bankNumber;
    }

    /**
     * @param string $bankNumber
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setBankNumber($bankNumber)
    {
      $this->bankNumber = $bankNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankRoutingNumber()
    {
      return $this->bankRoutingNumber;
    }

    /**
     * @param string $bankRoutingNumber
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setBankRoutingNumber($bankRoutingNumber)
    {
      $this->bankRoutingNumber = $bankRoutingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
      return $this->bankAccountNumber;
    }

    /**
     * @param string $bankAccountNumber
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
      $this->bankAccountNumber = $bankAccountNumber;
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
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param boolean $inactive
     * @return \Nzolt\NetSuite\EmployeeDirectDeposit
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

}
