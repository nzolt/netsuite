<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * EmployeeSearchBasic
 */
class EmployeeSearchBasic extends SearchRecordBasic {

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
     * @var SearchStringField
     */
    protected $alienNumber;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $anniversary;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $approvalLimit;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $approver;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $attention;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $authWorkDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAddress;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingClass;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $birthDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $birthDay;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $cContribution;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $comments;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $commissionPlan;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $concurrentWebServicesUser;

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
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $deduction;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $earning;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $education;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $eligibleForCommission;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employeeStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employeeType;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $employeeTypeKpi;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $entityId;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $ethnicity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $expenseLimit;

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
     * @var SearchStringField
     */
    protected $firstName;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $gender;

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
     * @var SearchMultiSelectField
     */
    protected $group;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $hireDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $I9Verified;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $image;

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
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isJobResource;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isTemplate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $jobDescription;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $laborCost;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $language;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $lastName;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastPaidDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastReviewDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $level;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $maritalStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $middleName;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $nextReviewDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $offlineAccess;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $payFrequency;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $permChangeDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $permission;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $permissionChange;

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
     * @var SearchDoubleField
     */
    protected $primaryEarningAmount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $primaryEarningItem;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $primaryEarningType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderApprovalLimit;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $purchaseOrderApprover;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderLimit;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $releaseDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $residentStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $role;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $roleChange;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $roleChangeDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $salesRep;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesRole;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $salutation;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $socialSecurityNumber;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $supervisor;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $supportRep;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $timeApprover;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $usePerquest;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useTimeData;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $visaExpDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $visaType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $withholding;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workCalendar;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $workplace;

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
    	"address" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"addressLabel" => "SearchStringField",
    	"addressPhone" => "SearchStringField",
    	"alienNumber" => "SearchStringField",
    	"anniversary" => "SearchDateField",
    	"approvalLimit" => "SearchDoubleField",
    	"approver" => "SearchMultiSelectField",
    	"attention" => "SearchStringField",
    	"authWorkDate" => "SearchDateField",
    	"billAddress" => "SearchStringField",
    	"billingClass" => "SearchMultiSelectField",
    	"birthDate" => "SearchDateField",
    	"birthDay" => "SearchDateField",
    	"cContribution" => "SearchMultiSelectField",
    	"city" => "SearchStringField",
    	"class" => "SearchMultiSelectField",
    	"comments" => "SearchStringField",
    	"commissionPlan" => "SearchMultiSelectField",
    	"concurrentWebServicesUser" => "SearchBooleanField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"dateCreated" => "SearchDateField",
    	"deduction" => "SearchMultiSelectField",
    	"department" => "SearchMultiSelectField",
    	"earning" => "SearchMultiSelectField",
    	"education" => "SearchMultiSelectField",
    	"eligibleForCommission" => "SearchBooleanField",
    	"email" => "SearchStringField",
    	"employeeStatus" => "SearchMultiSelectField",
    	"employeeType" => "SearchMultiSelectField",
    	"employeeTypeKpi" => "SearchBooleanField",
    	"entityId" => "SearchStringField",
    	"ethnicity" => "SearchMultiSelectField",
    	"expenseLimit" => "SearchDoubleField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"firstName" => "SearchStringField",
    	"gender" => "SearchEnumMultiSelectField",
    	"giveAccess" => "SearchBooleanField",
    	"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
    	"group" => "SearchMultiSelectField",
    	"hireDate" => "SearchDateField",
    	"I9Verified" => "SearchBooleanField",
    	"image" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isDefaultBilling" => "SearchBooleanField",
    	"isDefaultShipping" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isJobResource" => "SearchBooleanField",
    	"isTemplate" => "SearchBooleanField",
    	"jobDescription" => "SearchStringField",
    	"laborCost" => "SearchDoubleField",
    	"language" => "SearchEnumMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastName" => "SearchStringField",
    	"lastPaidDate" => "SearchDateField",
    	"lastReviewDate" => "SearchDateField",
    	"level" => "SearchEnumMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"maritalStatus" => "SearchMultiSelectField",
    	"middleName" => "SearchStringField",
    	"nextReviewDate" => "SearchDateField",
    	"offlineAccess" => "SearchBooleanField",
    	"payFrequency" => "SearchEnumMultiSelectField",
    	"permChangeDate" => "SearchDateField",
    	"permission" => "SearchEnumMultiSelectField",
    	"permissionChange" => "SearchEnumMultiSelectField",
    	"phone" => "SearchStringField",
    	"phoneticName" => "SearchStringField",
    	"primaryEarningAmount" => "SearchDoubleField",
    	"primaryEarningItem" => "SearchStringField",
    	"primaryEarningType" => "SearchStringField",
    	"purchaseOrderApprovalLimit" => "SearchDoubleField",
    	"purchaseOrderApprover" => "SearchMultiSelectField",
    	"purchaseOrderLimit" => "SearchDoubleField",
    	"releaseDate" => "SearchDateField",
    	"residentStatus" => "SearchMultiSelectField",
    	"role" => "SearchMultiSelectField",
    	"roleChange" => "SearchMultiSelectField",
    	"roleChangeDate" => "SearchDateField",
    	"salesRep" => "SearchBooleanField",
    	"salesRole" => "SearchMultiSelectField",
    	"salutation" => "SearchStringField",
    	"socialSecurityNumber" => "SearchStringField",
    	"state" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"supervisor" => "SearchMultiSelectField",
    	"supportRep" => "SearchBooleanField",
    	"timeApprover" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"usePerquest" => "SearchBooleanField",
    	"useTimeData" => "SearchBooleanField",
    	"visaExpDate" => "SearchDateField",
    	"visaType" => "SearchMultiSelectField",
    	"withholding" => "SearchMultiSelectField",
    	"workCalendar" => "SearchMultiSelectField",
    	"workplace" => "SearchMultiSelectField",
    	"zipCode" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set address
     *
     * @param SearchStringField $address
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set alienNumber
     *
     * @param SearchStringField $alienNumber
     * @return EmployeeSearchBasic
     */
    public function setAlienNumber(SearchStringField $alienNumber) {
        $this->alienNumber = $alienNumber;
        return $this;
    }

    /**
     * Get alienNumber
     *
     * @return SearchStringField
     */
    public function getAlienNumber() {
        return $this->alienNumber;
    }


    /**
     * Set anniversary
     *
     * @param SearchDateField $anniversary
     * @return EmployeeSearchBasic
     */
    public function setAnniversary(SearchDateField $anniversary) {
        $this->anniversary = $anniversary;
        return $this;
    }

    /**
     * Get anniversary
     *
     * @return SearchDateField
     */
    public function getAnniversary() {
        return $this->anniversary;
    }


    /**
     * Set approvalLimit
     *
     * @param SearchDoubleField $approvalLimit
     * @return EmployeeSearchBasic
     */
    public function setApprovalLimit(SearchDoubleField $approvalLimit) {
        $this->approvalLimit = $approvalLimit;
        return $this;
    }

    /**
     * Get approvalLimit
     *
     * @return SearchDoubleField
     */
    public function getApprovalLimit() {
        return $this->approvalLimit;
    }


    /**
     * Set approver
     *
     * @param SearchMultiSelectField $approver
     * @return EmployeeSearchBasic
     */
    public function setApprover(SearchMultiSelectField $approver) {
        $this->approver = $approver;
        return $this;
    }

    /**
     * Get approver
     *
     * @return SearchMultiSelectField
     */
    public function getApprover() {
        return $this->approver;
    }


    /**
     * Set attention
     *
     * @param SearchStringField $attention
     * @return EmployeeSearchBasic
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
     * Set authWorkDate
     *
     * @param SearchDateField $authWorkDate
     * @return EmployeeSearchBasic
     */
    public function setAuthWorkDate(SearchDateField $authWorkDate) {
        $this->authWorkDate = $authWorkDate;
        return $this;
    }

    /**
     * Get authWorkDate
     *
     * @return SearchDateField
     */
    public function getAuthWorkDate() {
        return $this->authWorkDate;
    }


    /**
     * Set billAddress
     *
     * @param SearchStringField $billAddress
     * @return EmployeeSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress) {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * Get billAddress
     *
     * @return SearchStringField
     */
    public function getBillAddress() {
        return $this->billAddress;
    }


    /**
     * Set billingClass
     *
     * @param SearchMultiSelectField $billingClass
     * @return EmployeeSearchBasic
     */
    public function setBillingClass(SearchMultiSelectField $billingClass) {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * Get billingClass
     *
     * @return SearchMultiSelectField
     */
    public function getBillingClass() {
        return $this->billingClass;
    }


    /**
     * Set birthDate
     *
     * @param SearchDateField $birthDate
     * @return EmployeeSearchBasic
     */
    public function setBirthDate(SearchDateField $birthDate) {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Get birthDate
     *
     * @return SearchDateField
     */
    public function getBirthDate() {
        return $this->birthDate;
    }


    /**
     * Set birthDay
     *
     * @param SearchDateField $birthDay
     * @return EmployeeSearchBasic
     */
    public function setBirthDay(SearchDateField $birthDay) {
        $this->birthDay = $birthDay;
        return $this;
    }

    /**
     * Get birthDay
     *
     * @return SearchDateField
     */
    public function getBirthDay() {
        return $this->birthDay;
    }


    /**
     * Set cContribution
     *
     * @param SearchMultiSelectField $cContribution
     * @return EmployeeSearchBasic
     */
    public function setCContribution(SearchMultiSelectField $cContribution) {
        $this->cContribution = $cContribution;
        return $this;
    }

    /**
     * Get cContribution
     *
     * @return SearchMultiSelectField
     */
    public function getCContribution() {
        return $this->cContribution;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return EmployeeSearchBasic
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
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return EmployeeSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set comments
     *
     * @param SearchStringField $comments
     * @return EmployeeSearchBasic
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
     * Set commissionPlan
     *
     * @param SearchMultiSelectField $commissionPlan
     * @return EmployeeSearchBasic
     */
    public function setCommissionPlan(SearchMultiSelectField $commissionPlan) {
        $this->commissionPlan = $commissionPlan;
        return $this;
    }

    /**
     * Get commissionPlan
     *
     * @return SearchMultiSelectField
     */
    public function getCommissionPlan() {
        return $this->commissionPlan;
    }


    /**
     * Set concurrentWebServicesUser
     *
     * @param SearchBooleanField $concurrentWebServicesUser
     * @return EmployeeSearchBasic
     */
    public function setConcurrentWebServicesUser(SearchBooleanField $concurrentWebServicesUser) {
        $this->concurrentWebServicesUser = $concurrentWebServicesUser;
        return $this;
    }

    /**
     * Get concurrentWebServicesUser
     *
     * @return SearchBooleanField
     */
    public function getConcurrentWebServicesUser() {
        return $this->concurrentWebServicesUser;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return EmployeeSearchBasic
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
     * Set deduction
     *
     * @param SearchMultiSelectField $deduction
     * @return EmployeeSearchBasic
     */
    public function setDeduction(SearchMultiSelectField $deduction) {
        $this->deduction = $deduction;
        return $this;
    }

    /**
     * Get deduction
     *
     * @return SearchMultiSelectField
     */
    public function getDeduction() {
        return $this->deduction;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return EmployeeSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set earning
     *
     * @param SearchMultiSelectField $earning
     * @return EmployeeSearchBasic
     */
    public function setEarning(SearchMultiSelectField $earning) {
        $this->earning = $earning;
        return $this;
    }

    /**
     * Get earning
     *
     * @return SearchMultiSelectField
     */
    public function getEarning() {
        return $this->earning;
    }


    /**
     * Set education
     *
     * @param SearchMultiSelectField $education
     * @return EmployeeSearchBasic
     */
    public function setEducation(SearchMultiSelectField $education) {
        $this->education = $education;
        return $this;
    }

    /**
     * Get education
     *
     * @return SearchMultiSelectField
     */
    public function getEducation() {
        return $this->education;
    }


    /**
     * Set eligibleForCommission
     *
     * @param SearchBooleanField $eligibleForCommission
     * @return EmployeeSearchBasic
     */
    public function setEligibleForCommission(SearchBooleanField $eligibleForCommission) {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * Get eligibleForCommission
     *
     * @return SearchBooleanField
     */
    public function getEligibleForCommission() {
        return $this->eligibleForCommission;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return EmployeeSearchBasic
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
     * Set employeeStatus
     *
     * @param SearchMultiSelectField $employeeStatus
     * @return EmployeeSearchBasic
     */
    public function setEmployeeStatus(SearchMultiSelectField $employeeStatus) {
        $this->employeeStatus = $employeeStatus;
        return $this;
    }

    /**
     * Get employeeStatus
     *
     * @return SearchMultiSelectField
     */
    public function getEmployeeStatus() {
        return $this->employeeStatus;
    }


    /**
     * Set employeeType
     *
     * @param SearchMultiSelectField $employeeType
     * @return EmployeeSearchBasic
     */
    public function setEmployeeType(SearchMultiSelectField $employeeType) {
        $this->employeeType = $employeeType;
        return $this;
    }

    /**
     * Get employeeType
     *
     * @return SearchMultiSelectField
     */
    public function getEmployeeType() {
        return $this->employeeType;
    }


    /**
     * Set employeeTypeKpi
     *
     * @param SearchBooleanField $employeeTypeKpi
     * @return EmployeeSearchBasic
     */
    public function setEmployeeTypeKpi(SearchBooleanField $employeeTypeKpi) {
        $this->employeeTypeKpi = $employeeTypeKpi;
        return $this;
    }

    /**
     * Get employeeTypeKpi
     *
     * @return SearchBooleanField
     */
    public function getEmployeeTypeKpi() {
        return $this->employeeTypeKpi;
    }


    /**
     * Set entityId
     *
     * @param SearchStringField $entityId
     * @return EmployeeSearchBasic
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
     * Set ethnicity
     *
     * @param SearchMultiSelectField $ethnicity
     * @return EmployeeSearchBasic
     */
    public function setEthnicity(SearchMultiSelectField $ethnicity) {
        $this->ethnicity = $ethnicity;
        return $this;
    }

    /**
     * Get ethnicity
     *
     * @return SearchMultiSelectField
     */
    public function getEthnicity() {
        return $this->ethnicity;
    }


    /**
     * Set expenseLimit
     *
     * @param SearchDoubleField $expenseLimit
     * @return EmployeeSearchBasic
     */
    public function setExpenseLimit(SearchDoubleField $expenseLimit) {
        $this->expenseLimit = $expenseLimit;
        return $this;
    }

    /**
     * Get expenseLimit
     *
     * @return SearchDoubleField
     */
    public function getExpenseLimit() {
        return $this->expenseLimit;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set firstName
     *
     * @param SearchStringField $firstName
     * @return EmployeeSearchBasic
     */
    public function setFirstName(SearchStringField $firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return SearchStringField
     */
    public function getFirstName() {
        return $this->firstName;
    }


    /**
     * Set gender
     *
     * @param SearchEnumMultiSelectField $gender
     * @return EmployeeSearchBasic
     */
    public function setGender(SearchEnumMultiSelectField $gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGender() {
        return $this->gender;
    }


    /**
     * Set giveAccess
     *
     * @param SearchBooleanField $giveAccess
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set group
     *
     * @param SearchMultiSelectField $group
     * @return EmployeeSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group) {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return SearchMultiSelectField
     */
    public function getGroup() {
        return $this->group;
    }


    /**
     * Set hireDate
     *
     * @param SearchDateField $hireDate
     * @return EmployeeSearchBasic
     */
    public function setHireDate(SearchDateField $hireDate) {
        $this->hireDate = $hireDate;
        return $this;
    }

    /**
     * Get hireDate
     *
     * @return SearchDateField
     */
    public function getHireDate() {
        return $this->hireDate;
    }


    /**
     * Set I9Verified
     *
     * @param SearchBooleanField $I9Verified
     * @return EmployeeSearchBasic
     */
    public function setI9Verified(SearchBooleanField $I9Verified) {
        $this->I9Verified = $I9Verified;
        return $this;
    }

    /**
     * Get I9Verified
     *
     * @return SearchBooleanField
     */
    public function getI9Verified() {
        return $this->I9Verified;
    }


    /**
     * Set image
     *
     * @param SearchStringField $image
     * @return EmployeeSearchBasic
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
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return EmployeeSearchBasic
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
     * Set isJobResource
     *
     * @param SearchBooleanField $isJobResource
     * @return EmployeeSearchBasic
     */
    public function setIsJobResource(SearchBooleanField $isJobResource) {
        $this->isJobResource = $isJobResource;
        return $this;
    }

    /**
     * Get isJobResource
     *
     * @return SearchBooleanField
     */
    public function getIsJobResource() {
        return $this->isJobResource;
    }


    /**
     * Set isTemplate
     *
     * @param SearchBooleanField $isTemplate
     * @return EmployeeSearchBasic
     */
    public function setIsTemplate(SearchBooleanField $isTemplate) {
        $this->isTemplate = $isTemplate;
        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return SearchBooleanField
     */
    public function getIsTemplate() {
        return $this->isTemplate;
    }


    /**
     * Set jobDescription
     *
     * @param SearchStringField $jobDescription
     * @return EmployeeSearchBasic
     */
    public function setJobDescription(SearchStringField $jobDescription) {
        $this->jobDescription = $jobDescription;
        return $this;
    }

    /**
     * Get jobDescription
     *
     * @return SearchStringField
     */
    public function getJobDescription() {
        return $this->jobDescription;
    }


    /**
     * Set laborCost
     *
     * @param SearchDoubleField $laborCost
     * @return EmployeeSearchBasic
     */
    public function setLaborCost(SearchDoubleField $laborCost) {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * Get laborCost
     *
     * @return SearchDoubleField
     */
    public function getLaborCost() {
        return $this->laborCost;
    }


    /**
     * Set language
     *
     * @param SearchEnumMultiSelectField $language
     * @return EmployeeSearchBasic
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
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return EmployeeSearchBasic
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
     * Set lastName
     *
     * @param SearchStringField $lastName
     * @return EmployeeSearchBasic
     */
    public function setLastName(SearchStringField $lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return SearchStringField
     */
    public function getLastName() {
        return $this->lastName;
    }


    /**
     * Set lastPaidDate
     *
     * @param SearchDateField $lastPaidDate
     * @return EmployeeSearchBasic
     */
    public function setLastPaidDate(SearchDateField $lastPaidDate) {
        $this->lastPaidDate = $lastPaidDate;
        return $this;
    }

    /**
     * Get lastPaidDate
     *
     * @return SearchDateField
     */
    public function getLastPaidDate() {
        return $this->lastPaidDate;
    }


    /**
     * Set lastReviewDate
     *
     * @param SearchDateField $lastReviewDate
     * @return EmployeeSearchBasic
     */
    public function setLastReviewDate(SearchDateField $lastReviewDate) {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Get lastReviewDate
     *
     * @return SearchDateField
     */
    public function getLastReviewDate() {
        return $this->lastReviewDate;
    }


    /**
     * Set level
     *
     * @param SearchEnumMultiSelectField $level
     * @return EmployeeSearchBasic
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
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return EmployeeSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set maritalStatus
     *
     * @param SearchMultiSelectField $maritalStatus
     * @return EmployeeSearchBasic
     */
    public function setMaritalStatus(SearchMultiSelectField $maritalStatus) {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return SearchMultiSelectField
     */
    public function getMaritalStatus() {
        return $this->maritalStatus;
    }


    /**
     * Set middleName
     *
     * @param SearchStringField $middleName
     * @return EmployeeSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName) {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Get middleName
     *
     * @return SearchStringField
     */
    public function getMiddleName() {
        return $this->middleName;
    }


    /**
     * Set nextReviewDate
     *
     * @param SearchDateField $nextReviewDate
     * @return EmployeeSearchBasic
     */
    public function setNextReviewDate(SearchDateField $nextReviewDate) {
        $this->nextReviewDate = $nextReviewDate;
        return $this;
    }

    /**
     * Get nextReviewDate
     *
     * @return SearchDateField
     */
    public function getNextReviewDate() {
        return $this->nextReviewDate;
    }


    /**
     * Set offlineAccess
     *
     * @param SearchBooleanField $offlineAccess
     * @return EmployeeSearchBasic
     */
    public function setOfflineAccess(SearchBooleanField $offlineAccess) {
        $this->offlineAccess = $offlineAccess;
        return $this;
    }

    /**
     * Get offlineAccess
     *
     * @return SearchBooleanField
     */
    public function getOfflineAccess() {
        return $this->offlineAccess;
    }


    /**
     * Set payFrequency
     *
     * @param SearchEnumMultiSelectField $payFrequency
     * @return EmployeeSearchBasic
     */
    public function setPayFrequency(SearchEnumMultiSelectField $payFrequency) {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * Get payFrequency
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPayFrequency() {
        return $this->payFrequency;
    }


    /**
     * Set permChangeDate
     *
     * @param SearchDateField $permChangeDate
     * @return EmployeeSearchBasic
     */
    public function setPermChangeDate(SearchDateField $permChangeDate) {
        $this->permChangeDate = $permChangeDate;
        return $this;
    }

    /**
     * Get permChangeDate
     *
     * @return SearchDateField
     */
    public function getPermChangeDate() {
        return $this->permChangeDate;
    }


    /**
     * Set permission
     *
     * @param SearchEnumMultiSelectField $permission
     * @return EmployeeSearchBasic
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
     * Set permissionChange
     *
     * @param SearchEnumMultiSelectField $permissionChange
     * @return EmployeeSearchBasic
     */
    public function setPermissionChange(SearchEnumMultiSelectField $permissionChange) {
        $this->permissionChange = $permissionChange;
        return $this;
    }

    /**
     * Get permissionChange
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPermissionChange() {
        return $this->permissionChange;
    }


    /**
     * Set phone
     *
     * @param SearchStringField $phone
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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
     * Set primaryEarningAmount
     *
     * @param SearchDoubleField $primaryEarningAmount
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningAmount(SearchDoubleField $primaryEarningAmount) {
        $this->primaryEarningAmount = $primaryEarningAmount;
        return $this;
    }

    /**
     * Get primaryEarningAmount
     *
     * @return SearchDoubleField
     */
    public function getPrimaryEarningAmount() {
        return $this->primaryEarningAmount;
    }


    /**
     * Set primaryEarningItem
     *
     * @param SearchStringField $primaryEarningItem
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningItem(SearchStringField $primaryEarningItem) {
        $this->primaryEarningItem = $primaryEarningItem;
        return $this;
    }

    /**
     * Get primaryEarningItem
     *
     * @return SearchStringField
     */
    public function getPrimaryEarningItem() {
        return $this->primaryEarningItem;
    }


    /**
     * Set primaryEarningType
     *
     * @param SearchStringField $primaryEarningType
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningType(SearchStringField $primaryEarningType) {
        $this->primaryEarningType = $primaryEarningType;
        return $this;
    }

    /**
     * Get primaryEarningType
     *
     * @return SearchStringField
     */
    public function getPrimaryEarningType() {
        return $this->primaryEarningType;
    }


    /**
     * Set purchaseOrderApprovalLimit
     *
     * @param SearchDoubleField $purchaseOrderApprovalLimit
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderApprovalLimit(SearchDoubleField $purchaseOrderApprovalLimit) {
        $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
        return $this;
    }

    /**
     * Get purchaseOrderApprovalLimit
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderApprovalLimit() {
        return $this->purchaseOrderApprovalLimit;
    }


    /**
     * Set purchaseOrderApprover
     *
     * @param SearchMultiSelectField $purchaseOrderApprover
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderApprover(SearchMultiSelectField $purchaseOrderApprover) {
        $this->purchaseOrderApprover = $purchaseOrderApprover;
        return $this;
    }

    /**
     * Get purchaseOrderApprover
     *
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrderApprover() {
        return $this->purchaseOrderApprover;
    }


    /**
     * Set purchaseOrderLimit
     *
     * @param SearchDoubleField $purchaseOrderLimit
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderLimit(SearchDoubleField $purchaseOrderLimit) {
        $this->purchaseOrderLimit = $purchaseOrderLimit;
        return $this;
    }

    /**
     * Get purchaseOrderLimit
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderLimit() {
        return $this->purchaseOrderLimit;
    }


    /**
     * Set releaseDate
     *
     * @param SearchDateField $releaseDate
     * @return EmployeeSearchBasic
     */
    public function setReleaseDate(SearchDateField $releaseDate) {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return SearchDateField
     */
    public function getReleaseDate() {
        return $this->releaseDate;
    }


    /**
     * Set residentStatus
     *
     * @param SearchMultiSelectField $residentStatus
     * @return EmployeeSearchBasic
     */
    public function setResidentStatus(SearchMultiSelectField $residentStatus) {
        $this->residentStatus = $residentStatus;
        return $this;
    }

    /**
     * Get residentStatus
     *
     * @return SearchMultiSelectField
     */
    public function getResidentStatus() {
        return $this->residentStatus;
    }


    /**
     * Set role
     *
     * @param SearchMultiSelectField $role
     * @return EmployeeSearchBasic
     */
    public function setRole(SearchMultiSelectField $role) {
        $this->role = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return SearchMultiSelectField
     */
    public function getRole() {
        return $this->role;
    }


    /**
     * Set roleChange
     *
     * @param SearchMultiSelectField $roleChange
     * @return EmployeeSearchBasic
     */
    public function setRoleChange(SearchMultiSelectField $roleChange) {
        $this->roleChange = $roleChange;
        return $this;
    }

    /**
     * Get roleChange
     *
     * @return SearchMultiSelectField
     */
    public function getRoleChange() {
        return $this->roleChange;
    }


    /**
     * Set roleChangeDate
     *
     * @param SearchDateField $roleChangeDate
     * @return EmployeeSearchBasic
     */
    public function setRoleChangeDate(SearchDateField $roleChangeDate) {
        $this->roleChangeDate = $roleChangeDate;
        return $this;
    }

    /**
     * Get roleChangeDate
     *
     * @return SearchDateField
     */
    public function getRoleChangeDate() {
        return $this->roleChangeDate;
    }


    /**
     * Set salesRep
     *
     * @param SearchBooleanField $salesRep
     * @return EmployeeSearchBasic
     */
    public function setSalesRep(SearchBooleanField $salesRep) {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * Get salesRep
     *
     * @return SearchBooleanField
     */
    public function getSalesRep() {
        return $this->salesRep;
    }


    /**
     * Set salesRole
     *
     * @param SearchMultiSelectField $salesRole
     * @return EmployeeSearchBasic
     */
    public function setSalesRole(SearchMultiSelectField $salesRole) {
        $this->salesRole = $salesRole;
        return $this;
    }

    /**
     * Get salesRole
     *
     * @return SearchMultiSelectField
     */
    public function getSalesRole() {
        return $this->salesRole;
    }


    /**
     * Set salutation
     *
     * @param SearchStringField $salutation
     * @return EmployeeSearchBasic
     */
    public function setSalutation(SearchStringField $salutation) {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * Get salutation
     *
     * @return SearchStringField
     */
    public function getSalutation() {
        return $this->salutation;
    }


    /**
     * Set socialSecurityNumber
     *
     * @param SearchStringField $socialSecurityNumber
     * @return EmployeeSearchBasic
     */
    public function setSocialSecurityNumber(SearchStringField $socialSecurityNumber) {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * Get socialSecurityNumber
     *
     * @return SearchStringField
     */
    public function getSocialSecurityNumber() {
        return $this->socialSecurityNumber;
    }


    /**
     * Set state
     *
     * @param SearchStringField $state
     * @return EmployeeSearchBasic
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
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return EmployeeSearchBasic
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
     * Set supervisor
     *
     * @param SearchMultiSelectField $supervisor
     * @return EmployeeSearchBasic
     */
    public function setSupervisor(SearchMultiSelectField $supervisor) {
        $this->supervisor = $supervisor;
        return $this;
    }

    /**
     * Get supervisor
     *
     * @return SearchMultiSelectField
     */
    public function getSupervisor() {
        return $this->supervisor;
    }


    /**
     * Set supportRep
     *
     * @param SearchBooleanField $supportRep
     * @return EmployeeSearchBasic
     */
    public function setSupportRep(SearchBooleanField $supportRep) {
        $this->supportRep = $supportRep;
        return $this;
    }

    /**
     * Get supportRep
     *
     * @return SearchBooleanField
     */
    public function getSupportRep() {
        return $this->supportRep;
    }


    /**
     * Set timeApprover
     *
     * @param SearchMultiSelectField $timeApprover
     * @return EmployeeSearchBasic
     */
    public function setTimeApprover(SearchMultiSelectField $timeApprover) {
        $this->timeApprover = $timeApprover;
        return $this;
    }

    /**
     * Get timeApprover
     *
     * @return SearchMultiSelectField
     */
    public function getTimeApprover() {
        return $this->timeApprover;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return EmployeeSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set usePerquest
     *
     * @param SearchBooleanField $usePerquest
     * @return EmployeeSearchBasic
     */
    public function setUsePerquest(SearchBooleanField $usePerquest) {
        $this->usePerquest = $usePerquest;
        return $this;
    }

    /**
     * Get usePerquest
     *
     * @return SearchBooleanField
     */
    public function getUsePerquest() {
        return $this->usePerquest;
    }


    /**
     * Set useTimeData
     *
     * @param SearchBooleanField $useTimeData
     * @return EmployeeSearchBasic
     */
    public function setUseTimeData(SearchBooleanField $useTimeData) {
        $this->useTimeData = $useTimeData;
        return $this;
    }

    /**
     * Get useTimeData
     *
     * @return SearchBooleanField
     */
    public function getUseTimeData() {
        return $this->useTimeData;
    }


    /**
     * Set visaExpDate
     *
     * @param SearchDateField $visaExpDate
     * @return EmployeeSearchBasic
     */
    public function setVisaExpDate(SearchDateField $visaExpDate) {
        $this->visaExpDate = $visaExpDate;
        return $this;
    }

    /**
     * Get visaExpDate
     *
     * @return SearchDateField
     */
    public function getVisaExpDate() {
        return $this->visaExpDate;
    }


    /**
     * Set visaType
     *
     * @param SearchMultiSelectField $visaType
     * @return EmployeeSearchBasic
     */
    public function setVisaType(SearchMultiSelectField $visaType) {
        $this->visaType = $visaType;
        return $this;
    }

    /**
     * Get visaType
     *
     * @return SearchMultiSelectField
     */
    public function getVisaType() {
        return $this->visaType;
    }


    /**
     * Set withholding
     *
     * @param SearchMultiSelectField $withholding
     * @return EmployeeSearchBasic
     */
    public function setWithholding(SearchMultiSelectField $withholding) {
        $this->withholding = $withholding;
        return $this;
    }

    /**
     * Get withholding
     *
     * @return SearchMultiSelectField
     */
    public function getWithholding() {
        return $this->withholding;
    }


    /**
     * Set workCalendar
     *
     * @param SearchMultiSelectField $workCalendar
     * @return EmployeeSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar) {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * Get workCalendar
     *
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar() {
        return $this->workCalendar;
    }


    /**
     * Set workplace
     *
     * @param SearchMultiSelectField $workplace
     * @return EmployeeSearchBasic
     */
    public function setWorkplace(SearchMultiSelectField $workplace) {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * Get workplace
     *
     * @return SearchMultiSelectField
     */
    public function getWorkplace() {
        return $this->workplace;
    }


    /**
     * Set zipCode
     *
     * @param SearchStringField $zipCode
     * @return EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
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