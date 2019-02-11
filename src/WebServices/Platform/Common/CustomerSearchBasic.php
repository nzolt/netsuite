<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * CustomerSearchBasic
 */
class CustomerSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchStringField
     */
    protected $accountNumber;

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
    protected $attention;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $availableOffline;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $balance;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAddress;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $boughtAmount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $boughtDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buyingReason;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $buyingTimeFrame;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccCustomerCode;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $ccDefault;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $ccExpDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccHolderName;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $ccState;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $ccStateFrom;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $ccType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $city;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $classBought;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $comments;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $companyName;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $consolBalance;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $consolDaysOverdue;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $consolDepositBalance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $consolOverdueBalance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $consolUnbilledOrders;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $contact;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $contribution;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $conversionDate;

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
     * @var SearchEnumMultiSelectField
     */
    protected $creditHold;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $creditHoldOverride;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $creditLimit;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $custStage;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $custStatus;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateClosed;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysOverdue;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $defaultOrderPriority;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $depositBalance;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $deptBought;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $drAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $emailPreference;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $emailTransactions;

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
     * @var SearchMultiSelectField
     */
    protected $entityStatus;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estimatedBudget;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $explicitConversion;

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
    protected $faxTransactions;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $firstName;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $firstOrderDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $firstSaleDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $fxAccount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxBalance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxConsolBalance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxConsolUnbilledOrders;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxUnbilledOrders;

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
     * @var SearchMultiSelectField
     */
    protected $groupPricingLevel;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $hasDuplicates;

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
    protected $isBudgetApproved;

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
    protected $isPerson;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isReportedLead;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isShipAddress;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $itemPricingLevel;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $itemPricingUnitPrice;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $itemsBought;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $itemsOrdered;

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
    protected $lastOrderDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastSaleDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $leadDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $leadSource;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $level;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $locationBought;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $manualCreditHold;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $merchantAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $middleName;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $monthlyClosing;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $onCreditHold;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $orderedAmount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $orderedDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $otherRelationships;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $overdueBalance;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parentItemsBought;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parentItemsOrdered;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partner;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $partnerContribution;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerRole;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerTeamMember;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pec;

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
     * @var SearchMultiSelectField
     */
    protected $priceLevel;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $pricingGroup;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $pricingItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $printTransactions;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $prospectDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $pstExempt;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $receivablesAccount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $reminderDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $resaleNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $role;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesReadiness;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesRep;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamMember;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamRole;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $salutation;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipAddress;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipComplete;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $shippingItem;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $stage;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $state;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidBought;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $taxable;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $terms;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $territory;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unbilledOrders;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $url;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $vatRegNumber;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $webLead;

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
    	"address" => "SearchStringField",
    	"addressee" => "SearchStringField",
    	"addressLabel" => "SearchStringField",
    	"addressPhone" => "SearchStringField",
    	"attention" => "SearchStringField",
    	"availableOffline" => "SearchBooleanField",
    	"balance" => "SearchDoubleField",
    	"billAddress" => "SearchStringField",
    	"boughtAmount" => "SearchDoubleField",
    	"boughtDate" => "SearchDateField",
    	"buyingReason" => "SearchMultiSelectField",
    	"buyingTimeFrame" => "SearchMultiSelectField",
    	"category" => "SearchMultiSelectField",
    	"ccCustomerCode" => "SearchStringField",
    	"ccDefault" => "SearchBooleanField",
    	"ccExpDate" => "SearchDateField",
    	"ccHolderName" => "SearchStringField",
    	"ccNumber" => "SearchStringField",
    	"ccState" => "SearchMultiSelectField",
    	"ccStateFrom" => "SearchDateField",
    	"ccType" => "SearchMultiSelectField",
    	"city" => "SearchStringField",
    	"classBought" => "SearchMultiSelectField",
    	"comments" => "SearchStringField",
    	"companyName" => "SearchStringField",
    	"consolBalance" => "SearchDoubleField",
    	"consolDaysOverdue" => "SearchLongField",
    	"consolDepositBalance" => "SearchDoubleField",
    	"consolOverdueBalance" => "SearchDoubleField",
    	"consolUnbilledOrders" => "SearchDoubleField",
    	"contact" => "SearchStringField",
    	"contribution" => "SearchLongField",
    	"conversionDate" => "SearchDateField",
    	"country" => "SearchEnumMultiSelectField",
    	"county" => "SearchStringField",
    	"creditHold" => "SearchEnumMultiSelectField",
    	"creditHoldOverride" => "SearchBooleanField",
    	"creditLimit" => "SearchDoubleField",
    	"currency" => "SearchMultiSelectField",
    	"custStage" => "SearchMultiSelectField",
    	"custStatus" => "SearchMultiSelectField",
    	"dateClosed" => "SearchDateField",
    	"dateCreated" => "SearchDateField",
    	"daysOverdue" => "SearchLongField",
    	"defaultOrderPriority" => "SearchDoubleField",
    	"depositBalance" => "SearchDoubleField",
    	"deptBought" => "SearchMultiSelectField",
    	"drAccount" => "SearchMultiSelectField",
    	"email" => "SearchStringField",
    	"emailPreference" => "SearchEnumMultiSelectField",
    	"emailTransactions" => "SearchBooleanField",
    	"endDate" => "SearchDateField",
    	"entityId" => "SearchStringField",
    	"entityStatus" => "SearchMultiSelectField",
    	"estimatedBudget" => "SearchDoubleField",
    	"explicitConversion" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"fax" => "SearchStringField",
    	"faxTransactions" => "SearchBooleanField",
    	"firstName" => "SearchStringField",
    	"firstOrderDate" => "SearchDateField",
    	"firstSaleDate" => "SearchDateField",
    	"fxAccount" => "SearchMultiSelectField",
    	"fxBalance" => "SearchDoubleField",
    	"fxConsolBalance" => "SearchDoubleField",
    	"fxConsolUnbilledOrders" => "SearchDoubleField",
    	"fxUnbilledOrders" => "SearchDoubleField",
    	"giveAccess" => "SearchBooleanField",
    	"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
    	"group" => "SearchMultiSelectField",
    	"groupPricingLevel" => "SearchMultiSelectField",
    	"hasDuplicates" => "SearchBooleanField",
    	"image" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"isBudgetApproved" => "SearchBooleanField",
    	"isDefaultBilling" => "SearchBooleanField",
    	"isDefaultShipping" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isPerson" => "SearchBooleanField",
    	"isReportedLead" => "SearchBooleanField",
    	"isShipAddress" => "SearchBooleanField",
    	"itemPricingLevel" => "SearchMultiSelectField",
    	"itemPricingUnitPrice" => "SearchDoubleField",
    	"itemsBought" => "SearchMultiSelectField",
    	"itemsOrdered" => "SearchMultiSelectField",
    	"language" => "SearchEnumMultiSelectField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastName" => "SearchStringField",
    	"lastOrderDate" => "SearchDateField",
    	"lastSaleDate" => "SearchDateField",
    	"leadDate" => "SearchDateField",
    	"leadSource" => "SearchMultiSelectField",
    	"level" => "SearchEnumMultiSelectField",
    	"locationBought" => "SearchMultiSelectField",
    	"manualCreditHold" => "SearchBooleanField",
    	"merchantAccount" => "SearchMultiSelectField",
    	"middleName" => "SearchStringField",
    	"monthlyClosing" => "SearchEnumMultiSelectField",
    	"onCreditHold" => "SearchBooleanField",
    	"orderedAmount" => "SearchDoubleField",
    	"orderedDate" => "SearchDateField",
    	"otherRelationships" => "SearchEnumMultiSelectField",
    	"overdueBalance" => "SearchDoubleField",
    	"parent" => "SearchMultiSelectField",
    	"parentItemsBought" => "SearchMultiSelectField",
    	"parentItemsOrdered" => "SearchMultiSelectField",
    	"partner" => "SearchMultiSelectField",
    	"partnerContribution" => "SearchLongField",
    	"partnerRole" => "SearchMultiSelectField",
    	"partnerTeamMember" => "SearchMultiSelectField",
    	"pec" => "SearchStringField",
    	"permission" => "SearchEnumMultiSelectField",
    	"phone" => "SearchStringField",
    	"phoneticName" => "SearchStringField",
    	"priceLevel" => "SearchMultiSelectField",
    	"pricingGroup" => "SearchMultiSelectField",
    	"pricingItem" => "SearchMultiSelectField",
    	"printTransactions" => "SearchBooleanField",
    	"prospectDate" => "SearchDateField",
    	"pstExempt" => "SearchBooleanField",
    	"receivablesAccount" => "SearchMultiSelectField",
    	"reminderDate" => "SearchDateField",
    	"resaleNumber" => "SearchStringField",
    	"role" => "SearchMultiSelectField",
    	"salesReadiness" => "SearchMultiSelectField",
    	"salesRep" => "SearchMultiSelectField",
    	"salesTeamMember" => "SearchMultiSelectField",
    	"salesTeamRole" => "SearchMultiSelectField",
    	"salutation" => "SearchStringField",
    	"shipAddress" => "SearchStringField",
    	"shipComplete" => "SearchBooleanField",
    	"shippingItem" => "SearchMultiSelectField",
    	"stage" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"state" => "SearchStringField",
    	"subsidBought" => "SearchMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"taxable" => "SearchBooleanField",
    	"terms" => "SearchMultiSelectField",
    	"territory" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"unbilledOrders" => "SearchDoubleField",
    	"url" => "SearchStringField",
    	"vatRegNumber" => "SearchStringField",
    	"webLead" => "SearchBooleanField",
    	"zipCode" => "SearchStringField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set accountNumber
     *
     * @param SearchStringField $accountNumber
     * @return CustomerSearchBasic
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
     * Set address
     *
     * @param SearchStringField $address
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set attention
     *
     * @param SearchStringField $attention
     * @return CustomerSearchBasic
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
     * Set availableOffline
     *
     * @param SearchBooleanField $availableOffline
     * @return CustomerSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline) {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * Get availableOffline
     *
     * @return SearchBooleanField
     */
    public function getAvailableOffline() {
        return $this->availableOffline;
    }


    /**
     * Set balance
     *
     * @param SearchDoubleField $balance
     * @return CustomerSearchBasic
     */
    public function setBalance(SearchDoubleField $balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return SearchDoubleField
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set billAddress
     *
     * @param SearchStringField $billAddress
     * @return CustomerSearchBasic
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
     * Set boughtAmount
     *
     * @param SearchDoubleField $boughtAmount
     * @return CustomerSearchBasic
     */
    public function setBoughtAmount(SearchDoubleField $boughtAmount) {
        $this->boughtAmount = $boughtAmount;
        return $this;
    }

    /**
     * Get boughtAmount
     *
     * @return SearchDoubleField
     */
    public function getBoughtAmount() {
        return $this->boughtAmount;
    }


    /**
     * Set boughtDate
     *
     * @param SearchDateField $boughtDate
     * @return CustomerSearchBasic
     */
    public function setBoughtDate(SearchDateField $boughtDate) {
        $this->boughtDate = $boughtDate;
        return $this;
    }

    /**
     * Get boughtDate
     *
     * @return SearchDateField
     */
    public function getBoughtDate() {
        return $this->boughtDate;
    }


    /**
     * Set buyingReason
     *
     * @param SearchMultiSelectField $buyingReason
     * @return CustomerSearchBasic
     */
    public function setBuyingReason(SearchMultiSelectField $buyingReason) {
        $this->buyingReason = $buyingReason;
        return $this;
    }

    /**
     * Get buyingReason
     *
     * @return SearchMultiSelectField
     */
    public function getBuyingReason() {
        return $this->buyingReason;
    }


    /**
     * Set buyingTimeFrame
     *
     * @param SearchMultiSelectField $buyingTimeFrame
     * @return CustomerSearchBasic
     */
    public function setBuyingTimeFrame(SearchMultiSelectField $buyingTimeFrame) {
        $this->buyingTimeFrame = $buyingTimeFrame;
        return $this;
    }

    /**
     * Get buyingTimeFrame
     *
     * @return SearchMultiSelectField
     */
    public function getBuyingTimeFrame() {
        return $this->buyingTimeFrame;
    }


    /**
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return CustomerSearchBasic
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
     * Set ccCustomerCode
     *
     * @param SearchStringField $ccCustomerCode
     * @return CustomerSearchBasic
     */
    public function setCcCustomerCode(SearchStringField $ccCustomerCode) {
        $this->ccCustomerCode = $ccCustomerCode;
        return $this;
    }

    /**
     * Get ccCustomerCode
     *
     * @return SearchStringField
     */
    public function getCcCustomerCode() {
        return $this->ccCustomerCode;
    }


    /**
     * Set ccDefault
     *
     * @param SearchBooleanField $ccDefault
     * @return CustomerSearchBasic
     */
    public function setCcDefault(SearchBooleanField $ccDefault) {
        $this->ccDefault = $ccDefault;
        return $this;
    }

    /**
     * Get ccDefault
     *
     * @return SearchBooleanField
     */
    public function getCcDefault() {
        return $this->ccDefault;
    }


    /**
     * Set ccExpDate
     *
     * @param SearchDateField $ccExpDate
     * @return CustomerSearchBasic
     */
    public function setCcExpDate(SearchDateField $ccExpDate) {
        $this->ccExpDate = $ccExpDate;
        return $this;
    }

    /**
     * Get ccExpDate
     *
     * @return SearchDateField
     */
    public function getCcExpDate() {
        return $this->ccExpDate;
    }


    /**
     * Set ccHolderName
     *
     * @param SearchStringField $ccHolderName
     * @return CustomerSearchBasic
     */
    public function setCcHolderName(SearchStringField $ccHolderName) {
        $this->ccHolderName = $ccHolderName;
        return $this;
    }

    /**
     * Get ccHolderName
     *
     * @return SearchStringField
     */
    public function getCcHolderName() {
        return $this->ccHolderName;
    }


    /**
     * Set ccNumber
     *
     * @param SearchStringField $ccNumber
     * @return CustomerSearchBasic
     */
    public function setCcNumber(SearchStringField $ccNumber) {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return SearchStringField
     */
    public function getCcNumber() {
        return $this->ccNumber;
    }


    /**
     * Set ccState
     *
     * @param SearchMultiSelectField $ccState
     * @return CustomerSearchBasic
     */
    public function setCcState(SearchMultiSelectField $ccState) {
        $this->ccState = $ccState;
        return $this;
    }

    /**
     * Get ccState
     *
     * @return SearchMultiSelectField
     */
    public function getCcState() {
        return $this->ccState;
    }


    /**
     * Set ccStateFrom
     *
     * @param SearchDateField $ccStateFrom
     * @return CustomerSearchBasic
     */
    public function setCcStateFrom(SearchDateField $ccStateFrom) {
        $this->ccStateFrom = $ccStateFrom;
        return $this;
    }

    /**
     * Get ccStateFrom
     *
     * @return SearchDateField
     */
    public function getCcStateFrom() {
        return $this->ccStateFrom;
    }


    /**
     * Set ccType
     *
     * @param SearchMultiSelectField $ccType
     * @return CustomerSearchBasic
     */
    public function setCcType(SearchMultiSelectField $ccType) {
        $this->ccType = $ccType;
        return $this;
    }

    /**
     * Get ccType
     *
     * @return SearchMultiSelectField
     */
    public function getCcType() {
        return $this->ccType;
    }


    /**
     * Set city
     *
     * @param SearchStringField $city
     * @return CustomerSearchBasic
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
     * Set classBought
     *
     * @param SearchMultiSelectField $classBought
     * @return CustomerSearchBasic
     */
    public function setClassBought(SearchMultiSelectField $classBought) {
        $this->classBought = $classBought;
        return $this;
    }

    /**
     * Get classBought
     *
     * @return SearchMultiSelectField
     */
    public function getClassBought() {
        return $this->classBought;
    }


    /**
     * Set comments
     *
     * @param SearchStringField $comments
     * @return CustomerSearchBasic
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
     * Set companyName
     *
     * @param SearchStringField $companyName
     * @return CustomerSearchBasic
     */
    public function setCompanyName(SearchStringField $companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return SearchStringField
     */
    public function getCompanyName() {
        return $this->companyName;
    }


    /**
     * Set consolBalance
     *
     * @param SearchDoubleField $consolBalance
     * @return CustomerSearchBasic
     */
    public function setConsolBalance(SearchDoubleField $consolBalance) {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * Get consolBalance
     *
     * @return SearchDoubleField
     */
    public function getConsolBalance() {
        return $this->consolBalance;
    }


    /**
     * Set consolDaysOverdue
     *
     * @param SearchLongField $consolDaysOverdue
     * @return CustomerSearchBasic
     */
    public function setConsolDaysOverdue(SearchLongField $consolDaysOverdue) {
        $this->consolDaysOverdue = $consolDaysOverdue;
        return $this;
    }

    /**
     * Get consolDaysOverdue
     *
     * @return SearchLongField
     */
    public function getConsolDaysOverdue() {
        return $this->consolDaysOverdue;
    }


    /**
     * Set consolDepositBalance
     *
     * @param SearchDoubleField $consolDepositBalance
     * @return CustomerSearchBasic
     */
    public function setConsolDepositBalance(SearchDoubleField $consolDepositBalance) {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * Get consolDepositBalance
     *
     * @return SearchDoubleField
     */
    public function getConsolDepositBalance() {
        return $this->consolDepositBalance;
    }


    /**
     * Set consolOverdueBalance
     *
     * @param SearchDoubleField $consolOverdueBalance
     * @return CustomerSearchBasic
     */
    public function setConsolOverdueBalance(SearchDoubleField $consolOverdueBalance) {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * Get consolOverdueBalance
     *
     * @return SearchDoubleField
     */
    public function getConsolOverdueBalance() {
        return $this->consolOverdueBalance;
    }


    /**
     * Set consolUnbilledOrders
     *
     * @param SearchDoubleField $consolUnbilledOrders
     * @return CustomerSearchBasic
     */
    public function setConsolUnbilledOrders(SearchDoubleField $consolUnbilledOrders) {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * Get consolUnbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getConsolUnbilledOrders() {
        return $this->consolUnbilledOrders;
    }


    /**
     * Set contact
     *
     * @param SearchStringField $contact
     * @return CustomerSearchBasic
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
     * Set contribution
     *
     * @param SearchLongField $contribution
     * @return CustomerSearchBasic
     */
    public function setContribution(SearchLongField $contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return SearchLongField
     */
    public function getContribution() {
        return $this->contribution;
    }


    /**
     * Set conversionDate
     *
     * @param SearchDateField $conversionDate
     * @return CustomerSearchBasic
     */
    public function setConversionDate(SearchDateField $conversionDate) {
        $this->conversionDate = $conversionDate;
        return $this;
    }

    /**
     * Get conversionDate
     *
     * @return SearchDateField
     */
    public function getConversionDate() {
        return $this->conversionDate;
    }


    /**
     * Set country
     *
     * @param SearchEnumMultiSelectField $country
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set creditHold
     *
     * @param SearchEnumMultiSelectField $creditHold
     * @return CustomerSearchBasic
     */
    public function setCreditHold(SearchEnumMultiSelectField $creditHold) {
        $this->creditHold = $creditHold;
        return $this;
    }

    /**
     * Get creditHold
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCreditHold() {
        return $this->creditHold;
    }


    /**
     * Set creditHoldOverride
     *
     * @param SearchBooleanField $creditHoldOverride
     * @return CustomerSearchBasic
     */
    public function setCreditHoldOverride(SearchBooleanField $creditHoldOverride) {
        $this->creditHoldOverride = $creditHoldOverride;
        return $this;
    }

    /**
     * Get creditHoldOverride
     *
     * @return SearchBooleanField
     */
    public function getCreditHoldOverride() {
        return $this->creditHoldOverride;
    }


    /**
     * Set creditLimit
     *
     * @param SearchDoubleField $creditLimit
     * @return CustomerSearchBasic
     */
    public function setCreditLimit(SearchDoubleField $creditLimit) {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return SearchDoubleField
     */
    public function getCreditLimit() {
        return $this->creditLimit;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return CustomerSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set custStage
     *
     * @param SearchMultiSelectField $custStage
     * @return CustomerSearchBasic
     */
    public function setCustStage(SearchMultiSelectField $custStage) {
        $this->custStage = $custStage;
        return $this;
    }

    /**
     * Get custStage
     *
     * @return SearchMultiSelectField
     */
    public function getCustStage() {
        return $this->custStage;
    }


    /**
     * Set custStatus
     *
     * @param SearchMultiSelectField $custStatus
     * @return CustomerSearchBasic
     */
    public function setCustStatus(SearchMultiSelectField $custStatus) {
        $this->custStatus = $custStatus;
        return $this;
    }

    /**
     * Get custStatus
     *
     * @return SearchMultiSelectField
     */
    public function getCustStatus() {
        return $this->custStatus;
    }


    /**
     * Set dateClosed
     *
     * @param SearchDateField $dateClosed
     * @return CustomerSearchBasic
     */
    public function setDateClosed(SearchDateField $dateClosed) {
        $this->dateClosed = $dateClosed;
        return $this;
    }

    /**
     * Get dateClosed
     *
     * @return SearchDateField
     */
    public function getDateClosed() {
        return $this->dateClosed;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return CustomerSearchBasic
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
     * Set daysOverdue
     *
     * @param SearchLongField $daysOverdue
     * @return CustomerSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue) {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * Get daysOverdue
     *
     * @return SearchLongField
     */
    public function getDaysOverdue() {
        return $this->daysOverdue;
    }


    /**
     * Set defaultOrderPriority
     *
     * @param SearchDoubleField $defaultOrderPriority
     * @return CustomerSearchBasic
     */
    public function setDefaultOrderPriority(SearchDoubleField $defaultOrderPriority) {
        $this->defaultOrderPriority = $defaultOrderPriority;
        return $this;
    }

    /**
     * Get defaultOrderPriority
     *
     * @return SearchDoubleField
     */
    public function getDefaultOrderPriority() {
        return $this->defaultOrderPriority;
    }


    /**
     * Set depositBalance
     *
     * @param SearchDoubleField $depositBalance
     * @return CustomerSearchBasic
     */
    public function setDepositBalance(SearchDoubleField $depositBalance) {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * Get depositBalance
     *
     * @return SearchDoubleField
     */
    public function getDepositBalance() {
        return $this->depositBalance;
    }


    /**
     * Set deptBought
     *
     * @param SearchMultiSelectField $deptBought
     * @return CustomerSearchBasic
     */
    public function setDeptBought(SearchMultiSelectField $deptBought) {
        $this->deptBought = $deptBought;
        return $this;
    }

    /**
     * Get deptBought
     *
     * @return SearchMultiSelectField
     */
    public function getDeptBought() {
        return $this->deptBought;
    }


    /**
     * Set drAccount
     *
     * @param SearchMultiSelectField $drAccount
     * @return CustomerSearchBasic
     */
    public function setDrAccount(SearchMultiSelectField $drAccount) {
        $this->drAccount = $drAccount;
        return $this;
    }

    /**
     * Get drAccount
     *
     * @return SearchMultiSelectField
     */
    public function getDrAccount() {
        return $this->drAccount;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return CustomerSearchBasic
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
     * Set emailPreference
     *
     * @param SearchEnumMultiSelectField $emailPreference
     * @return CustomerSearchBasic
     */
    public function setEmailPreference(SearchEnumMultiSelectField $emailPreference) {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * Get emailPreference
     *
     * @return SearchEnumMultiSelectField
     */
    public function getEmailPreference() {
        return $this->emailPreference;
    }


    /**
     * Set emailTransactions
     *
     * @param SearchBooleanField $emailTransactions
     * @return CustomerSearchBasic
     */
    public function setEmailTransactions(SearchBooleanField $emailTransactions) {
        $this->emailTransactions = $emailTransactions;
        return $this;
    }

    /**
     * Get emailTransactions
     *
     * @return SearchBooleanField
     */
    public function getEmailTransactions() {
        return $this->emailTransactions;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set entityStatus
     *
     * @param SearchMultiSelectField $entityStatus
     * @return CustomerSearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus) {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * Get entityStatus
     *
     * @return SearchMultiSelectField
     */
    public function getEntityStatus() {
        return $this->entityStatus;
    }


    /**
     * Set estimatedBudget
     *
     * @param SearchDoubleField $estimatedBudget
     * @return CustomerSearchBasic
     */
    public function setEstimatedBudget(SearchDoubleField $estimatedBudget) {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * Get estimatedBudget
     *
     * @return SearchDoubleField
     */
    public function getEstimatedBudget() {
        return $this->estimatedBudget;
    }


    /**
     * Set explicitConversion
     *
     * @param SearchBooleanField $explicitConversion
     * @return CustomerSearchBasic
     */
    public function setExplicitConversion(SearchBooleanField $explicitConversion) {
        $this->explicitConversion = $explicitConversion;
        return $this;
    }

    /**
     * Get explicitConversion
     *
     * @return SearchBooleanField
     */
    public function getExplicitConversion() {
        return $this->explicitConversion;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set faxTransactions
     *
     * @param SearchBooleanField $faxTransactions
     * @return CustomerSearchBasic
     */
    public function setFaxTransactions(SearchBooleanField $faxTransactions) {
        $this->faxTransactions = $faxTransactions;
        return $this;
    }

    /**
     * Get faxTransactions
     *
     * @return SearchBooleanField
     */
    public function getFaxTransactions() {
        return $this->faxTransactions;
    }


    /**
     * Set firstName
     *
     * @param SearchStringField $firstName
     * @return CustomerSearchBasic
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
     * Set firstOrderDate
     *
     * @param SearchDateField $firstOrderDate
     * @return CustomerSearchBasic
     */
    public function setFirstOrderDate(SearchDateField $firstOrderDate) {
        $this->firstOrderDate = $firstOrderDate;
        return $this;
    }

    /**
     * Get firstOrderDate
     *
     * @return SearchDateField
     */
    public function getFirstOrderDate() {
        return $this->firstOrderDate;
    }


    /**
     * Set firstSaleDate
     *
     * @param SearchDateField $firstSaleDate
     * @return CustomerSearchBasic
     */
    public function setFirstSaleDate(SearchDateField $firstSaleDate) {
        $this->firstSaleDate = $firstSaleDate;
        return $this;
    }

    /**
     * Get firstSaleDate
     *
     * @return SearchDateField
     */
    public function getFirstSaleDate() {
        return $this->firstSaleDate;
    }


    /**
     * Set fxAccount
     *
     * @param SearchMultiSelectField $fxAccount
     * @return CustomerSearchBasic
     */
    public function setFxAccount(SearchMultiSelectField $fxAccount) {
        $this->fxAccount = $fxAccount;
        return $this;
    }

    /**
     * Get fxAccount
     *
     * @return SearchMultiSelectField
     */
    public function getFxAccount() {
        return $this->fxAccount;
    }


    /**
     * Set fxBalance
     *
     * @param SearchDoubleField $fxBalance
     * @return CustomerSearchBasic
     */
    public function setFxBalance(SearchDoubleField $fxBalance) {
        $this->fxBalance = $fxBalance;
        return $this;
    }

    /**
     * Get fxBalance
     *
     * @return SearchDoubleField
     */
    public function getFxBalance() {
        return $this->fxBalance;
    }


    /**
     * Set fxConsolBalance
     *
     * @param SearchDoubleField $fxConsolBalance
     * @return CustomerSearchBasic
     */
    public function setFxConsolBalance(SearchDoubleField $fxConsolBalance) {
        $this->fxConsolBalance = $fxConsolBalance;
        return $this;
    }

    /**
     * Get fxConsolBalance
     *
     * @return SearchDoubleField
     */
    public function getFxConsolBalance() {
        return $this->fxConsolBalance;
    }


    /**
     * Set fxConsolUnbilledOrders
     *
     * @param SearchDoubleField $fxConsolUnbilledOrders
     * @return CustomerSearchBasic
     */
    public function setFxConsolUnbilledOrders(SearchDoubleField $fxConsolUnbilledOrders) {
        $this->fxConsolUnbilledOrders = $fxConsolUnbilledOrders;
        return $this;
    }

    /**
     * Get fxConsolUnbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getFxConsolUnbilledOrders() {
        return $this->fxConsolUnbilledOrders;
    }


    /**
     * Set fxUnbilledOrders
     *
     * @param SearchDoubleField $fxUnbilledOrders
     * @return CustomerSearchBasic
     */
    public function setFxUnbilledOrders(SearchDoubleField $fxUnbilledOrders) {
        $this->fxUnbilledOrders = $fxUnbilledOrders;
        return $this;
    }

    /**
     * Get fxUnbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getFxUnbilledOrders() {
        return $this->fxUnbilledOrders;
    }


    /**
     * Set giveAccess
     *
     * @param SearchBooleanField $giveAccess
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set groupPricingLevel
     *
     * @param SearchMultiSelectField $groupPricingLevel
     * @return CustomerSearchBasic
     */
    public function setGroupPricingLevel(SearchMultiSelectField $groupPricingLevel) {
        $this->groupPricingLevel = $groupPricingLevel;
        return $this;
    }

    /**
     * Get groupPricingLevel
     *
     * @return SearchMultiSelectField
     */
    public function getGroupPricingLevel() {
        return $this->groupPricingLevel;
    }


    /**
     * Set hasDuplicates
     *
     * @param SearchBooleanField $hasDuplicates
     * @return CustomerSearchBasic
     */
    public function setHasDuplicates(SearchBooleanField $hasDuplicates) {
        $this->hasDuplicates = $hasDuplicates;
        return $this;
    }

    /**
     * Get hasDuplicates
     *
     * @return SearchBooleanField
     */
    public function getHasDuplicates() {
        return $this->hasDuplicates;
    }


    /**
     * Set image
     *
     * @param SearchStringField $image
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set isBudgetApproved
     *
     * @param SearchBooleanField $isBudgetApproved
     * @return CustomerSearchBasic
     */
    public function setIsBudgetApproved(SearchBooleanField $isBudgetApproved) {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * Get isBudgetApproved
     *
     * @return SearchBooleanField
     */
    public function getIsBudgetApproved() {
        return $this->isBudgetApproved;
    }


    /**
     * Set isDefaultBilling
     *
     * @param SearchBooleanField $isDefaultBilling
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set isPerson
     *
     * @param SearchBooleanField $isPerson
     * @return CustomerSearchBasic
     */
    public function setIsPerson(SearchBooleanField $isPerson) {
        $this->isPerson = $isPerson;
        return $this;
    }

    /**
     * Get isPerson
     *
     * @return SearchBooleanField
     */
    public function getIsPerson() {
        return $this->isPerson;
    }


    /**
     * Set isReportedLead
     *
     * @param SearchBooleanField $isReportedLead
     * @return CustomerSearchBasic
     */
    public function setIsReportedLead(SearchBooleanField $isReportedLead) {
        $this->isReportedLead = $isReportedLead;
        return $this;
    }

    /**
     * Get isReportedLead
     *
     * @return SearchBooleanField
     */
    public function getIsReportedLead() {
        return $this->isReportedLead;
    }


    /**
     * Set isShipAddress
     *
     * @param SearchBooleanField $isShipAddress
     * @return CustomerSearchBasic
     */
    public function setIsShipAddress(SearchBooleanField $isShipAddress) {
        $this->isShipAddress = $isShipAddress;
        return $this;
    }

    /**
     * Get isShipAddress
     *
     * @return SearchBooleanField
     */
    public function getIsShipAddress() {
        return $this->isShipAddress;
    }


    /**
     * Set itemPricingLevel
     *
     * @param SearchMultiSelectField $itemPricingLevel
     * @return CustomerSearchBasic
     */
    public function setItemPricingLevel(SearchMultiSelectField $itemPricingLevel) {
        $this->itemPricingLevel = $itemPricingLevel;
        return $this;
    }

    /**
     * Get itemPricingLevel
     *
     * @return SearchMultiSelectField
     */
    public function getItemPricingLevel() {
        return $this->itemPricingLevel;
    }


    /**
     * Set itemPricingUnitPrice
     *
     * @param SearchDoubleField $itemPricingUnitPrice
     * @return CustomerSearchBasic
     */
    public function setItemPricingUnitPrice(SearchDoubleField $itemPricingUnitPrice) {
        $this->itemPricingUnitPrice = $itemPricingUnitPrice;
        return $this;
    }

    /**
     * Get itemPricingUnitPrice
     *
     * @return SearchDoubleField
     */
    public function getItemPricingUnitPrice() {
        return $this->itemPricingUnitPrice;
    }


    /**
     * Set itemsBought
     *
     * @param SearchMultiSelectField $itemsBought
     * @return CustomerSearchBasic
     */
    public function setItemsBought(SearchMultiSelectField $itemsBought) {
        $this->itemsBought = $itemsBought;
        return $this;
    }

    /**
     * Get itemsBought
     *
     * @return SearchMultiSelectField
     */
    public function getItemsBought() {
        return $this->itemsBought;
    }


    /**
     * Set itemsOrdered
     *
     * @param SearchMultiSelectField $itemsOrdered
     * @return CustomerSearchBasic
     */
    public function setItemsOrdered(SearchMultiSelectField $itemsOrdered) {
        $this->itemsOrdered = $itemsOrdered;
        return $this;
    }

    /**
     * Get itemsOrdered
     *
     * @return SearchMultiSelectField
     */
    public function getItemsOrdered() {
        return $this->itemsOrdered;
    }


    /**
     * Set language
     *
     * @param SearchEnumMultiSelectField $language
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set lastOrderDate
     *
     * @param SearchDateField $lastOrderDate
     * @return CustomerSearchBasic
     */
    public function setLastOrderDate(SearchDateField $lastOrderDate) {
        $this->lastOrderDate = $lastOrderDate;
        return $this;
    }

    /**
     * Get lastOrderDate
     *
     * @return SearchDateField
     */
    public function getLastOrderDate() {
        return $this->lastOrderDate;
    }


    /**
     * Set lastSaleDate
     *
     * @param SearchDateField $lastSaleDate
     * @return CustomerSearchBasic
     */
    public function setLastSaleDate(SearchDateField $lastSaleDate) {
        $this->lastSaleDate = $lastSaleDate;
        return $this;
    }

    /**
     * Get lastSaleDate
     *
     * @return SearchDateField
     */
    public function getLastSaleDate() {
        return $this->lastSaleDate;
    }


    /**
     * Set leadDate
     *
     * @param SearchDateField $leadDate
     * @return CustomerSearchBasic
     */
    public function setLeadDate(SearchDateField $leadDate) {
        $this->leadDate = $leadDate;
        return $this;
    }

    /**
     * Get leadDate
     *
     * @return SearchDateField
     */
    public function getLeadDate() {
        return $this->leadDate;
    }


    /**
     * Set leadSource
     *
     * @param SearchMultiSelectField $leadSource
     * @return CustomerSearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource) {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Get leadSource
     *
     * @return SearchMultiSelectField
     */
    public function getLeadSource() {
        return $this->leadSource;
    }


    /**
     * Set level
     *
     * @param SearchEnumMultiSelectField $level
     * @return CustomerSearchBasic
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
     * Set locationBought
     *
     * @param SearchMultiSelectField $locationBought
     * @return CustomerSearchBasic
     */
    public function setLocationBought(SearchMultiSelectField $locationBought) {
        $this->locationBought = $locationBought;
        return $this;
    }

    /**
     * Get locationBought
     *
     * @return SearchMultiSelectField
     */
    public function getLocationBought() {
        return $this->locationBought;
    }


    /**
     * Set manualCreditHold
     *
     * @param SearchBooleanField $manualCreditHold
     * @return CustomerSearchBasic
     */
    public function setManualCreditHold(SearchBooleanField $manualCreditHold) {
        $this->manualCreditHold = $manualCreditHold;
        return $this;
    }

    /**
     * Get manualCreditHold
     *
     * @return SearchBooleanField
     */
    public function getManualCreditHold() {
        return $this->manualCreditHold;
    }


    /**
     * Set merchantAccount
     *
     * @param SearchMultiSelectField $merchantAccount
     * @return CustomerSearchBasic
     */
    public function setMerchantAccount(SearchMultiSelectField $merchantAccount) {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * Get merchantAccount
     *
     * @return SearchMultiSelectField
     */
    public function getMerchantAccount() {
        return $this->merchantAccount;
    }


    /**
     * Set middleName
     *
     * @param SearchStringField $middleName
     * @return CustomerSearchBasic
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
     * Set monthlyClosing
     *
     * @param SearchEnumMultiSelectField $monthlyClosing
     * @return CustomerSearchBasic
     */
    public function setMonthlyClosing(SearchEnumMultiSelectField $monthlyClosing) {
        $this->monthlyClosing = $monthlyClosing;
        return $this;
    }

    /**
     * Get monthlyClosing
     *
     * @return SearchEnumMultiSelectField
     */
    public function getMonthlyClosing() {
        return $this->monthlyClosing;
    }


    /**
     * Set onCreditHold
     *
     * @param SearchBooleanField $onCreditHold
     * @return CustomerSearchBasic
     */
    public function setOnCreditHold(SearchBooleanField $onCreditHold) {
        $this->onCreditHold = $onCreditHold;
        return $this;
    }

    /**
     * Get onCreditHold
     *
     * @return SearchBooleanField
     */
    public function getOnCreditHold() {
        return $this->onCreditHold;
    }


    /**
     * Set orderedAmount
     *
     * @param SearchDoubleField $orderedAmount
     * @return CustomerSearchBasic
     */
    public function setOrderedAmount(SearchDoubleField $orderedAmount) {
        $this->orderedAmount = $orderedAmount;
        return $this;
    }

    /**
     * Get orderedAmount
     *
     * @return SearchDoubleField
     */
    public function getOrderedAmount() {
        return $this->orderedAmount;
    }


    /**
     * Set orderedDate
     *
     * @param SearchDateField $orderedDate
     * @return CustomerSearchBasic
     */
    public function setOrderedDate(SearchDateField $orderedDate) {
        $this->orderedDate = $orderedDate;
        return $this;
    }

    /**
     * Get orderedDate
     *
     * @return SearchDateField
     */
    public function getOrderedDate() {
        return $this->orderedDate;
    }


    /**
     * Set otherRelationships
     *
     * @param SearchEnumMultiSelectField $otherRelationships
     * @return CustomerSearchBasic
     */
    public function setOtherRelationships(SearchEnumMultiSelectField $otherRelationships) {
        $this->otherRelationships = $otherRelationships;
        return $this;
    }

    /**
     * Get otherRelationships
     *
     * @return SearchEnumMultiSelectField
     */
    public function getOtherRelationships() {
        return $this->otherRelationships;
    }


    /**
     * Set overdueBalance
     *
     * @param SearchDoubleField $overdueBalance
     * @return CustomerSearchBasic
     */
    public function setOverdueBalance(SearchDoubleField $overdueBalance) {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * Get overdueBalance
     *
     * @return SearchDoubleField
     */
    public function getOverdueBalance() {
        return $this->overdueBalance;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return CustomerSearchBasic
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
     * Set parentItemsBought
     *
     * @param SearchMultiSelectField $parentItemsBought
     * @return CustomerSearchBasic
     */
    public function setParentItemsBought(SearchMultiSelectField $parentItemsBought) {
        $this->parentItemsBought = $parentItemsBought;
        return $this;
    }

    /**
     * Get parentItemsBought
     *
     * @return SearchMultiSelectField
     */
    public function getParentItemsBought() {
        return $this->parentItemsBought;
    }


    /**
     * Set parentItemsOrdered
     *
     * @param SearchMultiSelectField $parentItemsOrdered
     * @return CustomerSearchBasic
     */
    public function setParentItemsOrdered(SearchMultiSelectField $parentItemsOrdered) {
        $this->parentItemsOrdered = $parentItemsOrdered;
        return $this;
    }

    /**
     * Get parentItemsOrdered
     *
     * @return SearchMultiSelectField
     */
    public function getParentItemsOrdered() {
        return $this->parentItemsOrdered;
    }


    /**
     * Set partner
     *
     * @param SearchMultiSelectField $partner
     * @return CustomerSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner) {
        $this->partner = $partner;
        return $this;
    }

    /**
     * Get partner
     *
     * @return SearchMultiSelectField
     */
    public function getPartner() {
        return $this->partner;
    }


    /**
     * Set partnerContribution
     *
     * @param SearchLongField $partnerContribution
     * @return CustomerSearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution) {
        $this->partnerContribution = $partnerContribution;
        return $this;
    }

    /**
     * Get partnerContribution
     *
     * @return SearchLongField
     */
    public function getPartnerContribution() {
        return $this->partnerContribution;
    }


    /**
     * Set partnerRole
     *
     * @param SearchMultiSelectField $partnerRole
     * @return CustomerSearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole) {
        $this->partnerRole = $partnerRole;
        return $this;
    }

    /**
     * Get partnerRole
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerRole() {
        return $this->partnerRole;
    }


    /**
     * Set partnerTeamMember
     *
     * @param SearchMultiSelectField $partnerTeamMember
     * @return CustomerSearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember) {
        $this->partnerTeamMember = $partnerTeamMember;
        return $this;
    }

    /**
     * Get partnerTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember() {
        return $this->partnerTeamMember;
    }


    /**
     * Set pec
     *
     * @param SearchStringField $pec
     * @return CustomerSearchBasic
     */
    public function setPec(SearchStringField $pec) {
        $this->pec = $pec;
        return $this;
    }

    /**
     * Get pec
     *
     * @return SearchStringField
     */
    public function getPec() {
        return $this->pec;
    }


    /**
     * Set permission
     *
     * @param SearchEnumMultiSelectField $permission
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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
     * Set priceLevel
     *
     * @param SearchMultiSelectField $priceLevel
     * @return CustomerSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel) {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * Get priceLevel
     *
     * @return SearchMultiSelectField
     */
    public function getPriceLevel() {
        return $this->priceLevel;
    }


    /**
     * Set pricingGroup
     *
     * @param SearchMultiSelectField $pricingGroup
     * @return CustomerSearchBasic
     */
    public function setPricingGroup(SearchMultiSelectField $pricingGroup) {
        $this->pricingGroup = $pricingGroup;
        return $this;
    }

    /**
     * Get pricingGroup
     *
     * @return SearchMultiSelectField
     */
    public function getPricingGroup() {
        return $this->pricingGroup;
    }


    /**
     * Set pricingItem
     *
     * @param SearchMultiSelectField $pricingItem
     * @return CustomerSearchBasic
     */
    public function setPricingItem(SearchMultiSelectField $pricingItem) {
        $this->pricingItem = $pricingItem;
        return $this;
    }

    /**
     * Get pricingItem
     *
     * @return SearchMultiSelectField
     */
    public function getPricingItem() {
        return $this->pricingItem;
    }


    /**
     * Set printTransactions
     *
     * @param SearchBooleanField $printTransactions
     * @return CustomerSearchBasic
     */
    public function setPrintTransactions(SearchBooleanField $printTransactions) {
        $this->printTransactions = $printTransactions;
        return $this;
    }

    /**
     * Get printTransactions
     *
     * @return SearchBooleanField
     */
    public function getPrintTransactions() {
        return $this->printTransactions;
    }


    /**
     * Set prospectDate
     *
     * @param SearchDateField $prospectDate
     * @return CustomerSearchBasic
     */
    public function setProspectDate(SearchDateField $prospectDate) {
        $this->prospectDate = $prospectDate;
        return $this;
    }

    /**
     * Get prospectDate
     *
     * @return SearchDateField
     */
    public function getProspectDate() {
        return $this->prospectDate;
    }


    /**
     * Set pstExempt
     *
     * @param SearchBooleanField $pstExempt
     * @return CustomerSearchBasic
     */
    public function setPstExempt(SearchBooleanField $pstExempt) {
        $this->pstExempt = $pstExempt;
        return $this;
    }

    /**
     * Get pstExempt
     *
     * @return SearchBooleanField
     */
    public function getPstExempt() {
        return $this->pstExempt;
    }


    /**
     * Set receivablesAccount
     *
     * @param SearchMultiSelectField $receivablesAccount
     * @return CustomerSearchBasic
     */
    public function setReceivablesAccount(SearchMultiSelectField $receivablesAccount) {
        $this->receivablesAccount = $receivablesAccount;
        return $this;
    }

    /**
     * Get receivablesAccount
     *
     * @return SearchMultiSelectField
     */
    public function getReceivablesAccount() {
        return $this->receivablesAccount;
    }


    /**
     * Set reminderDate
     *
     * @param SearchDateField $reminderDate
     * @return CustomerSearchBasic
     */
    public function setReminderDate(SearchDateField $reminderDate) {
        $this->reminderDate = $reminderDate;
        return $this;
    }

    /**
     * Get reminderDate
     *
     * @return SearchDateField
     */
    public function getReminderDate() {
        return $this->reminderDate;
    }


    /**
     * Set resaleNumber
     *
     * @param SearchStringField $resaleNumber
     * @return CustomerSearchBasic
     */
    public function setResaleNumber(SearchStringField $resaleNumber) {
        $this->resaleNumber = $resaleNumber;
        return $this;
    }

    /**
     * Get resaleNumber
     *
     * @return SearchStringField
     */
    public function getResaleNumber() {
        return $this->resaleNumber;
    }


    /**
     * Set role
     *
     * @param SearchMultiSelectField $role
     * @return CustomerSearchBasic
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
     * Set salesReadiness
     *
     * @param SearchMultiSelectField $salesReadiness
     * @return CustomerSearchBasic
     */
    public function setSalesReadiness(SearchMultiSelectField $salesReadiness) {
        $this->salesReadiness = $salesReadiness;
        return $this;
    }

    /**
     * Get salesReadiness
     *
     * @return SearchMultiSelectField
     */
    public function getSalesReadiness() {
        return $this->salesReadiness;
    }


    /**
     * Set salesRep
     *
     * @param SearchMultiSelectField $salesRep
     * @return CustomerSearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep) {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * Get salesRep
     *
     * @return SearchMultiSelectField
     */
    public function getSalesRep() {
        return $this->salesRep;
    }


    /**
     * Set salesTeamMember
     *
     * @param SearchMultiSelectField $salesTeamMember
     * @return CustomerSearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember) {
        $this->salesTeamMember = $salesTeamMember;
        return $this;
    }

    /**
     * Get salesTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember() {
        return $this->salesTeamMember;
    }


    /**
     * Set salesTeamRole
     *
     * @param SearchMultiSelectField $salesTeamRole
     * @return CustomerSearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole) {
        $this->salesTeamRole = $salesTeamRole;
        return $this;
    }

    /**
     * Get salesTeamRole
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole() {
        return $this->salesTeamRole;
    }


    /**
     * Set salutation
     *
     * @param SearchStringField $salutation
     * @return CustomerSearchBasic
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
     * Set shipAddress
     *
     * @param SearchStringField $shipAddress
     * @return CustomerSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress) {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * Get shipAddress
     *
     * @return SearchStringField
     */
    public function getShipAddress() {
        return $this->shipAddress;
    }


    /**
     * Set shipComplete
     *
     * @param SearchBooleanField $shipComplete
     * @return CustomerSearchBasic
     */
    public function setShipComplete(SearchBooleanField $shipComplete) {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * Get shipComplete
     *
     * @return SearchBooleanField
     */
    public function getShipComplete() {
        return $this->shipComplete;
    }


    /**
     * Set shippingItem
     *
     * @param SearchMultiSelectField $shippingItem
     * @return CustomerSearchBasic
     */
    public function setShippingItem(SearchMultiSelectField $shippingItem) {
        $this->shippingItem = $shippingItem;
        return $this;
    }

    /**
     * Get shippingItem
     *
     * @return SearchMultiSelectField
     */
    public function getShippingItem() {
        return $this->shippingItem;
    }


    /**
     * Set stage
     *
     * @param SearchEnumMultiSelectField $stage
     * @return CustomerSearchBasic
     */
    public function setStage(SearchEnumMultiSelectField $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return CustomerSearchBasic
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
     * Set state
     *
     * @param SearchStringField $state
     * @return CustomerSearchBasic
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
     * Set subsidBought
     *
     * @param SearchMultiSelectField $subsidBought
     * @return CustomerSearchBasic
     */
    public function setSubsidBought(SearchMultiSelectField $subsidBought) {
        $this->subsidBought = $subsidBought;
        return $this;
    }

    /**
     * Get subsidBought
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidBought() {
        return $this->subsidBought;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return CustomerSearchBasic
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
     * Set taxable
     *
     * @param SearchBooleanField $taxable
     * @return CustomerSearchBasic
     */
    public function setTaxable(SearchBooleanField $taxable) {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * Get taxable
     *
     * @return SearchBooleanField
     */
    public function getTaxable() {
        return $this->taxable;
    }


    /**
     * Set terms
     *
     * @param SearchMultiSelectField $terms
     * @return CustomerSearchBasic
     */
    public function setTerms(SearchMultiSelectField $terms) {
        $this->terms = $terms;
        return $this;
    }

    /**
     * Get terms
     *
     * @return SearchMultiSelectField
     */
    public function getTerms() {
        return $this->terms;
    }


    /**
     * Set territory
     *
     * @param SearchMultiSelectField $territory
     * @return CustomerSearchBasic
     */
    public function setTerritory(SearchMultiSelectField $territory) {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Get territory
     *
     * @return SearchMultiSelectField
     */
    public function getTerritory() {
        return $this->territory;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return CustomerSearchBasic
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
     * Set unbilledOrders
     *
     * @param SearchDoubleField $unbilledOrders
     * @return CustomerSearchBasic
     */
    public function setUnbilledOrders(SearchDoubleField $unbilledOrders) {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * Get unbilledOrders
     *
     * @return SearchDoubleField
     */
    public function getUnbilledOrders() {
        return $this->unbilledOrders;
    }


    /**
     * Set url
     *
     * @param SearchStringField $url
     * @return CustomerSearchBasic
     */
    public function setUrl(SearchStringField $url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return SearchStringField
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set vatRegNumber
     *
     * @param SearchStringField $vatRegNumber
     * @return CustomerSearchBasic
     */
    public function setVatRegNumber(SearchStringField $vatRegNumber) {
        $this->vatRegNumber = $vatRegNumber;
        return $this;
    }

    /**
     * Get vatRegNumber
     *
     * @return SearchStringField
     */
    public function getVatRegNumber() {
        return $this->vatRegNumber;
    }


    /**
     * Set webLead
     *
     * @param SearchBooleanField $webLead
     * @return CustomerSearchBasic
     */
    public function setWebLead(SearchBooleanField $webLead) {
        $this->webLead = $webLead;
        return $this;
    }

    /**
     * Get webLead
     *
     * @return SearchBooleanField
     */
    public function getWebLead() {
        return $this->webLead;
    }


    /**
     * Set zipCode
     *
     * @param SearchStringField $zipCode
     * @return CustomerSearchBasic
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
     * @return CustomerSearchBasic
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