<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * OpportunitySearchRowBasic
 */
class OpportunitySearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $actionItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $buyingReason;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $buyingTimeFrame;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $closeDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $competitor;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $contribution;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $contributionPrimary;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $custType;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysOpen;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysToClose;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $decisionMaker;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $entity;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedBudget;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $expectedCloseDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $forecastType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $foreignProjectedAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $foreignRangeHigh;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $foreignRangeLow;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isBudgetApproved;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $leadSource;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memo;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partner;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $partnerContribution;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partnerRole;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partnerTeamMember;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $period;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $probability;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $projAltSalesAmt;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $projectedTotal;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rangeHigh;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rangeHighAlt;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rangeLow;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rangeLowAlt;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $salesReadiness;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesRep;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesTeamMember;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesTeamRole;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $taxPeriod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $total;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranCostEstimate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $tranDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfitPct;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $tranId;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $weightedTotal;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $winLossReason;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $wonBy;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"actionItem" => "SearchColumnStringField[]",
    	"availableOffline" => "SearchColumnBooleanField[]",
    	"buyingReason" => "SearchColumnStringField[]",
    	"buyingTimeFrame" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"closeDate" => "SearchColumnDateField[]",
    	"competitor" => "SearchColumnSelectField[]",
    	"contribution" => "SearchColumnDoubleField[]",
    	"contributionPrimary" => "SearchColumnDoubleField[]",
    	"currency" => "SearchColumnSelectField[]",
    	"custType" => "SearchColumnStringField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"daysOpen" => "SearchColumnLongField[]",
    	"daysToClose" => "SearchColumnLongField[]",
    	"decisionMaker" => "SearchColumnSelectField[]",
    	"department" => "SearchColumnSelectField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"entity" => "SearchColumnSelectField[]",
    	"entityStatus" => "SearchColumnSelectField[]",
    	"estimatedBudget" => "SearchColumnDoubleField[]",
    	"expectedCloseDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"forecastType" => "SearchColumnEnumSelectField[]",
    	"foreignProjectedAmount" => "SearchColumnDoubleField[]",
    	"foreignRangeHigh" => "SearchColumnDoubleField[]",
    	"foreignRangeLow" => "SearchColumnDoubleField[]",
    	"fxTranCostEstimate" => "SearchColumnDoubleField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isBudgetApproved" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"leadSource" => "SearchColumnSelectField[]",
    	"location" => "SearchColumnSelectField[]",
    	"memo" => "SearchColumnStringField[]",
    	"partner" => "SearchColumnSelectField[]",
    	"partnerContribution" => "SearchColumnDoubleField[]",
    	"partnerRole" => "SearchColumnSelectField[]",
    	"partnerTeamMember" => "SearchColumnSelectField[]",
    	"period" => "SearchColumnStringField[]",
    	"probability" => "SearchColumnDoubleField[]",
    	"projAltSalesAmt" => "SearchColumnDoubleField[]",
    	"projectedTotal" => "SearchColumnDoubleField[]",
    	"rangeHigh" => "SearchColumnDoubleField[]",
    	"rangeHighAlt" => "SearchColumnDoubleField[]",
    	"rangeLow" => "SearchColumnDoubleField[]",
    	"rangeLowAlt" => "SearchColumnDoubleField[]",
    	"salesReadiness" => "SearchColumnStringField[]",
    	"salesRep" => "SearchColumnSelectField[]",
    	"salesTeamMember" => "SearchColumnSelectField[]",
    	"salesTeamRole" => "SearchColumnSelectField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"taxPeriod" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"total" => "SearchColumnDoubleField[]",
    	"tranCostEstimate" => "SearchColumnDoubleField[]",
    	"tranDate" => "SearchColumnDateField[]",
    	"tranEstGrossProfit" => "SearchColumnDoubleField[]",
    	"tranEstGrossProfitPct" => "SearchColumnDoubleField[]",
    	"tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
    	"tranId" => "SearchColumnStringField[]",
    	"weightedTotal" => "SearchColumnDoubleField[]",
    	"winLossReason" => "SearchColumnSelectField[]",
    	"wonBy" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return OpportunitySearchRowBasic
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