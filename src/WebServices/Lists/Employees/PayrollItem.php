<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * PayrollItem
 */
class PayrollItem extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $itemType;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $vendor;

    /**
     * @access public
     * @var RecordRef
     */
    public $expenseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $liabilityAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $employeePaid;

    /**
     * @access public
     * @var boolean
     */
    protected $inactive;

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
    	"subsidiary" => "RecordRef",
    	"itemType" => "RecordRef",
    	"name" => "string",
    	"vendor" => "RecordRef",
    	"expenseAccount" => "RecordRef",
    	"liabilityAccount" => "RecordRef",
    	"employeePaid" => "boolean",
    	"inactive" => "boolean",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return PayrollItem
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
     * Set employeePaid
     *
     * @param boolean $employeePaid
     * @return PayrollItem
     */
    public function setEmployeePaid($employeePaid) {
        $this->employeePaid = $employeePaid;
        return $this;
    }

    /**
     * Get employeePaid
     *
     * @return boolean
     */
    public function getEmployeePaid() {
        return $this->employeePaid;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return PayrollItem
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


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return PayrollItem
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
     * @return PayrollItem
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
     * @return PayrollItem
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