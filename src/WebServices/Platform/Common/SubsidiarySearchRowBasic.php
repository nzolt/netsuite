<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * SubsidiarySearchRowBasic
 */
class SubsidiarySearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBookCurrency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $anonymousCustomerInboundEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $anonymousCustomerOnlineForms;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseAssignmentTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseAutomaticClosureTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseCopyEmployeeTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseCreationTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseEscalationTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $caseUpdateTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $companyNameForSupportMessages;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $employeeCaseUpdateTemplate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fax;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isElimination;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $legalName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $mainSupportEmailAddress;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $name;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $nameNoHierarchy;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phone;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $state;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $taxIdNum;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $tranPrefix;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $url;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $zip;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountingBook" => "SearchColumnSelectField[]",
    	"accountingBookCurrency" => "SearchColumnSelectField[]",
    	"address1" => "SearchColumnStringField[]",
    	"address2" => "SearchColumnStringField[]",
    	"address3" => "SearchColumnStringField[]",
    	"anonymousCustomerInboundEmail" => "SearchColumnStringField[]",
    	"anonymousCustomerOnlineForms" => "SearchColumnStringField[]",
    	"caseAssignmentTemplate" => "SearchColumnStringField[]",
    	"caseAutomaticClosureTemplate" => "SearchColumnStringField[]",
    	"caseCopyEmployeeTemplate" => "SearchColumnStringField[]",
    	"caseCreationTemplate" => "SearchColumnStringField[]",
    	"caseEscalationTemplate" => "SearchColumnStringField[]",
    	"caseUpdateTemplate" => "SearchColumnStringField[]",
    	"city" => "SearchColumnStringField[]",
    	"companyNameForSupportMessages" => "SearchColumnStringField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"currency" => "SearchColumnSelectField[]",
    	"email" => "SearchColumnStringField[]",
    	"employeeCaseUpdateTemplate" => "SearchColumnStringField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"fax" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isElimination" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"legalName" => "SearchColumnStringField[]",
    	"mainSupportEmailAddress" => "SearchColumnStringField[]",
    	"name" => "SearchColumnStringField[]",
    	"nameNoHierarchy" => "SearchColumnStringField[]",
    	"phone" => "SearchColumnStringField[]",
    	"purchaseOrderAmount" => "SearchColumnDoubleField[]",
    	"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
    	"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
    	"receiptAmount" => "SearchColumnDoubleField[]",
    	"receiptQuantity" => "SearchColumnDoubleField[]",
    	"receiptQuantityDiff" => "SearchColumnDoubleField[]",
    	"state" => "SearchColumnStringField[]",
    	"taxIdNum" => "SearchColumnStringField[]",
    	"tranPrefix" => "SearchColumnStringField[]",
    	"url" => "SearchColumnStringField[]",
    	"zip" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return SubsidiarySearchRowBasic
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