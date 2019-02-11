<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Financial;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Financial\Types\BudgetBudgetType;

/**
 * Budget
 */
class Budget extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $year;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var BudgetBudgetType
     */
    protected $budgetType;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount1;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount2;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount3;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount4;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount5;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount6;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount7;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount8;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount9;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount10;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount11;

    /**
     * @access public
     * @var float
     */
    protected $periodAmount12;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"year" => "RecordRef",
    	"customer" => "RecordRef",
    	"item" => "RecordRef",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"account" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"category" => "RecordRef",
    	"budgetType" => "BudgetBudgetType",
    	"currency" => "RecordRef",
    	"periodAmount1" => "float",
    	"periodAmount2" => "float",
    	"periodAmount3" => "float",
    	"periodAmount4" => "float",
    	"periodAmount5" => "float",
    	"periodAmount6" => "float",
    	"periodAmount7" => "float",
    	"periodAmount8" => "float",
    	"periodAmount9" => "float",
    	"periodAmount10" => "float",
    	"periodAmount11" => "float",
    	"periodAmount12" => "float",
    	"amount" => "float",
    	"internalId" => "string",
    );

    /**
     * Set budgetType
     *
     * @param BudgetBudgetType $budgetType
     * @return Budget
     */
    public function setBudgetType(BudgetBudgetType $budgetType) {
        $this->budgetType = $budgetType;
        return $this;
    }

    /**
     * Get budgetType
     *
     * @return BudgetBudgetType
     */
    public function getBudgetType() {
        return $this->budgetType;
    }


    /**
     * Set periodAmount1
     *
     * @param float $periodAmount1
     * @return Budget
     */
    public function setPeriodAmount1($periodAmount1) {
        $this->periodAmount1 = $periodAmount1;
        return $this;
    }

    /**
     * Get periodAmount1
     *
     * @return float
     */
    public function getPeriodAmount1() {
        return $this->periodAmount1;
    }


    /**
     * Set periodAmount2
     *
     * @param float $periodAmount2
     * @return Budget
     */
    public function setPeriodAmount2($periodAmount2) {
        $this->periodAmount2 = $periodAmount2;
        return $this;
    }

    /**
     * Get periodAmount2
     *
     * @return float
     */
    public function getPeriodAmount2() {
        return $this->periodAmount2;
    }


    /**
     * Set periodAmount3
     *
     * @param float $periodAmount3
     * @return Budget
     */
    public function setPeriodAmount3($periodAmount3) {
        $this->periodAmount3 = $periodAmount3;
        return $this;
    }

    /**
     * Get periodAmount3
     *
     * @return float
     */
    public function getPeriodAmount3() {
        return $this->periodAmount3;
    }


    /**
     * Set periodAmount4
     *
     * @param float $periodAmount4
     * @return Budget
     */
    public function setPeriodAmount4($periodAmount4) {
        $this->periodAmount4 = $periodAmount4;
        return $this;
    }

    /**
     * Get periodAmount4
     *
     * @return float
     */
    public function getPeriodAmount4() {
        return $this->periodAmount4;
    }


    /**
     * Set periodAmount5
     *
     * @param float $periodAmount5
     * @return Budget
     */
    public function setPeriodAmount5($periodAmount5) {
        $this->periodAmount5 = $periodAmount5;
        return $this;
    }

    /**
     * Get periodAmount5
     *
     * @return float
     */
    public function getPeriodAmount5() {
        return $this->periodAmount5;
    }


    /**
     * Set periodAmount6
     *
     * @param float $periodAmount6
     * @return Budget
     */
    public function setPeriodAmount6($periodAmount6) {
        $this->periodAmount6 = $periodAmount6;
        return $this;
    }

    /**
     * Get periodAmount6
     *
     * @return float
     */
    public function getPeriodAmount6() {
        return $this->periodAmount6;
    }


    /**
     * Set periodAmount7
     *
     * @param float $periodAmount7
     * @return Budget
     */
    public function setPeriodAmount7($periodAmount7) {
        $this->periodAmount7 = $periodAmount7;
        return $this;
    }

    /**
     * Get periodAmount7
     *
     * @return float
     */
    public function getPeriodAmount7() {
        return $this->periodAmount7;
    }


    /**
     * Set periodAmount8
     *
     * @param float $periodAmount8
     * @return Budget
     */
    public function setPeriodAmount8($periodAmount8) {
        $this->periodAmount8 = $periodAmount8;
        return $this;
    }

    /**
     * Get periodAmount8
     *
     * @return float
     */
    public function getPeriodAmount8() {
        return $this->periodAmount8;
    }


    /**
     * Set periodAmount9
     *
     * @param float $periodAmount9
     * @return Budget
     */
    public function setPeriodAmount9($periodAmount9) {
        $this->periodAmount9 = $periodAmount9;
        return $this;
    }

    /**
     * Get periodAmount9
     *
     * @return float
     */
    public function getPeriodAmount9() {
        return $this->periodAmount9;
    }


    /**
     * Set periodAmount10
     *
     * @param float $periodAmount10
     * @return Budget
     */
    public function setPeriodAmount10($periodAmount10) {
        $this->periodAmount10 = $periodAmount10;
        return $this;
    }

    /**
     * Get periodAmount10
     *
     * @return float
     */
    public function getPeriodAmount10() {
        return $this->periodAmount10;
    }


    /**
     * Set periodAmount11
     *
     * @param float $periodAmount11
     * @return Budget
     */
    public function setPeriodAmount11($periodAmount11) {
        $this->periodAmount11 = $periodAmount11;
        return $this;
    }

    /**
     * Get periodAmount11
     *
     * @return float
     */
    public function getPeriodAmount11() {
        return $this->periodAmount11;
    }


    /**
     * Set periodAmount12
     *
     * @param float $periodAmount12
     * @return Budget
     */
    public function setPeriodAmount12($periodAmount12) {
        $this->periodAmount12 = $periodAmount12;
        return $this;
    }

    /**
     * Get periodAmount12
     *
     * @return float
     */
    public function getPeriodAmount12() {
        return $this->periodAmount12;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return Budget
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
     * Set internalId
     *
     * @param string $internalId
     * @return Budget
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

}