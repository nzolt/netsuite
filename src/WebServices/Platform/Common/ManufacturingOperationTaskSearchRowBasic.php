<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ManufacturingOperationTaskSearchRowBasic
 */
class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualRunTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualSetupTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $completedQuantity;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedWork;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $id;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $inputQuantity;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $laborResources;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $lagAmount;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $lagType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $lagUnits;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $machineResources;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $manufacturingCostTemplate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $manufacturingWorkCenter;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $order;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $predecessor;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $predecessorType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $remainingQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $runRate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $runTime;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $sequence;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $setupTime;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $workOrder;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"actualRunTime" => "SearchColumnDoubleField[]",
    	"actualSetupTime" => "SearchColumnDoubleField[]",
    	"completedQuantity" => "SearchColumnDoubleField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"estimatedWork" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"id" => "SearchColumnLongField[]",
    	"inputQuantity" => "SearchColumnDoubleField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"laborResources" => "SearchColumnLongField[]",
    	"lagAmount" => "SearchColumnDoubleField[]",
    	"lagType" => "SearchColumnEnumSelectField[]",
    	"lagUnits" => "SearchColumnStringField[]",
    	"machineResources" => "SearchColumnLongField[]",
    	"manufacturingCostTemplate" => "SearchColumnSelectField[]",
    	"manufacturingWorkCenter" => "SearchColumnSelectField[]",
    	"message" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"order" => "SearchColumnDoubleField[]",
    	"predecessor" => "SearchColumnSelectField[]",
    	"predecessorType" => "SearchColumnStringField[]",
    	"remainingQuantity" => "SearchColumnDoubleField[]",
    	"runRate" => "SearchColumnDoubleField[]",
    	"runTime" => "SearchColumnDoubleField[]",
    	"sequence" => "SearchColumnLongField[]",
    	"setupTime" => "SearchColumnDoubleField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"status" => "SearchColumnSelectField[]",
    	"workOrder" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ManufacturingOperationTaskSearchRowBasic
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