<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemAccountMappingItemAccount;
use Nzolt\NetSuite\WebServices\Platform\Core\BaseRef;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ItemAccountMapping
 */
class ItemAccountMapping extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var ItemAccountMappingItemAccount
     */
    protected $itemAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceAccount;

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
    public $destinationAccount;

    /**
     * @access public
     * @var BaseRef
     */
    protected $customDimension;

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
    	"effectiveDate" => "dateTime",
    	"endDate" => "dateTime",
    	"accountingBook" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"itemAccount" => "ItemAccountMappingItemAccount",
    	"sourceAccount" => "RecordRef",
    	"class" => "RecordRef",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"destinationAccount" => "RecordRef",
    	"customDimension" => "BaseRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return ItemAccountMapping
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ItemAccountMapping
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set itemAccount
     *
     * @param ItemAccountMappingItemAccount $itemAccount
     * @return ItemAccountMapping
     */
    public function setItemAccount(ItemAccountMappingItemAccount $itemAccount) {
        $this->itemAccount = $itemAccount;
        return $this;
    }

    /**
     * Get itemAccount
     *
     * @return ItemAccountMappingItemAccount
     */
    public function getItemAccount() {
        return $this->itemAccount;
    }


    /**
     * Set customDimension
     *
     * @param BaseRef $customDimension
     * @return ItemAccountMapping
     */
    public function setCustomDimension(BaseRef $customDimension) {
        $this->customDimension = $customDimension;
        return $this;
    }

    /**
     * Get customDimension
     *
     * @return BaseRef
     */
    public function getCustomDimension() {
        return $this->customDimension;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ItemAccountMapping
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
     * @return ItemAccountMapping
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
     * @return ItemAccountMapping
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