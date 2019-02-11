<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ChargeSearchRowBasic
 */
class ChargeSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billingItem;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billTo;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $chargeDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $chargeType;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $createdDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $description;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $modifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $postingPeriod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $quantity;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $rate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $rule;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $runId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $salesOrder;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $stage;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $use;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"amount" => "SearchColumnDoubleField[]",
    	"billingItem" => "SearchColumnSelectField[]",
    	"billTo" => "SearchColumnSelectField[]",
    	"chargeDate" => "SearchColumnDateField[]",
    	"class" => "SearchColumnSelectField[]",
    	"chargeType" => "SearchColumnSelectField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"currency" => "SearchColumnSelectField[]",
    	"department" => "SearchColumnSelectField[]",
    	"description" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"location" => "SearchColumnSelectField[]",
    	"modifiedDate" => "SearchColumnDateField[]",
    	"postingPeriod" => "SearchColumnStringField[]",
    	"quantity" => "SearchColumnStringField[]",
    	"rate" => "SearchColumnStringField[]",
    	"rule" => "SearchColumnSelectField[]",
    	"runId" => "SearchColumnStringField[]",
    	"salesOrder" => "SearchColumnStringField[]",
    	"stage" => "SearchColumnEnumSelectField[]",
    	"use" => "SearchColumnEnumSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ChargeSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}