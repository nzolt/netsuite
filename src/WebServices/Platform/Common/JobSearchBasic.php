<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * JobSearchBasic
 */
class JobSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $accountNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $actualTime;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $address;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressee;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressLabel;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $addressPhone;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allocatePayrollExpenses;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allowAllResourcesForTasks;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allowExpenses;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $allowTime;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $applyProjectExpenseTypeToAll;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $attention;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingSchedule;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $calculatedEndDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $calculatedEndDateBaseline;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $comments;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $contact;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $country;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $county;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customer;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $entityId;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estCost;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $estEndDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedGrossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedGrossProfitPercent;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedLaborCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedLaborCostBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedLaborRevenue;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedTimeOverride;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedTimeOverrideBaseline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estRevenue;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $fax;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $giveAccess;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $image;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $includeCrmTasksInTotals;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isDefaultBilling;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isDefaultShipping;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isExemptTime;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isProductiveTime;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isUtilizedTime;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $jobBillingType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $jobItem;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $jobPrice;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $jobResource;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $jobResourceRole;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $language;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastBaselineDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $level;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $limitTimeToAssignees;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $materializeTime;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $pctComplete;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $percentTimeComplete;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $permission;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phone;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $phoneticName;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $projectedEndDateBaseline;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $projectExpenseType;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDateBaseline;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $timeRemaining;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $zipCode;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountNumber" => "SearchStringField",
    	"actualTime" => "SearchDoubleField",
    	"address" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"addressLabel" => "SearchStringField",
    	"addressPhone" => "SearchStringField",
    	"allocatePayrollExpenses" => "SearchBooleanField",
    	"allowAllResourcesForTasks" => "SearchBooleanField",
    	"allowExpenses" => "SearchBooleanField",
    	"allowTime" => "SearchBooleanField",
    	"applyProjectExpenseTypeToAll" => "SearchBooleanField",
    	"attention" => "SearchStringField",
    	"billingSchedule" => "SearchMultiSelectField",
    	"calculatedEndDate" => "SearchDateField",
    	"calculatedEndDateBaseline" => "SearchDateField",
    	"category" => "SearchMultiSelectField",
    	"city" => "SearchStringField",
    	"comments" => "SearchStringField",
    	"contact" => "SearchStringField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"customer" => "SearchMultiSelectField",
    	"dateCreated" => "SearchDateField",
    	"email" => "SearchStringField",
    	"endDate" => "SearchDateField",
    	"entityId" => "SearchStringField",
    	"estCost" => "SearchDoubleField",
    	"estEndDate" => "SearchDateField",
    	"estimatedGrossProfit" => "SearchDoubleField",
    	"estimatedGrossProfitPercent" => "SearchDoubleField",
    	"estimatedLaborCost" => "SearchDoubleField",
    	"estimatedLaborCostBaseline" => "SearchDoubleField",
    	"estimatedLaborRevenue" => "SearchDoubleField",
    	"estimatedTime" => "SearchDoubleField",
    	"estimatedTimeOverride" => "SearchDoubleField",
    	"estimatedTimeOverrideBaseline" => "SearchDoubleField",
    	"estRevenue" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"giveAccess" => "SearchBooleanField",
    	"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
    	"image" => "SearchStringField",
    	"includeCrmTasksInTotals" => "SearchBooleanField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDefaultBilling" => "SearchBooleanField",
    	"isDefaultShipping" => "SearchBooleanField",
    	"isExemptTime" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isProductiveTime" => "SearchBooleanField",
    	"isUtilizedTime" => "SearchBooleanField",
    	"jobBillingType" => "SearchEnumMultiSelectField",
    	"jobItem" => "SearchMultiSelectField",
    	"jobPrice" => "SearchDoubleField",
    	"jobResource" => "SearchMultiSelectField",
    	"jobResourceRole" => "SearchMultiSelectField",
    	"language" => "SearchEnumMultiSelectField",
    	"lastBaselineDate" => "SearchDateField",
    	"lastModifiedDate" => "SearchDateField",
    	"level" => "SearchEnumMultiSelectField",
    	"limitTimeToAssignees" => "SearchBooleanField",
    	"materializeTime" => "SearchBooleanField",
    	"parent" => "SearchMultiSelectField",
    	"pctComplete" => "SearchLongField",
    	"percentTimeComplete" => "SearchLongField",
    	"permission" => "SearchEnumMultiSelectField",
    	"phone" => "SearchStringField",
    	"phoneticName" => "SearchStringField",
    	"projectedEndDateBaseline" => "SearchDateField",
    	"projectExpenseType" => "SearchMultiSelectField",
    	"startDate" => "SearchDateField",
    	"startDateBaseline" => "SearchDateField",
    	"state" => "SearchStringField",
    	"status" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"timeRemaining" => "SearchDoubleField",
    	"type" => "SearchMultiSelectField",
    	"zipCode" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set accountNumber
     *
     * @param SearchStringField $accountNumber
     * @return JobSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber) {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return SearchStringField
     */
    public function getAccountNumber() {
        return $this->accountNumber;
    }


    /**
     * Set actualTime
     *
     * @param SearchDoubleField $actualTime
     * @return JobSearchBasic
     */
    public function setActualTime(SearchDoubleField $actualTime) {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * Get actualTime
     *
     * @return SearchDoubleField
     */
    public function getActualTime() {
        return $this->actualTime;
    }


    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return JobSearchBasic
     */
    public function setAddress(SearchStringField $address) {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return SearchStringField
     */
    public function getAddress() {
        return $this->address;
    }


    /**
     * Set addressee
     *
     * @param SearchStringField $addressee
     * @return JobSearchBasic
     */
    public function setAddressee(SearchStringField $addressee) {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * Get addressee
     *
     * @return SearchStringField
     */
    public function getAddressee() {
        return $this->addressee;
    }


    /**
     * Set addressLabel
     *
     * @param SearchStringField $addressLabel
     * @return JobSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel) {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * Get addressLabel
     *
     * @return SearchStringField
     */
    public function getAddressLabel() {
        return $this->addressLabel;
    }


    /**
     * Set addressPhone
     *
     * @param SearchStringField $addressPhone
     * @return JobSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone) {
        $this->addressPhone = $addressPhone;
        return $this;
    }

    /**
     * Get addressPhone
     *
     * @return SearchStringField
     */
    public function getAddressPhone() {
        return $this->addressPhone;
    }


    /**
     * Set allocatePayrollExpenses
     *
     * @param SearchBooleanField $allocatePayrollExpenses
     * @return JobSearchBasic
     */
    public function setAllocatePayrollExpenses(SearchBooleanField $allocatePayrollExpenses) {
        $this->allocatePayrollExpenses = $allocatePayrollExpenses;
        return $this;
    }

    /**
     * Get allocatePayrollExpenses
     *
     * @return SearchBooleanField
     */
    public function getAllocatePayrollExpenses() {
        return $this->allocatePayrollExpenses;
    }


    /**
     * Set allowAllResourcesForTasks
     *
     * @param SearchBooleanField $allowAllResourcesForTasks
     * @return JobSearchBasic
     */
    public function setAllowAllResourcesForTasks(SearchBooleanField $allowAllResourcesForTasks) {
        $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
        return $this;
    }

    /**
     * Get allowAllResourcesForTasks
     *
     * @return SearchBooleanField
     */
    public function getAllowAllResourcesForTasks() {
        return $this->allowAllResourcesForTasks;
    }


    /**
     * Set allowExpenses
     *
     * @param SearchBooleanField $allowExpenses
     * @return JobSearchBasic
     */
    public function setAllowExpenses(SearchBooleanField $allowExpenses) {
        $this->allowExpenses = $allowExpenses;
        return $this;
    }

    /**
     * Get allowExpenses
     *
     * @return SearchBooleanField
     */
    public function getAllowExpenses() {
        return $this->allowExpenses;
    }


    /**
     * Set allowTime
     *
     * @param SearchBooleanField $allowTime
     * @return JobSearchBasic
     */
    public function setAllowTime(SearchBooleanField $allowTime) {
        $this->allowTime = $allowTime;
        return $this;
    }

    /**
     * Get allowTime
     *
     * @return SearchBooleanField
     */
    public function getAllowTime() {
        return $this->allowTime;
    }


    /**
     * Set applyProjectExpenseTypeToAll
     *
     * @param SearchBooleanField $applyProjectExpenseTypeToAll
     * @return JobSearchBasic
     */
    public function setApplyProjectExpenseTypeToAll(SearchBooleanField $applyProjectExpenseTypeToAll) {
        $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
        return $this;
    }

    /**
     * Get applyProjectExpenseTypeToAll
     *
     * @return SearchBooleanField
     */
    public function getApplyProjectExpenseTypeToAll() {
        return $this->applyProjectExpenseTypeToAll;
    }


    /**
     * Set attention
     *
     * @param SearchStringField $attention
     * @return JobSearchBasic
     */
    public function setAttention(SearchStringField $attention) {
        $this->attention = $attention;
        return $this;
    }

    /**
     * Get attention
     *
     * @return SearchStringField
     */
    public function getAttention() {
        return $this->attention;
    }


    /**
     * Set billingSchedule
     *
     * @param SearchMultiSelectField $billingSchedule
     * @return JobSearchBasic
     */
    public function setBillingSchedule(SearchMultiSelectField $billingSchedule) {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * Get billingSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule() {
        return $this->billingSchedule;
    }


    /**
     * Set calculatedEndDate
     *
     * @param SearchDateField $calculatedEndDate
     * @return JobSearchBasic
     */
    public function setCalculatedEndDate(SearchDateField $calculatedEndDate) {
        $this->calculatedEndDate = $calculatedEndDate;
        return $this;
    }

    /**
     * Get calculatedEndDate
     *
     * @return SearchDateField
     */
    public function getCalculatedEndDate() {
        return $this->calculatedEndDate;
    }


    /**
     * Set calculatedEndDateBaseline
     *
     * @param SearchDateField $calculatedEndDateBaseline
     * @return JobSearchBasic
     */
    public function setCalculatedEndDateBaseline(SearchDateField $calculatedEndDateBaseline) {
        $this->calculatedEndDateBaseline = $calculatedEndDateBaseline;
        return $this;
    }

    /**
     * Get calculatedEndDateBaseline
     *
     * @return SearchDateField
     */
    public function getCalculatedEndDateBaseline() {
        return $this->calculatedEndDateBaseline;
    }


    /**
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return JobSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return JobSearchBasic
     */
    public function setCity(SearchStringField $city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return SearchStringField
     */
    public function getCity() {
        return $this->city;
    }


    /**
     * Set comments
     *
     * @param SearchStringField $comments
     * @return JobSearchBasic
     */
    public function setComments(SearchStringField $comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return SearchStringField
     */
    public function getComments() {
        return $this->comments;
    }


    /**
     * Set contact
     *
     * @param SearchStringField $contact
     * @return JobSearchBasic
     */
    public function setContact(SearchStringField $contact) {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return SearchStringField
     */
    public function getContact() {
        return $this->contact;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return JobSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set county
     *
     * @param SearchStringField $county
     * @return JobSearchBasic
     */
    public function setCounty(SearchStringField $county) {
        $this->county = $county;
        return $this;
    }

    /**
     * Get county
     *
     * @return SearchStringField
     */
    public function getCounty() {
        return $this->county;
    }


    /**
     * Set customer
     *
     * @param SearchMultiSelectField $customer
     * @return JobSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer) {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get customer
     *
     * @return SearchMultiSelectField
     */
    public function getCustomer() {
        return $this->customer;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return JobSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated) {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return SearchDateField
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return JobSearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return JobSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set entityId
     *
     * @param SearchStringField $entityId
     * @return JobSearchBasic
     */
    public function setEntityId(SearchStringField $entityId) {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Get entityId
     *
     * @return SearchStringField
     */
    public function getEntityId() {
        return $this->entityId;
    }


    /**
     * Set estCost
     *
     * @param SearchDoubleField $estCost
     * @return JobSearchBasic
     */
    public function setEstCost(SearchDoubleField $estCost) {
        $this->estCost = $estCost;
        return $this;
    }

    /**
     * Get estCost
     *
     * @return SearchDoubleField
     */
    public function getEstCost() {
        return $this->estCost;
    }


    /**
     * Set estEndDate
     *
     * @param SearchDateField $estEndDate
     * @return JobSearchBasic
     */
    public function setEstEndDate(SearchDateField $estEndDate) {
        $this->estEndDate = $estEndDate;
        return $this;
    }

    /**
     * Get estEndDate
     *
     * @return SearchDateField
     */
    public function getEstEndDate() {
        return $this->estEndDate;
    }


    /**
     * Set estimatedGrossProfit
     *
     * @param SearchDoubleField $estimatedGrossProfit
     * @return JobSearchBasic
     */
    public function setEstimatedGrossProfit(SearchDoubleField $estimatedGrossProfit) {
        $this->estimatedGrossProfit = $estimatedGrossProfit;
        return $this;
    }

    /**
     * Get estimatedGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfit() {
        return $this->estimatedGrossProfit;
    }


    /**
     * Set estimatedGrossProfitPercent
     *
     * @param SearchDoubleField $estimatedGrossProfitPercent
     * @return JobSearchBasic
     */
    public function setEstimatedGrossProfitPercent(SearchDoubleField $estimatedGrossProfitPercent) {
        $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
        return $this;
    }

    /**
     * Get estimatedGrossProfitPercent
     *
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfitPercent() {
        return $this->estimatedGrossProfitPercent;
    }


    /**
     * Set estimatedLaborCost
     *
     * @param SearchDoubleField $estimatedLaborCost
     * @return JobSearchBasic
     */
    public function setEstimatedLaborCost(SearchDoubleField $estimatedLaborCost) {
        $this->estimatedLaborCost = $estimatedLaborCost;
        return $this;
    }

    /**
     * Get estimatedLaborCost
     *
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCost() {
        return $this->estimatedLaborCost;
    }


    /**
     * Set estimatedLaborCostBaseline
     *
     * @param SearchDoubleField $estimatedLaborCostBaseline
     * @return JobSearchBasic
     */
    public function setEstimatedLaborCostBaseline(SearchDoubleField $estimatedLaborCostBaseline) {
        $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
        return $this;
    }

    /**
     * Get estimatedLaborCostBaseline
     *
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCostBaseline() {
        return $this->estimatedLaborCostBaseline;
    }


    /**
     * Set estimatedLaborRevenue
     *
     * @param SearchDoubleField $estimatedLaborRevenue
     * @return JobSearchBasic
     */
    public function setEstimatedLaborRevenue(SearchDoubleField $estimatedLaborRevenue) {
        $this->estimatedLaborRevenue = $estimatedLaborRevenue;
        return $this;
    }

    /**
     * Get estimatedLaborRevenue
     *
     * @return SearchDoubleField
     */
    public function getEstimatedLaborRevenue() {
        return $this->estimatedLaborRevenue;
    }


    /**
     * Set estimatedTime
     *
     * @param SearchDoubleField $estimatedTime
     * @return JobSearchBasic
     */
    public function setEstimatedTime(SearchDoubleField $estimatedTime) {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return SearchDoubleField
     */
    public function getEstimatedTime() {
        return $this->estimatedTime;
    }


    /**
     * Set estimatedTimeOverride
     *
     * @param SearchDoubleField $estimatedTimeOverride
     * @return JobSearchBasic
     */
    public function setEstimatedTimeOverride(SearchDoubleField $estimatedTimeOverride) {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * Get estimatedTimeOverride
     *
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride() {
        return $this->estimatedTimeOverride;
    }


    /**
     * Set estimatedTimeOverrideBaseline
     *
     * @param SearchDoubleField $estimatedTimeOverrideBaseline
     * @return JobSearchBasic
     */
    public function setEstimatedTimeOverrideBaseline(SearchDoubleField $estimatedTimeOverrideBaseline) {
        $this->estimatedTimeOverrideBaseline = $estimatedTimeOverrideBaseline;
        return $this;
    }

    /**
     * Get estimatedTimeOverrideBaseline
     *
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverrideBaseline() {
        return $this->estimatedTimeOverrideBaseline;
    }


    /**
     * Set estRevenue
     *
     * @param SearchDoubleField $estRevenue
     * @return JobSearchBasic
     */
    public function setEstRevenue(SearchDoubleField $estRevenue) {
        $this->estRevenue = $estRevenue;
        return $this;
    }

    /**
     * Get estRevenue
     *
     * @return SearchDoubleField
     */
    public function getEstRevenue() {
        return $this->estRevenue;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return JobSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return JobSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set fax
     *
     * @param SearchStringField $fax
     * @return JobSearchBasic
     */
    public function setFax(SearchStringField $fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return SearchStringField
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set giveAccess
     *
     * @param SearchBooleanField $giveAccess
     * @return JobSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess) {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * Get giveAccess
     *
     * @return SearchBooleanField
     */
    public function getGiveAccess() {
        return $this->giveAccess;
    }


    /**
     * Set globalSubscriptionStatus
     *
     * @param SearchEnumMultiSelectField $globalSubscriptionStatus
     * @return JobSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus) {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * Get globalSubscriptionStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGlobalSubscriptionStatus() {
        return $this->globalSubscriptionStatus;
    }


    /**
     * Set image
     *
     * @param SearchStringField $image
     * @return JobSearchBasic
     */
    public function setImage(SearchStringField $image) {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return SearchStringField
     */
    public function getImage() {
        return $this->image;
    }


    /**
     * Set includeCrmTasksInTotals
     *
     * @param SearchBooleanField $includeCrmTasksInTotals
     * @return JobSearchBasic
     */
    public function setIncludeCrmTasksInTotals(SearchBooleanField $includeCrmTasksInTotals) {
        $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
        return $this;
    }

    /**
     * Get includeCrmTasksInTotals
     *
     * @return SearchBooleanField
     */
    public function getIncludeCrmTasksInTotals() {
        return $this->includeCrmTasksInTotals;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return JobSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return JobSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set isDefaultBilling
     *
     * @param SearchBooleanField $isDefaultBilling
     * @return JobSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling) {
        $this->isDefaultBilling = $isDefaultBilling;
        return $this;
    }

    /**
     * Get isDefaultBilling
     *
     * @return SearchBooleanField
     */
    public function getIsDefaultBilling() {
        return $this->isDefaultBilling;
    }


    /**
     * Set isDefaultShipping
     *
     * @param SearchBooleanField $isDefaultShipping
     * @return JobSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping) {
        $this->isDefaultShipping = $isDefaultShipping;
        return $this;
    }

    /**
     * Get isDefaultShipping
     *
     * @return SearchBooleanField
     */
    public function getIsDefaultShipping() {
        return $this->isDefaultShipping;
    }


    /**
     * Set isExemptTime
     *
     * @param SearchBooleanField $isExemptTime
     * @return JobSearchBasic
     */
    public function setIsExemptTime(SearchBooleanField $isExemptTime) {
        $this->isExemptTime = $isExemptTime;
        return $this;
    }

    /**
     * Get isExemptTime
     *
     * @return SearchBooleanField
     */
    public function getIsExemptTime() {
        return $this->isExemptTime;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return JobSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isProductiveTime
     *
     * @param SearchBooleanField $isProductiveTime
     * @return JobSearchBasic
     */
    public function setIsProductiveTime(SearchBooleanField $isProductiveTime) {
        $this->isProductiveTime = $isProductiveTime;
        return $this;
    }

    /**
     * Get isProductiveTime
     *
     * @return SearchBooleanField
     */
    public function getIsProductiveTime() {
        return $this->isProductiveTime;
    }


    /**
     * Set isUtilizedTime
     *
     * @param SearchBooleanField $isUtilizedTime
     * @return JobSearchBasic
     */
    public function setIsUtilizedTime(SearchBooleanField $isUtilizedTime) {
        $this->isUtilizedTime = $isUtilizedTime;
        return $this;
    }

    /**
     * Get isUtilizedTime
     *
     * @return SearchBooleanField
     */
    public function getIsUtilizedTime() {
        return $this->isUtilizedTime;
    }


    /**
     * Set jobBillingType
     *
     * @param SearchEnumMultiSelectField $jobBillingType
     * @return JobSearchBasic
     */
    public function setJobBillingType(SearchEnumMultiSelectField $jobBillingType) {
        $this->jobBillingType = $jobBillingType;
        return $this;
    }

    /**
     * Get jobBillingType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getJobBillingType() {
        return $this->jobBillingType;
    }


    /**
     * Set jobItem
     *
     * @param SearchMultiSelectField $jobItem
     * @return JobSearchBasic
     */
    public function setJobItem(SearchMultiSelectField $jobItem) {
        $this->jobItem = $jobItem;
        return $this;
    }

    /**
     * Get jobItem
     *
     * @return SearchMultiSelectField
     */
    public function getJobItem() {
        return $this->jobItem;
    }


    /**
     * Set jobPrice
     *
     * @param SearchDoubleField $jobPrice
     * @return JobSearchBasic
     */
    public function setJobPrice(SearchDoubleField $jobPrice) {
        $this->jobPrice = $jobPrice;
        return $this;
    }

    /**
     * Get jobPrice
     *
     * @return SearchDoubleField
     */
    public function getJobPrice() {
        return $this->jobPrice;
    }


    /**
     * Set jobResource
     *
     * @param SearchMultiSelectField $jobResource
     * @return JobSearchBasic
     */
    public function setJobResource(SearchMultiSelectField $jobResource) {
        $this->jobResource = $jobResource;
        return $this;
    }

    /**
     * Get jobResource
     *
     * @return SearchMultiSelectField
     */
    public function getJobResource() {
        return $this->jobResource;
    }


    /**
     * Set jobResourceRole
     *
     * @param SearchMultiSelectField $jobResourceRole
     * @return JobSearchBasic
     */
    public function setJobResourceRole(SearchMultiSelectField $jobResourceRole) {
        $this->jobResourceRole = $jobResourceRole;
        return $this;
    }

    /**
     * Get jobResourceRole
     *
     * @return SearchMultiSelectField
     */
    public function getJobResourceRole() {
        return $this->jobResourceRole;
    }


    /**
     * Set language
     *
     * @param SearchEnumMultiSelectField $language
     * @return JobSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLanguage() {
        return $this->language;
    }


    /**
     * Set lastBaselineDate
     *
     * @param SearchDateField $lastBaselineDate
     * @return JobSearchBasic
     */
    public function setLastBaselineDate(SearchDateField $lastBaselineDate) {
        $this->lastBaselineDate = $lastBaselineDate;
        return $this;
    }

    /**
     * Get lastBaselineDate
     *
     * @return SearchDateField
     */
    public function getLastBaselineDate() {
        return $this->lastBaselineDate;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return JobSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set level
     *
     * @param SearchEnumMultiSelectField $level
     * @return JobSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level) {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLevel() {
        return $this->level;
    }


    /**
     * Set limitTimeToAssignees
     *
     * @param SearchBooleanField $limitTimeToAssignees
     * @return JobSearchBasic
     */
    public function setLimitTimeToAssignees(SearchBooleanField $limitTimeToAssignees) {
        $this->limitTimeToAssignees = $limitTimeToAssignees;
        return $this;
    }

    /**
     * Get limitTimeToAssignees
     *
     * @return SearchBooleanField
     */
    public function getLimitTimeToAssignees() {
        return $this->limitTimeToAssignees;
    }


    /**
     * Set materializeTime
     *
     * @param SearchBooleanField $materializeTime
     * @return JobSearchBasic
     */
    public function setMaterializeTime(SearchBooleanField $materializeTime) {
        $this->materializeTime = $materializeTime;
        return $this;
    }

    /**
     * Get materializeTime
     *
     * @return SearchBooleanField
     */
    public function getMaterializeTime() {
        return $this->materializeTime;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return JobSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set pctComplete
     *
     * @param SearchLongField $pctComplete
     * @return JobSearchBasic
     */
    public function setPctComplete(SearchLongField $pctComplete) {
        $this->pctComplete = $pctComplete;
        return $this;
    }

    /**
     * Get pctComplete
     *
     * @return SearchLongField
     */
    public function getPctComplete() {
        return $this->pctComplete;
    }


    /**
     * Set percentTimeComplete
     *
     * @param SearchLongField $percentTimeComplete
     * @return JobSearchBasic
     */
    public function setPercentTimeComplete(SearchLongField $percentTimeComplete) {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * Get percentTimeComplete
     *
     * @return SearchLongField
     */
    public function getPercentTimeComplete() {
        return $this->percentTimeComplete;
    }


    /**
     * Set permission
     *
     * @param SearchEnumMultiSelectField $permission
     * @return JobSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission) {
        $this->permission = $permission;
        return $this;
    }

    /**
     * Get permission
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPermission() {
        return $this->permission;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return JobSearchBasic
     */
    public function setPhone(SearchStringField $phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return SearchStringField
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set phoneticName
     *
     * @param SearchStringField $phoneticName
     * @return JobSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName) {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * Get phoneticName
     *
     * @return SearchStringField
     */
    public function getPhoneticName() {
        return $this->phoneticName;
    }


    /**
     * Set projectedEndDateBaseline
     *
     * @param SearchDateField $projectedEndDateBaseline
     * @return JobSearchBasic
     */
    public function setProjectedEndDateBaseline(SearchDateField $projectedEndDateBaseline) {
        $this->projectedEndDateBaseline = $projectedEndDateBaseline;
        return $this;
    }

    /**
     * Get projectedEndDateBaseline
     *
     * @return SearchDateField
     */
    public function getProjectedEndDateBaseline() {
        return $this->projectedEndDateBaseline;
    }


    /**
     * Set projectExpenseType
     *
     * @param SearchMultiSelectField $projectExpenseType
     * @return JobSearchBasic
     */
    public function setProjectExpenseType(SearchMultiSelectField $projectExpenseType) {
        $this->projectExpenseType = $projectExpenseType;
        return $this;
    }

    /**
     * Get projectExpenseType
     *
     * @return SearchMultiSelectField
     */
    public function getProjectExpenseType() {
        return $this->projectExpenseType;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return JobSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set startDateBaseline
     *
     * @param SearchDateField $startDateBaseline
     * @return JobSearchBasic
     */
    public function setStartDateBaseline(SearchDateField $startDateBaseline) {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * Get startDateBaseline
     *
     * @return SearchDateField
     */
    public function getStartDateBaseline() {
        return $this->startDateBaseline;
    }


    /**
     * Set state
     *
     * @param SearchStringField $state
     * @return JobSearchBasic
     */
    public function setState(SearchStringField $state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return SearchStringField
     */
    public function getState() {
        return $this->state;
    }


    /**
     * Set status
     *
     * @param SearchMultiSelectField $status
     * @return JobSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return JobSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set timeRemaining
     *
     * @param SearchDoubleField $timeRemaining
     * @return JobSearchBasic
     */
    public function setTimeRemaining(SearchDoubleField $timeRemaining) {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * Get timeRemaining
     *
     * @return SearchDoubleField
     */
    public function getTimeRemaining() {
        return $this->timeRemaining;
    }


    /**
     * Set type
     *
     * @param SearchMultiSelectField $type
     * @return JobSearchBasic
     */
    public function setType(SearchMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set zipCode
     *
     * @param SearchStringField $zipCode
     * @return JobSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode) {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return SearchStringField
     */
    public function getZipCode() {
        return $this->zipCode;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return JobSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}