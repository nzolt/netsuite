<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PaycheckJournalEarning
 */
class PaycheckJournalEarning {

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var float
     */
    protected $hours;

    /**
     * @access public
     * @var float
     */
    protected $amount;

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
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"id" => "integer",
    	"payrollItem" => "RecordRef",
    	"hours" => "float",
    	"amount" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set id
     *
     * @param integer $id
     * @return PaycheckJournalEarning
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
     * Set hours
     *
     * @param float $hours
     * @return PaycheckJournalEarning
     */
    public function setHours($hours) {
        $this->hours = $hours;
        return $this;
    }

    /**
     * Get hours
     *
     * @return float
     */
    public function getHours() {
        return $this->hours;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return PaycheckJournalEarning
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PaycheckJournalEarning
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

}