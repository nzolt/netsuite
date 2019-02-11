<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\General;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * StatisticalJournalEntryLine
 */
class StatisticalJournalEntryLine {

    /**
     * @access public
     * @var RecordRef
     */
    public $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $scheduleNum;

    /**
     * @access public
     * @var float
     */
    protected $debit;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

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
    public $lineUnit;

    /**
     * @access public
     * @var string
     */
    protected $previewDebit;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "RecordRef",
    	"location" => "RecordRef",
    	"scheduleNum" => "RecordRef",
    	"debit" => "float",
    	"memo" => "string",
    	"entity" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"lineUnit" => "RecordRef",
    	"previewDebit" => "string",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set debit
     *
     * @param float $debit
     * @return StatisticalJournalEntryLine
     */
    public function setDebit($debit) {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Get debit
     *
     * @return float
     */
    public function getDebit() {
        return $this->debit;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return StatisticalJournalEntryLine
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set previewDebit
     *
     * @param string $previewDebit
     * @return StatisticalJournalEntryLine
     */
    public function setPreviewDebit($previewDebit) {
        $this->previewDebit = $previewDebit;
        return $this;
    }

    /**
     * Get previewDebit
     *
     * @return string
     */
    public function getPreviewDebit() {
        return $this->previewDebit;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return StatisticalJournalEntryLine
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