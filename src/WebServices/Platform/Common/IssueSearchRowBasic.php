<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * IssueSearchRowBasic
 */
class IssueSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $ageInMonths;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $assigned;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $buildBroken;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $buildFixed;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $buildTarget;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $caseCount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseNumber;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $closedDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $createdDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateReleased;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $duplicateOf;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $employeeOrTeam;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $eventStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalAbstract;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalDetails;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalFixedIn;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalStatus;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $fixed;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $fixedBy;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isOwner;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isReviewed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isShowStopper;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $issueAbstract;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $issueStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $module;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $number;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $originalFixedIn;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $priority;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $product;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $productTeam;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $relatedIssue;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $relationship;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $relationshipComment;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $reportedBy;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $reproduce;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $resolved;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $resolvedBy;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $reviewer;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $severity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $source;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $tags;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $userType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $versionBroken;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $versionFixed;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $versionTarget;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"ageInMonths" => "SearchColumnLongField[]",
    	"assigned" => "SearchColumnSelectField[]",
    	"buildBroken" => "SearchColumnSelectField[]",
    	"buildFixed" => "SearchColumnSelectField[]",
    	"buildTarget" => "SearchColumnSelectField[]",
    	"caseCount" => "SearchColumnLongField[]",
    	"caseNumber" => "SearchColumnStringField[]",
    	"closedDate" => "SearchColumnDateField[]",
    	"createdDate" => "SearchColumnDateField[]",
    	"dateReleased" => "SearchColumnDateField[]",
    	"duplicateOf" => "SearchColumnSelectField[]",
    	"employeeOrTeam" => "SearchColumnSelectField[]",
    	"eventStatus" => "SearchColumnEnumSelectField[]",
    	"externalAbstract" => "SearchColumnStringField[]",
    	"externalDetails" => "SearchColumnStringField[]",
    	"externalFixedIn" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"externalStatus" => "SearchColumnSelectField[]",
    	"fixed" => "SearchColumnDateField[]",
    	"fixedBy" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isOwner" => "SearchColumnBooleanField[]",
    	"isReviewed" => "SearchColumnBooleanField[]",
    	"isShowStopper" => "SearchColumnBooleanField[]",
    	"issueAbstract" => "SearchColumnStringField[]",
    	"issueStatus" => "SearchColumnSelectField[]",
    	"item" => "SearchColumnSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"module" => "SearchColumnStringField[]",
    	"number" => "SearchColumnStringField[]",
    	"originalFixedIn" => "SearchColumnStringField[]",
    	"priority" => "SearchColumnSelectField[]",
    	"product" => "SearchColumnSelectField[]",
    	"productTeam" => "SearchColumnSelectField[]",
    	"relatedIssue" => "SearchColumnSelectField[]",
    	"relationship" => "SearchColumnEnumSelectField[]",
    	"relationshipComment" => "SearchColumnStringField[]",
    	"reportedBy" => "SearchColumnSelectField[]",
    	"reproduce" => "SearchColumnSelectField[]",
    	"resolved" => "SearchColumnDateField[]",
    	"resolvedBy" => "SearchColumnSelectField[]",
    	"reviewer" => "SearchColumnSelectField[]",
    	"severity" => "SearchColumnSelectField[]",
    	"source" => "SearchColumnEnumSelectField[]",
    	"tags" => "SearchColumnSelectField[]",
    	"type" => "SearchColumnStringField[]",
    	"userType" => "SearchColumnSelectField[]",
    	"versionBroken" => "SearchColumnSelectField[]",
    	"versionFixed" => "SearchColumnSelectField[]",
    	"versionTarget" => "SearchColumnSelectField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return IssueSearchRowBasic
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