<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ExpenseCategory
 */
class ExpenseCategory extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $expenseAcct;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $rateRequired;

    /**
     * @access public
     * @var float
     */
    protected $defaultRate;

    /**
     * @access public
     * @var ExpenseCategoryRatesList
     */
    protected $ratesList;

    /**
     * @access public
     * @var TranslationList
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
    	"customForm" => "RecordRef",
    	"name" => "string",
    	"description" => "string",
    	"expenseAcct" => "RecordRef",
    	"isInactive" => "boolean",
    	"rateRequired" => "boolean",
    	"defaultRate" => "float",
    	"ratesList" => "ExpenseCategoryRatesList",
    	"translationsList" => "TranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return ExpenseCategory
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return ExpenseCategory
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ExpenseCategory
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
     * Set rateRequired
     *
     * @param boolean $rateRequired
     * @return ExpenseCategory
     */
    public function setRateRequired($rateRequired) {
        $this->rateRequired = $rateRequired;
        return $this;
    }

    /**
     * Get rateRequired
     *
     * @return boolean
     */
    public function getRateRequired() {
        return $this->rateRequired;
    }


    /**
     * Set defaultRate
     *
     * @param float $defaultRate
     * @return ExpenseCategory
     */
    public function setDefaultRate($defaultRate) {
        $this->defaultRate = $defaultRate;
        return $this;
    }

    /**
     * Get defaultRate
     *
     * @return float
     */
    public function getDefaultRate() {
        return $this->defaultRate;
    }


    /**
     * Set ratesList
     *
     * @param ExpenseCategoryRatesList $ratesList
     * @return ExpenseCategory
     */
    public function setRatesList(ExpenseCategoryRatesList $ratesList) {
        $this->ratesList = $ratesList;
        return $this;
    }

    /**
     * Get ratesList
     *
     * @return ExpenseCategoryRatesList
     */
    public function getRatesList() {
        return $this->ratesList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return ExpenseCategory
     */
    public function setTranslationsList(TranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return TranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ExpenseCategory
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
     * @return ExpenseCategory
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
     * @return ExpenseCategory
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