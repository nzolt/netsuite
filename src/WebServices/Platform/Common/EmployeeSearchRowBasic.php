<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * EmployeeSearchRowBasic
 */
class EmployeeSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accountNumber;

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
     * @var SearchColumnStringField[]
     */
    public $alienNumber;

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
     * @var SearchColumnDoubleField[]
     */
    public $approvalLimit;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $approver;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $attention;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $authWorkDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress;

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
    public $billingClass;

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
    public $birthDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $birthDay;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $city;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $comments;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $concurrentWebServicesUser;

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
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $eligibleForCommission;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $employeeStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $employeeType;

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
    public $ethnicity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $expenseLimit;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fax;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $firstName;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $gender;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $giveAccess;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $hireDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $homePhone;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $i9Verified;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $image;

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
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isJobResource;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSalesRep;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSupportRep;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isTemplate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $laborCost;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $language;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $lastName;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastPaidDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastReviewDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $level;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $maritalStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $middleName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $mobilePhone;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $nextReviewDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $offlineAccess;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $payFrequency;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $permChangeDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $permChangeLevel;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $permission;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $permissionChange;

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
     * @var SearchColumnDoubleField[]
     */
    public $primaryEarningAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $primaryEarningItem;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $primaryEarningType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderApprovalLimit;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $purchaseOrderApprover;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderLimit;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $releaseDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $residentStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $role;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $roleChange;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $roleChangeAction;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $roleChangeDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesRole;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $salutation;

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
     * @var SearchColumnStringField[]
     */
    public $socialSecurityNumber;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
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
     * @var SearchColumnSelectField[]
     */
    public $supervisor;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $timeApprover;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $usePerquest;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $useTimeData;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $visaExpDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $visaType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $workCalendar;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $workplace;

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
    	"address" => "SearchColumnStringField[]",
    	"address1" => "SearchColumnStringField[]",
    	"address2" => "SearchColumnStringField[]",
    	"address3" => "SearchColumnStringField[]",
    	"addressee" => "SearchColumnStringField[]",
    	"addressInternalId" => "SearchColumnStringField[]",
    	"addressLabel" => "SearchColumnStringField[]",
    	"addressPhone" => "SearchColumnStringField[]",
    	"alienNumber" => "SearchColumnStringField[]",
    	"altEmail" => "SearchColumnStringField[]",
    	"altName" => "SearchColumnStringField[]",
    	"altPhone" => "SearchColumnStringField[]",
    	"approvalLimit" => "SearchColumnDoubleField[]",
    	"approver" => "SearchColumnSelectField[]",
    	"attention" => "SearchColumnStringField[]",
    	"authWorkDate" => "SearchColumnDateField[]",
    	"billAddress" => "SearchColumnStringField[]",
    	"billAddress1" => "SearchColumnStringField[]",
    	"billAddress2" => "SearchColumnStringField[]",
    	"billAddress3" => "SearchColumnStringField[]",
    	"billAddressee" => "SearchColumnStringField[]",
    	"billAttention" => "SearchColumnStringField[]",
    	"billCity" => "SearchColumnStringField[]",
    	"billCountry" => "SearchColumnEnumSelectField[]",
    	"billCountryCode" => "SearchColumnStringField[]",
    	"billingClass" => "SearchColumnSelectField[]",
    	"billPhone" => "SearchColumnStringField[]",
    	"billState" => "SearchColumnStringField[]",
    	"billZipCode" => "SearchColumnStringField[]",
    	"birthDate" => "SearchColumnDateField[]",
    	"birthDay" => "SearchColumnDateField[]",
    	"city" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"comments" => "SearchColumnStringField[]",
    	"concurrentWebServicesUser" => "SearchColumnBooleanField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"countryCode" => "SearchColumnStringField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"department" => "SearchColumnSelectField[]",
    	"eligibleForCommission" => "SearchColumnBooleanField[]",
    	"email" => "SearchColumnStringField[]",
    	"employeeStatus" => "SearchColumnSelectField[]",
    	"employeeType" => "SearchColumnSelectField[]",
    	"entityId" => "SearchColumnStringField[]",
    	"entityNumber" => "SearchColumnLongField[]",
    	"ethnicity" => "SearchColumnSelectField[]",
    	"expenseLimit" => "SearchColumnDoubleField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"fax" => "SearchColumnStringField[]",
    	"firstName" => "SearchColumnStringField[]",
    	"gender" => "SearchColumnEnumSelectField[]",
    	"giveAccess" => "SearchColumnBooleanField[]",
    	"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
    	"hireDate" => "SearchColumnDateField[]",
    	"homePhone" => "SearchColumnStringField[]",
    	"i9Verified" => "SearchColumnBooleanField[]",
    	"image" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isDefaultBilling" => "SearchColumnBooleanField[]",
    	"isDefaultShipping" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isJobResource" => "SearchColumnBooleanField[]",
    	"isSalesRep" => "SearchColumnBooleanField[]",
    	"isSupportRep" => "SearchColumnBooleanField[]",
    	"isTemplate" => "SearchColumnBooleanField[]",
    	"laborCost" => "SearchColumnDoubleField[]",
    	"language" => "SearchColumnEnumSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"lastName" => "SearchColumnStringField[]",
    	"lastPaidDate" => "SearchColumnDateField[]",
    	"lastReviewDate" => "SearchColumnDateField[]",
    	"level" => "SearchColumnEnumSelectField[]",
    	"location" => "SearchColumnSelectField[]",
    	"maritalStatus" => "SearchColumnSelectField[]",
    	"middleName" => "SearchColumnStringField[]",
    	"mobilePhone" => "SearchColumnStringField[]",
    	"nextReviewDate" => "SearchColumnDateField[]",
    	"offlineAccess" => "SearchColumnBooleanField[]",
    	"payFrequency" => "SearchColumnEnumSelectField[]",
    	"permChangeDate" => "SearchColumnDateField[]",
    	"permChangeLevel" => "SearchColumnStringField[]",
    	"permission" => "SearchColumnEnumSelectField[]",
    	"permissionChange" => "SearchColumnEnumSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"phoneticName" => "SearchColumnStringField[]",
    	"primaryEarningAmount" => "SearchColumnDoubleField[]",
    	"primaryEarningItem" => "SearchColumnStringField[]",
    	"primaryEarningType" => "SearchColumnStringField[]",
    	"purchaseOrderApprovalLimit" => "SearchColumnDoubleField[]",
    	"purchaseOrderApprover" => "SearchColumnSelectField[]",
    	"purchaseOrderLimit" => "SearchColumnDoubleField[]",
    	"releaseDate" => "SearchColumnDateField[]",
    	"residentStatus" => "SearchColumnSelectField[]",
    	"role" => "SearchColumnSelectField[]",
    	"roleChange" => "SearchColumnStringField[]",
    	"roleChangeAction" => "SearchColumnStringField[]",
    	"roleChangeDate" => "SearchColumnDateField[]",
    	"salesRole" => "SearchColumnSelectField[]",
    	"salutation" => "SearchColumnStringField[]",
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
    	"socialSecurityNumber" => "SearchColumnStringField[]",
    	"state" => "SearchColumnEnumSelectField[]",
    	"subscription" => "SearchColumnSelectField[]",
    	"subscriptionDate" => "SearchColumnDateField[]",
    	"subscriptionStatus" => "SearchColumnBooleanField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"supervisor" => "SearchColumnSelectField[]",
    	"timeApprover" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"usePerquest" => "SearchColumnBooleanField[]",
    	"useTimeData" => "SearchColumnBooleanField[]",
    	"visaExpDate" => "SearchColumnDateField[]",
    	"visaType" => "SearchColumnSelectField[]",
    	"workCalendar" => "SearchColumnStringField[]",
    	"workplace" => "SearchColumnSelectField[]",
    	"zipCode" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return EmployeeSearchRowBasic
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