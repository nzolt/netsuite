<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AccountType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ConsolidatedRate;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Account
 */
class Account extends Record {

    /**
     * @access public
     * @var AccountType
     */
    protected $acctType;

    /**
     * @access public
     * @var RecordRef
     */
    public $unitsType;

    /**
     * @access public
     * @var RecordRef
     */
    public $unit;

    /**
     * @access public
     * @var string
     */
    protected $acctNumber;

    /**
     * @access public
     * @var string
     */
    protected $acctName;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var string
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var ConsolidatedRate
     */
    protected $generalRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var ConsolidatedRate
     */
    protected $cashFlowRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $billableExpensesAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferralAcct;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var integer
     */
    protected $curDocNum;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var boolean
     */
    protected $inventory;

    /**
     * @access public
     * @var boolean
     */
    protected $eliminate;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var RecordRef
     */
    public $category1099misc;

    /**
     * @access public
     * @var float
     */
    protected $openingBalance;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var boolean
     */
    protected $revalue;

    /**
     * @access public
     * @var AccountTranslationList
     */
    protected $translationsList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"acctType" => "AccountType",
    	"unitsType" => "RecordRef",
    	"unit" => "RecordRef",
    	"acctNumber" => "string",
    	"acctName" => "string",
    	"includeChildren" => "boolean",
    	"currency" => "RecordRef",
    	"exchangeRate" => "string",
    	"generalRate" => "ConsolidatedRate",
    	"parent" => "RecordRef",
    	"cashFlowRate" => "ConsolidatedRate",
    	"billableExpensesAcct" => "RecordRef",
    	"deferralAcct" => "RecordRef",
    	"description" => "string",
    	"curDocNum" => "integer",
    	"isInactive" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"inventory" => "boolean",
    	"eliminate" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"category1099misc" => "RecordRef",
    	"openingBalance" => "float",
    	"tranDate" => "dateTime",
    	"revalue" => "boolean",
    	"translationsList" => "AccountTranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set acctType
     *
     * @param AccountType $acctType
     * @return Account
     */
    public function setAcctType(AccountType $acctType) {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * Get acctType
     *
     * @return AccountType
     */
    public function getAcctType() {
        return $this->acctType;
    }


    /**
     * Set acctNumber
     *
     * @param string $acctNumber
     * @return Account
     */
    public function setAcctNumber($acctNumber) {
        $this->acctNumber = $acctNumber;
        return $this;
    }

    /**
     * Get acctNumber
     *
     * @return string
     */
    public function getAcctNumber() {
        return $this->acctNumber;
    }


    /**
     * Set acctName
     *
     * @param string $acctName
     * @return Account
     */
    public function setAcctName($acctName) {
        $this->acctName = $acctName;
        return $this;
    }

    /**
     * Get acctName
     *
     * @return string
     */
    public function getAcctName() {
        return $this->acctName;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return Account
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set exchangeRate
     *
     * @param string $exchangeRate
     * @return Account
     */
    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return string
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set generalRate
     *
     * @param ConsolidatedRate $generalRate
     * @return Account
     */
    public function setGeneralRate(ConsolidatedRate $generalRate) {
        $this->generalRate = $generalRate;
        return $this;
    }

    /**
     * Get generalRate
     *
     * @return ConsolidatedRate
     */
    public function getGeneralRate() {
        return $this->generalRate;
    }


    /**
     * Set cashFlowRate
     *
     * @param ConsolidatedRate $cashFlowRate
     * @return Account
     */
    public function setCashFlowRate(ConsolidatedRate $cashFlowRate) {
        $this->cashFlowRate = $cashFlowRate;
        return $this;
    }

    /**
     * Get cashFlowRate
     *
     * @return ConsolidatedRate
     */
    public function getCashFlowRate() {
        return $this->cashFlowRate;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Account
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set curDocNum
     *
     * @param integer $curDocNum
     * @return Account
     */
    public function setCurDocNum($curDocNum) {
        $this->curDocNum = $curDocNum;
        return $this;
    }

    /**
     * Get curDocNum
     *
     * @return integer
     */
    public function getCurDocNum() {
        return $this->curDocNum;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Account
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set inventory
     *
     * @param boolean $inventory
     * @return Account
     */
    public function setInventory($inventory) {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * Get inventory
     *
     * @return boolean
     */
    public function getInventory() {
        return $this->inventory;
    }


    /**
     * Set eliminate
     *
     * @param boolean $eliminate
     * @return Account
     */
    public function setEliminate($eliminate) {
        $this->eliminate = $eliminate;
        return $this;
    }

    /**
     * Get eliminate
     *
     * @return boolean
     */
    public function getEliminate() {
        return $this->eliminate;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return Account
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set openingBalance
     *
     * @param float $openingBalance
     * @return Account
     */
    public function setOpeningBalance($openingBalance) {
        $this->openingBalance = $openingBalance;
        return $this;
    }

    /**
     * Get openingBalance
     *
     * @return float
     */
    public function getOpeningBalance() {
        return $this->openingBalance;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return Account
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set revalue
     *
     * @param boolean $revalue
     * @return Account
     */
    public function setRevalue($revalue) {
        $this->revalue = $revalue;
        return $this;
    }

    /**
     * Get revalue
     *
     * @return boolean
     */
    public function getRevalue() {
        return $this->revalue;
    }


    /**
     * Set translationsList
     *
     * @param AccountTranslationList $translationsList
     * @return Account
     */
    public function setTranslationsList(AccountTranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return AccountTranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Account
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Account
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Account
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}