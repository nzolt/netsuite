<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * CustomerSearchRowBasic
 */
class CustomerSearchRowBasic extends SearchRowBasic {

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
     * @var SearchColumnBooleanField[]
     */
    public $availableOffline;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $balance;

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
    public $category;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccCustomerCode;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $ccDefault;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $ccExpDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccHolderName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccInternalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $ccState;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $ccStateFrom;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $ccType;

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
     * @var SearchColumnDoubleField[]
     */
    public $consolBalance;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $consolDaysOverdue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $consolDepositBalance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $consolOverdueBalance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $consolUnbilledOrders;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $contact;

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
     * @var SearchColumnDateField[]
     */
    public $conversionDate;

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
     * @var SearchColumnEnumSelectField[]
     */
    public $creditHold;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $creditHoldOverride;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $creditLimit;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateClosed;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysOverdue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $defaultOrderPriority;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $depositBalance;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $drAccount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $emailPreference;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $emailTransactions;

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
    public $estimatedBudget;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $explicitConversion;

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
     * @var SearchColumnBooleanField[]
     */
    public $faxTransactions;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $firstName;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $firstOrderDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $firstSaleDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fxAccount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxBalance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxConsolBalance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxConsolUnbilledOrders;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxUnbilledOrders;

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
     * @var SearchColumnStringField[]
     */
    public $groupPricingLevel;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $hasDuplicates;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $homePhone;

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
    public $isBudgetApproved;

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
    public $isPerson;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isShipAddress;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $itemPricingLevel;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $itemPricingUnitPrice;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $jobEndDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $jobProjectedEnd;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $jobStartDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $jobType;

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
    public $lastOrderDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastSaleDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $leadDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $leadSource;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $level;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $manualCreditHold;

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
     * @var SearchColumnEnumSelectField[]
     */
    public $monthlyClosing;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $onCreditHold;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $overdueBalance;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

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
     * @var SearchColumnStringField[]
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
    public $pec;

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
     * @var SearchColumnSelectField[]
     */
    public $prefCCProcessor;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pricingGroup;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pricingItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $printTransactions;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $prospectDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $receivablesAccount;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $reminderDays;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $resaleNumber;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $role;

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
     * @var SearchColumnStringField[]
     */
    public $salutation;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress;

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
     * @var SearchColumnBooleanField[]
     */
    public $shipComplete;

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
     * @var SearchColumnSelectField[]
     */
    public $shippingItem;

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
     * @var SearchColumnEnumSelectField[]
     */
    public $stage;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

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
     * @var SearchColumnBooleanField[]
     */
    public $taxable;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $taxItem;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $terms;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $territory;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unbilledOrders;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $url;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $vatRegNumber;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $webLead;

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
    	"altContact" => "SearchColumnStringField[]",
    	"altEmail" => "SearchColumnStringField[]",
    	"altName" => "SearchColumnStringField[]",
    	"altPhone" => "SearchColumnStringField[]",
    	"attention" => "SearchColumnStringField[]",
    	"availableOffline" => "SearchColumnBooleanField[]",
    	"balance" => "SearchColumnDoubleField[]",
    	"billAddress" => "SearchColumnStringField[]",
    	"billAddress1" => "SearchColumnStringField[]",
    	"billAddress2" => "SearchColumnStringField[]",
    	"billAddress3" => "SearchColumnStringField[]",
    	"billAddressee" => "SearchColumnStringField[]",
    	"billAttention" => "SearchColumnStringField[]",
    	"billCity" => "SearchColumnStringField[]",
    	"billCountry" => "SearchColumnEnumSelectField[]",
    	"billCountryCode" => "SearchColumnStringField[]",
    	"billPhone" => "SearchColumnStringField[]",
    	"billState" => "SearchColumnStringField[]",
    	"billZipCode" => "SearchColumnStringField[]",
    	"buyingReason" => "SearchColumnStringField[]",
    	"buyingTimeFrame" => "SearchColumnStringField[]",
    	"category" => "SearchColumnSelectField[]",
    	"ccCustomerCode" => "SearchColumnStringField[]",
    	"ccDefault" => "SearchColumnBooleanField[]",
    	"ccExpDate" => "SearchColumnDateField[]",
    	"ccHolderName" => "SearchColumnStringField[]",
    	"ccInternalId" => "SearchColumnStringField[]",
    	"ccNumber" => "SearchColumnStringField[]",
    	"ccState" => "SearchColumnSelectField[]",
    	"ccStateFrom" => "SearchColumnDateField[]",
    	"ccType" => "SearchColumnSelectField[]",
    	"city" => "SearchColumnStringField[]",
    	"comments" => "SearchColumnStringField[]",
    	"companyName" => "SearchColumnStringField[]",
    	"consolBalance" => "SearchColumnDoubleField[]",
    	"consolDaysOverdue" => "SearchColumnLongField[]",
    	"consolDepositBalance" => "SearchColumnDoubleField[]",
    	"consolOverdueBalance" => "SearchColumnDoubleField[]",
    	"consolUnbilledOrders" => "SearchColumnDoubleField[]",
    	"contact" => "SearchColumnStringField[]",
    	"contribution" => "SearchColumnDoubleField[]",
    	"contributionPrimary" => "SearchColumnDoubleField[]",
    	"conversionDate" => "SearchColumnDateField[]",
    	"country" => "SearchColumnEnumSelectField[]",
    	"countryCode" => "SearchColumnStringField[]",
    	"creditHold" => "SearchColumnEnumSelectField[]",
    	"creditHoldOverride" => "SearchColumnBooleanField[]",
    	"creditLimit" => "SearchColumnDoubleField[]",
    	"currency" => "SearchColumnSelectField[]",
    	"dateClosed" => "SearchColumnDateField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"daysOverdue" => "SearchColumnLongField[]",
    	"defaultOrderPriority" => "SearchColumnDoubleField[]",
    	"depositBalance" => "SearchColumnDoubleField[]",
    	"drAccount" => "SearchColumnStringField[]",
    	"email" => "SearchColumnStringField[]",
    	"emailPreference" => "SearchColumnEnumSelectField[]",
    	"emailTransactions" => "SearchColumnBooleanField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"entityId" => "SearchColumnStringField[]",
    	"entityNumber" => "SearchColumnLongField[]",
    	"entityStatus" => "SearchColumnSelectField[]",
    	"estimatedBudget" => "SearchColumnDoubleField[]",
    	"explicitConversion" => "SearchColumnBooleanField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"fax" => "SearchColumnStringField[]",
    	"faxTransactions" => "SearchColumnBooleanField[]",
    	"firstName" => "SearchColumnStringField[]",
    	"firstOrderDate" => "SearchColumnDateField[]",
    	"firstSaleDate" => "SearchColumnDateField[]",
    	"fxAccount" => "SearchColumnStringField[]",
    	"fxBalance" => "SearchColumnDoubleField[]",
    	"fxConsolBalance" => "SearchColumnDoubleField[]",
    	"fxConsolUnbilledOrders" => "SearchColumnDoubleField[]",
    	"fxUnbilledOrders" => "SearchColumnDoubleField[]",
    	"giveAccess" => "SearchColumnBooleanField[]",
    	"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
    	"groupPricingLevel" => "SearchColumnStringField[]",
    	"hasDuplicates" => "SearchColumnBooleanField[]",
    	"homePhone" => "SearchColumnStringField[]",
    	"image" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"isBudgetApproved" => "SearchColumnBooleanField[]",
    	"isDefaultBilling" => "SearchColumnBooleanField[]",
    	"isDefaultShipping" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isPerson" => "SearchColumnBooleanField[]",
    	"isShipAddress" => "SearchColumnBooleanField[]",
    	"itemPricingLevel" => "SearchColumnStringField[]",
    	"itemPricingUnitPrice" => "SearchColumnDoubleField[]",
    	"jobEndDate" => "SearchColumnDateField[]",
    	"jobProjectedEnd" => "SearchColumnDateField[]",
    	"jobStartDate" => "SearchColumnDateField[]",
    	"jobType" => "SearchColumnSelectField[]",
    	"language" => "SearchColumnEnumSelectField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"lastName" => "SearchColumnStringField[]",
    	"lastOrderDate" => "SearchColumnDateField[]",
    	"lastSaleDate" => "SearchColumnDateField[]",
    	"leadDate" => "SearchColumnDateField[]",
    	"leadSource" => "SearchColumnSelectField[]",
    	"level" => "SearchColumnEnumSelectField[]",
    	"manualCreditHold" => "SearchColumnBooleanField[]",
    	"middleName" => "SearchColumnStringField[]",
    	"mobilePhone" => "SearchColumnStringField[]",
    	"monthlyClosing" => "SearchColumnEnumSelectField[]",
    	"onCreditHold" => "SearchColumnBooleanField[]",
    	"overdueBalance" => "SearchColumnDoubleField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"partner" => "SearchColumnSelectField[]",
    	"partnerContribution" => "SearchColumnDoubleField[]",
    	"partnerRole" => "SearchColumnStringField[]",
    	"partnerTeamMember" => "SearchColumnSelectField[]",
    	"pec" => "SearchColumnStringField[]",
    	"permission" => "SearchColumnEnumSelectField[]",
    	"phone" => "SearchColumnStringField[]",
    	"phoneticName" => "SearchColumnStringField[]",
    	"prefCCProcessor" => "SearchColumnSelectField[]",
    	"priceLevel" => "SearchColumnSelectField[]",
    	"pricingGroup" => "SearchColumnStringField[]",
    	"pricingItem" => "SearchColumnStringField[]",
    	"printTransactions" => "SearchColumnBooleanField[]",
    	"prospectDate" => "SearchColumnDateField[]",
    	"receivablesAccount" => "SearchColumnStringField[]",
    	"reminderDays" => "SearchColumnLongField[]",
    	"resaleNumber" => "SearchColumnStringField[]",
    	"role" => "SearchColumnStringField[]",
    	"salesReadiness" => "SearchColumnStringField[]",
    	"salesRep" => "SearchColumnSelectField[]",
    	"salesTeamMember" => "SearchColumnSelectField[]",
    	"salesTeamRole" => "SearchColumnSelectField[]",
    	"salutation" => "SearchColumnStringField[]",
    	"shipAddress" => "SearchColumnStringField[]",
    	"shipAddress1" => "SearchColumnStringField[]",
    	"shipAddress2" => "SearchColumnStringField[]",
    	"shipAddress3" => "SearchColumnStringField[]",
    	"shipAddressee" => "SearchColumnStringField[]",
    	"shipAttention" => "SearchColumnStringField[]",
    	"shipCity" => "SearchColumnStringField[]",
    	"shipComplete" => "SearchColumnBooleanField[]",
    	"shipCountry" => "SearchColumnEnumSelectField[]",
    	"shipCountryCode" => "SearchColumnStringField[]",
    	"shipPhone" => "SearchColumnStringField[]",
    	"shippingItem" => "SearchColumnSelectField[]",
    	"shipState" => "SearchColumnStringField[]",
    	"shipZip" => "SearchColumnStringField[]",
    	"stage" => "SearchColumnEnumSelectField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"state" => "SearchColumnStringField[]",
    	"subscription" => "SearchColumnSelectField[]",
    	"subscriptionDate" => "SearchColumnDateField[]",
    	"subscriptionStatus" => "SearchColumnBooleanField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"taxable" => "SearchColumnBooleanField[]",
    	"taxItem" => "SearchColumnSelectField[]",
    	"terms" => "SearchColumnSelectField[]",
    	"territory" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"unbilledOrders" => "SearchColumnDoubleField[]",
    	"url" => "SearchColumnStringField[]",
    	"vatRegNumber" => "SearchColumnStringField[]",
    	"webLead" => "SearchColumnBooleanField[]",
    	"zipCode" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CustomerSearchRowBasic
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