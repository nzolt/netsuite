<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * JobSearchRowBasic
 */
class JobSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accountNumber;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $actualTime;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $address;

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
    public $addressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressInternalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressLabel;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $addressPhone;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allocatePayrollExpenses;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allowAllResourcesForTasks;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allowExpenses;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $allowTime;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altContact;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $altPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $attention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billingSchedule;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billZipCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $calculatedEndDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $calculatedEndDateBaseline;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $category;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $comments;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $companyName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $contact;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $country;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $countryCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $customer;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $entityId;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $entityNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedGrossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedGrossProfitPercent;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborCostBaseline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedLaborRevenue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedRevenue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estimatedTimeOverrideBaseline;

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
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $image;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $includeCrmTasksInTotals;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultBilling;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isDefaultShipping;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isExemptTime;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isProductiveTime;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isUtilizedTime;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $jobBillingType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $jobItem;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $jobPrice;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $jobResource;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $jobResourceRole;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $language;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastBaselineDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $level;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $limitTimeToAssignees;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $materializeTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentComplete;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $percentTimeComplete;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $phoneticName;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $projectedEndDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $projectedEndDateBaseline;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $projectExpenseType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipZip;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDateBaseline;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $state;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subscription;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $subscriptionDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $subscriptionStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $timeRemaining;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $zipCode;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountNumber" => "SearchColumnStringField[]",
    	"actualTime" => "SearchColumnDoubleField[]",
    	"address" => "SearchColumnStringField[]",
    	"address1" => "SearchColumnStringField[]",
    	"address2" => "SearchColumnStringField[]",
    	"address3" => "SearchColumnStringField[]",
    	"addressee" => "SearchColumnStringField[]",
    	"addressInternalId" => "SearchColumnStringField[]",
    	"addressLabel" => "SearchColumnStringField[]",
    	"addressPhone" => "SearchColumnStringField[]",
    	"allocatePayrollExpenses" => "SearchColumnBooleanField[]",
    	"allowAllResourcesForTasks" => "SearchColumnBooleanField[]",
    	"allowExpenses" => "SearchColumnBooleanField[]",
    	"allowTime" => "SearchColumnBooleanField[]",
    	"altContact" => "SearchColumnStringField[]",
    	"altEmail" => "SearchColumnStringField[]",
    	"altName" => "SearchColumnStringField[]",
    	"altPhone" => "SearchColumnStringField[]",
    	"attention" => "SearchColumnStringField[]",
    	"billAddress1" => "SearchColumnStringField[]",
    	"billAddress2" => "SearchColumnStringField[]",
    	"billAddress3" => "SearchColumnStringField[]",
    	"billAddressee" => "SearchColumnStringField[]",
    	"billAttention" => "SearchColumnStringField[]",
    	"billCity" => "SearchColumnStringField[]",
    	"billCountry" => "SearchColumnEnumSelectField[]",
    	"billCountryCode" => "SearchColumnStringField[]",
    	"billingSchedule" => "SearchColumnSelectField[]",
    	"billPhone" => "SearchColumnStringField[]",
    	"billState" => "SearchColumnStringField[]",
    	"billZipCode" => "SearchColumnStringField[]",
    	"calculatedEndDate" => "SearchColumnDateField[]",
    	"calculatedEndDateBaseline" => "SearchColumnDateField[]",
    	"category" => "SearchColumnSelectField[]",
    	"city" => "SearchColumnStringField[]",
    	"comments" => "SearchColumnStringField[]",
    	"companyName" => "SearchColumnStringField[]",
    	"contact" => "SearchColumnStringField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"countryCode" => "SearchColumnStringField[]",
    	"customer" => "SearchColumnSelectField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"email" => "SearchColumnStringField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"entityId" => "SearchColumnStringField[]",
    	"entityNumber" => "SearchColumnLongField[]",
    	"entityStatus" => "SearchColumnSelectField[]",
    	"estimatedCost" => "SearchColumnDoubleField[]",
    	"estimatedGrossProfit" => "SearchColumnDoubleField[]",
    	"estimatedGrossProfitPercent" => "SearchColumnDoubleField[]",
    	"estimatedLaborCost" => "SearchColumnDoubleField[]",
    	"estimatedLaborCostBaseline" => "SearchColumnDoubleField[]",
    	"estimatedLaborRevenue" => "SearchColumnDoubleField[]",
    	"estimatedRevenue" => "SearchColumnDoubleField[]",
    	"estimatedTime" => "SearchColumnDoubleField[]",
    	"estimatedTimeOverride" => "SearchColumnDoubleField[]",
    	"estimatedTimeOverrideBaseline" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnStringField[]",
    	"fax" => "SearchColumnStringField[]",
    	"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
    	"image" => "SearchColumnSelectField[]",
    	"includeCrmTasksInTotals" => "SearchColumnBooleanField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isDefaultBilling" => "SearchColumnBooleanField[]",
    	"isDefaultShipping" => "SearchColumnBooleanField[]",
    	"isExemptTime" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isProductiveTime" => "SearchColumnBooleanField[]",
    	"isUtilizedTime" => "SearchColumnBooleanField[]",
    	"jobBillingType" => "SearchColumnEnumSelectField[]",
    	"jobItem" => "SearchColumnSelectField[]",
    	"jobPrice" => "SearchColumnDoubleField[]",
    	"jobResource" => "SearchColumnSelectField[]",
    	"jobResourceRole" => "SearchColumnSelectField[]",
    	"language" => "SearchColumnEnumSelectField[]",
    	"lastBaselineDate" => "SearchColumnDateField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"level" => "SearchColumnEnumSelectField[]",
    	"limitTimeToAssignees" => "SearchColumnBooleanField[]",
    	"materializeTime" => "SearchColumnBooleanField[]",
    	"percentComplete" => "SearchColumnDoubleField[]",
    	"percentTimeComplete" => "SearchColumnDoubleField[]",
    	"permission" => "SearchColumnEnumSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"phoneticName" => "SearchColumnStringField[]",
    	"projectedEndDate" => "SearchColumnDateField[]",
    	"projectedEndDateBaseline" => "SearchColumnDateField[]",
    	"projectExpenseType" => "SearchColumnSelectField[]",
    	"shipAddress1" => "SearchColumnStringField[]",
    	"shipAddress2" => "SearchColumnStringField[]",
    	"shipAddress3" => "SearchColumnStringField[]",
    	"shipAddressee" => "SearchColumnStringField[]",
    	"shipAttention" => "SearchColumnStringField[]",
    	"shipCity" => "SearchColumnStringField[]",
    	"shipCountry" => "SearchColumnEnumSelectField[]",
    	"shipCountryCode" => "SearchColumnStringField[]",
    	"shipPhone" => "SearchColumnStringField[]",
    	"shipState" => "SearchColumnStringField[]",
    	"shipZip" => "SearchColumnStringField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"startDateBaseline" => "SearchColumnDateField[]",
    	"state" => "SearchColumnStringField[]",
    	"subscription" => "SearchColumnSelectField[]",
    	"subscriptionDate" => "SearchColumnDateField[]",
    	"subscriptionStatus" => "SearchColumnBooleanField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"timeRemaining" => "SearchColumnDoubleField[]",
    	"zipCode" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return JobSearchRowBasic
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