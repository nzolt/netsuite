<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeDirectDepositAccountStatus;

/**
 * EmployeeDirectDeposit
 */
class EmployeeDirectDeposit {

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var boolean
     */
    protected $netAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $savingsAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $accountPrenoted;

    /**
     * @access public
     * @var EmployeeDirectDepositAccountStatus
     */
    protected $accountStatus;

    /**
     * @access public
     * @var string
     */
    protected $bankName;

    /**
     * @access public
     * @var string
     */
    protected $bankId;

    /**
     * @access public
     * @var string
     */
    protected $bankNumber;

    /**
     * @access public
     * @var string
     */
    protected $bankRoutingNumber;

    /**
     * @access public
     * @var string
     */
    protected $bankAccountNumber;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var boolean
     */
    protected $inactive;

    static $paramtypesmap = array(
    	"id" => "integer",
    	"netAccount" => "boolean",
    	"savingsAccount" => "boolean",
    	"accountPrenoted" => "boolean",
    	"accountStatus" => "EmployeeDirectDepositAccountStatus",
    	"bankName" => "string",
    	"bankId" => "string",
    	"bankNumber" => "string",
    	"bankRoutingNumber" => "string",
    	"bankAccountNumber" => "string",
    	"amount" => "float",
    	"inactive" => "boolean",
    );

    /**
     * Set id
     *
     * @param integer $id
     * @return EmployeeDirectDeposit
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set netAccount
     *
     * @param boolean $netAccount
     * @return EmployeeDirectDeposit
     */
    public function setNetAccount($netAccount) {
        $this->netAccount = $netAccount;
        return $this;
    }

    /**
     * Get netAccount
     *
     * @return boolean
     */
    public function getNetAccount() {
        return $this->netAccount;
    }


    /**
     * Set savingsAccount
     *
     * @param boolean $savingsAccount
     * @return EmployeeDirectDeposit
     */
    public function setSavingsAccount($savingsAccount) {
        $this->savingsAccount = $savingsAccount;
        return $this;
    }

    /**
     * Get savingsAccount
     *
     * @return boolean
     */
    public function getSavingsAccount() {
        return $this->savingsAccount;
    }


    /**
     * Set accountPrenoted
     *
     * @param boolean $accountPrenoted
     * @return EmployeeDirectDeposit
     */
    public function setAccountPrenoted($accountPrenoted) {
        $this->accountPrenoted = $accountPrenoted;
        return $this;
    }

    /**
     * Get accountPrenoted
     *
     * @return boolean
     */
    public function getAccountPrenoted() {
        return $this->accountPrenoted;
    }


    /**
     * Set accountStatus
     *
     * @param EmployeeDirectDepositAccountStatus $accountStatus
     * @return EmployeeDirectDeposit
     */
    public function setAccountStatus(EmployeeDirectDepositAccountStatus $accountStatus) {
        $this->accountStatus = $accountStatus;
        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return EmployeeDirectDepositAccountStatus
     */
    public function getAccountStatus() {
        return $this->accountStatus;
    }


    /**
     * Set bankName
     *
     * @param string $bankName
     * @return EmployeeDirectDeposit
     */
    public function setBankName($bankName) {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName() {
        return $this->bankName;
    }


    /**
     * Set bankId
     *
     * @param string $bankId
     * @return EmployeeDirectDeposit
     */
    public function setBankId($bankId) {
        $this->bankId = $bankId;
        return $this;
    }

    /**
     * Get bankId
     *
     * @return string
     */
    public function getBankId() {
        return $this->bankId;
    }


    /**
     * Set bankNumber
     *
     * @param string $bankNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankNumber($bankNumber) {
        $this->bankNumber = $bankNumber;
        return $this;
    }

    /**
     * Get bankNumber
     *
     * @return string
     */
    public function getBankNumber() {
        return $this->bankNumber;
    }


    /**
     * Set bankRoutingNumber
     *
     * @param string $bankRoutingNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankRoutingNumber($bankRoutingNumber) {
        $this->bankRoutingNumber = $bankRoutingNumber;
        return $this;
    }

    /**
     * Get bankRoutingNumber
     *
     * @return string
     */
    public function getBankRoutingNumber() {
        return $this->bankRoutingNumber;
    }


    /**
     * Set bankAccountNumber
     *
     * @param string $bankAccountNumber
     * @return EmployeeDirectDeposit
     */
    public function setBankAccountNumber($bankAccountNumber) {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Get bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber() {
        return $this->bankAccountNumber;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return EmployeeDirectDeposit
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return EmployeeDirectDeposit
     */
    public function setInactive($inactive) {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * Get inactive
     *
     * @return boolean
     */
    public function getInactive() {
        return $this->inactive;
    }

}