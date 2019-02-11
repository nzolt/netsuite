<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerNumberFormat;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerNegativeNumberFormat;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EmailPreference;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerCreditHoldOverride;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerMonthlyClosing;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\CurrencySymbolPlacement;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerStage;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Customer
 */
class Customer extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $entityId;

    /**
     * @access public
     * @var string
     */
    protected $altName;

    /**
     * @access public
     * @var boolean
     */
    protected $isPerson;

    /**
     * @access public
     * @var string
     */
    protected $phoneticName;

    /**
     * @access public
     * @var string
     */
    protected $salutation;

    /**
     * @access public
     * @var string
     */
    protected $firstName;

    /**
     * @access public
     * @var string
     */
    protected $middleName;

    /**
     * @access public
     * @var string
     */
    protected $lastName;

    /**
     * @access public
     * @var string
     */
    protected $companyName;

    /**
     * @access public
     * @var RecordRef
     */
    public $entityStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var string
     */
    protected $phone;

    /**
     * @access public
     * @var string
     */
    protected $fax;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var string
     */
    protected $url;

    /**
     * @access public
     * @var string
     */
    protected $defaultAddress;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var string
     */
    protected $printOnCheckAs;

    /**
     * @access public
     * @var string
     */
    protected $altPhone;

    /**
     * @access public
     * @var string
     */
    protected $homePhone;

    /**
     * @access public
     * @var string
     */
    protected $mobilePhone;

    /**
     * @access public
     * @var string
     */
    protected $altEmail;

    /**
     * @access public
     * @var Language
     */
    protected $language;

    /**
     * @access public
     * @var string
     */
    protected $comments;

    /**
     * @access public
     * @var CustomerNumberFormat
     */
    protected $numberFormat;

    /**
     * @access public
     * @var CustomerNegativeNumberFormat
     */
    protected $negativeNumberFormat;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateCreated;

    /**
     * @access public
     * @var RecordRef
     */
    public $image;

    /**
     * @access public
     * @var EmailPreference
     */
    protected $emailPreference;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $representingSubsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRep;

    /**
     * @access public
     * @var RecordRef
     */
    public $territory;

    /**
     * @access public
     * @var string
     */
    protected $contribPct;

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesGroup;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNumber;

    /**
     * @access public
     * @var string
     */
    protected $accountNumber;

    /**
     * @access public
     * @var boolean
     */
    protected $taxExempt;

    /**
     * @access public
     * @var RecordRef
     */
    public $terms;

    /**
     * @access public
     * @var float
     */
    protected $creditLimit;

    /**
     * @access public
     * @var CustomerCreditHoldOverride
     */
    protected $creditHoldOverride;

    /**
     * @access public
     * @var CustomerMonthlyClosing
     */
    protected $monthlyClosing;

    /**
     * @access public
     * @var boolean
     */
    protected $overrideCurrencyFormat;

    /**
     * @access public
     * @var string
     */
    protected $displaySymbol;

    /**
     * @access public
     * @var CurrencySymbolPlacement
     */
    protected $symbolPlacement;

    /**
     * @access public
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var float
     */
    protected $overdueBalance;

    /**
     * @access public
     * @var integer
     */
    protected $daysOverdue;

    /**
     * @access public
     * @var float
     */
    protected $unbilledOrders;

    /**
     * @access public
     * @var float
     */
    protected $consolUnbilledOrders;

    /**
     * @access public
     * @var float
     */
    protected $consolOverdueBalance;

    /**
     * @access public
     * @var float
     */
    protected $consolDepositBalance;

    /**
     * @access public
     * @var float
     */
    protected $consolBalance;

    /**
     * @access public
     * @var float
     */
    protected $consolAging;

    /**
     * @access public
     * @var integer
     */
    protected $consolDaysOverdue;

    /**
     * @access public
     * @var RecordRef
     */
    public $priceLevel;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $prefCCProcessor;

    /**
     * @access public
     * @var float
     */
    protected $depositBalance;

    /**
     * @access public
     * @var boolean
     */
    protected $shipComplete;

    /**
     * @access public
     * @var boolean
     */
    protected $taxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxItem;

    /**
     * @access public
     * @var string
     */
    protected $resaleNumber;

    /**
     * @access public
     * @var float
     */
    protected $aging;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var integer
     */
    protected $reminderDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $shippingItem;

    /**
     * @access public
     * @var string
     */
    protected $thirdPartyAcct;

    /**
     * @access public
     * @var string
     */
    protected $thirdPartyZipcode;

    /**
     * @access public
     * @var Country
     */
    protected $thirdPartyCountry;

    /**
     * @access public
     * @var boolean
     */
    protected $giveAccess;

    /**
     * @access public
     * @var float
     */
    protected $estimatedBudget;

    /**
     * @access public
     * @var RecordRef
     */
    public $accessRole;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    /**
     * @access public
     * @var string
     */
    protected $password;

    /**
     * @access public
     * @var string
     */
    protected $password2;

    /**
     * @access public
     * @var boolean
     */
    protected $requirePwdChange;

    /**
     * @access public
     * @var RecordRef
     */
    public $campaignCategory;

    /**
     * @access public
     * @var RecordRef
     */
    public $leadSource;

    /**
     * @access public
     * @var RecordRef
     */
    public $receivablesAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $drAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $fxAccount;

    /**
     * @access public
     * @var float
     */
    protected $defaultOrderPriority;

    /**
     * @access public
     * @var string
     */
    protected $webLead;

    /**
     * @access public
     * @var string
     */
    protected $referrer;

    /**
     * @access public
     * @var string
     */
    protected $keywords;

    /**
     * @access public
     * @var string
     */
    protected $clickStream;

    /**
     * @access public
     * @var string
     */
    protected $lastPageVisited;

    /**
     * @access public
     * @var integer
     */
    protected $visits;

    /**
     * @access public
     * @var dateTime
     */
    protected $firstVisit;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastVisit;

    /**
     * @access public
     * @var boolean
     */
    protected $billPay;

    /**
     * @access public
     * @var float
     */
    protected $openingBalance;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $openingBalanceDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $openingBalanceAccount;

    /**
     * @access public
     * @var CustomerStage
     */
    protected $stage;

    /**
     * @access public
     * @var boolean
     */
    protected $emailTransactions;

    /**
     * @access public
     * @var boolean
     */
    protected $printTransactions;

    /**
     * @access public
     * @var boolean
     */
    protected $faxTransactions;

    /**
     * @access public
     * @var boolean
     */
    protected $syncPartnerTeams;

    /**
     * @access public
     * @var boolean
     */
    protected $isBudgetApproved;

    /**
     * @access public
     * @var GlobalSubscriptionStatus
     */
    protected $globalSubscriptionStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesReadiness;

    /**
     * @access public
     * @var CustomerSalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var RecordRef
     */
    public $buyingReason;

    /**
     * @access public
     * @var CustomerDownloadList
     */
    protected $downloadList;

    /**
     * @access public
     * @var RecordRef
     */
    public $buyingTimeFrame;

    /**
     * @access public
     * @var CustomerAddressbookList
     */
    protected $addressbookList;

    /**
     * @access public
     * @var SubscriptionsList
     */
    protected $subscriptionsList;

    /**
     * @access public
     * @var ContactAccessRolesList
     */
    protected $contactRolesList;

    /**
     * @access public
     * @var CustomerCurrencyList
     */
    protected $currencyList;

    /**
     * @access public
     * @var CustomerCreditCardsList
     */
    protected $creditCardsList;

    /**
     * @access public
     * @var CustomerPartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var CustomerGroupPricingList
     */
    protected $groupPricingList;

    /**
     * @access public
     * @var CustomerItemPricingList
     */
    protected $itemPricingList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"customForm" => "RecordRef",
    	"entityId" => "string",
    	"altName" => "string",
    	"isPerson" => "boolean",
    	"phoneticName" => "string",
    	"salutation" => "string",
    	"firstName" => "string",
    	"middleName" => "string",
    	"lastName" => "string",
    	"companyName" => "string",
    	"entityStatus" => "RecordRef",
    	"parent" => "RecordRef",
    	"phone" => "string",
    	"fax" => "string",
    	"email" => "string",
    	"url" => "string",
    	"defaultAddress" => "string",
    	"isInactive" => "boolean",
    	"category" => "RecordRef",
    	"title" => "string",
    	"printOnCheckAs" => "string",
    	"altPhone" => "string",
    	"homePhone" => "string",
    	"mobilePhone" => "string",
    	"altEmail" => "string",
    	"language" => "Language",
    	"comments" => "string",
    	"numberFormat" => "CustomerNumberFormat",
    	"negativeNumberFormat" => "CustomerNegativeNumberFormat",
    	"dateCreated" => "dateTime",
    	"image" => "RecordRef",
    	"emailPreference" => "EmailPreference",
    	"subsidiary" => "RecordRef",
    	"representingSubsidiary" => "RecordRef",
    	"salesRep" => "RecordRef",
    	"territory" => "RecordRef",
    	"contribPct" => "string",
    	"partner" => "RecordRef",
    	"salesGroup" => "RecordRef",
    	"vatRegNumber" => "string",
    	"accountNumber" => "string",
    	"taxExempt" => "boolean",
    	"terms" => "RecordRef",
    	"creditLimit" => "float",
    	"creditHoldOverride" => "CustomerCreditHoldOverride",
    	"monthlyClosing" => "CustomerMonthlyClosing",
    	"overrideCurrencyFormat" => "boolean",
    	"displaySymbol" => "string",
    	"symbolPlacement" => "CurrencySymbolPlacement",
    	"balance" => "float",
    	"overdueBalance" => "float",
    	"daysOverdue" => "integer",
    	"unbilledOrders" => "float",
    	"consolUnbilledOrders" => "float",
    	"consolOverdueBalance" => "float",
    	"consolDepositBalance" => "float",
    	"consolBalance" => "float",
    	"consolAging" => "float",
    	"consolDaysOverdue" => "integer",
    	"priceLevel" => "RecordRef",
    	"currency" => "RecordRef",
    	"prefCCProcessor" => "RecordRef",
    	"depositBalance" => "float",
    	"shipComplete" => "boolean",
    	"taxable" => "boolean",
    	"taxItem" => "RecordRef",
    	"resaleNumber" => "string",
    	"aging" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"reminderDays" => "integer",
    	"shippingItem" => "RecordRef",
    	"thirdPartyAcct" => "string",
    	"thirdPartyZipcode" => "string",
    	"thirdPartyCountry" => "Country",
    	"giveAccess" => "boolean",
    	"estimatedBudget" => "float",
    	"accessRole" => "RecordRef",
    	"sendEmail" => "boolean",
    	"password" => "string",
    	"password2" => "string",
    	"requirePwdChange" => "boolean",
    	"campaignCategory" => "RecordRef",
    	"leadSource" => "RecordRef",
    	"receivablesAccount" => "RecordRef",
    	"drAccount" => "RecordRef",
    	"fxAccount" => "RecordRef",
    	"defaultOrderPriority" => "float",
    	"webLead" => "string",
    	"referrer" => "string",
    	"keywords" => "string",
    	"clickStream" => "string",
    	"lastPageVisited" => "string",
    	"visits" => "integer",
    	"firstVisit" => "dateTime",
    	"lastVisit" => "dateTime",
    	"billPay" => "boolean",
    	"openingBalance" => "float",
    	"lastModifiedDate" => "dateTime",
    	"openingBalanceDate" => "dateTime",
    	"openingBalanceAccount" => "RecordRef",
    	"stage" => "CustomerStage",
    	"emailTransactions" => "boolean",
    	"printTransactions" => "boolean",
    	"faxTransactions" => "boolean",
    	"syncPartnerTeams" => "boolean",
    	"isBudgetApproved" => "boolean",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"salesReadiness" => "RecordRef",
    	"salesTeamList" => "CustomerSalesTeamList",
    	"buyingReason" => "RecordRef",
    	"downloadList" => "CustomerDownloadList",
    	"buyingTimeFrame" => "RecordRef",
    	"addressbookList" => "CustomerAddressbookList",
    	"subscriptionsList" => "SubscriptionsList",
    	"contactRolesList" => "ContactAccessRolesList",
    	"currencyList" => "CustomerCurrencyList",
    	"creditCardsList" => "CustomerCreditCardsList",
    	"partnersList" => "CustomerPartnersList",
    	"groupPricingList" => "CustomerGroupPricingList",
    	"itemPricingList" => "CustomerItemPricingList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Customer
     */
    public function setEntityId($entityId) {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Get entityId
     *
     * @return string
     */
    public function getEntityId() {
        return $this->entityId;
    }


    /**
     * Set altName
     *
     * @param string $altName
     * @return Customer
     */
    public function setAltName($altName) {
        $this->altName = $altName;
        return $this;
    }

    /**
     * Get altName
     *
     * @return string
     */
    public function getAltName() {
        return $this->altName;
    }


    /**
     * Set isPerson
     *
     * @param boolean $isPerson
     * @return Customer
     */
    public function setIsPerson($isPerson) {
        $this->isPerson = $isPerson;
        return $this;
    }

    /**
     * Get isPerson
     *
     * @return boolean
     */
    public function getIsPerson() {
        return $this->isPerson;
    }


    /**
     * Set phoneticName
     *
     * @param string $phoneticName
     * @return Customer
     */
    public function setPhoneticName($phoneticName) {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * Get phoneticName
     *
     * @return string
     */
    public function getPhoneticName() {
        return $this->phoneticName;
    }


    /**
     * Set salutation
     *
     * @param string $salutation
     * @return Customer
     */
    public function setSalutation($salutation) {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * Get salutation
     *
     * @return string
     */
    public function getSalutation() {
        return $this->salutation;
    }


    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }


    /**
     * Set middleName
     *
     * @param string $middleName
     * @return Customer
     */
    public function setMiddleName($middleName) {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string
     */
    public function getMiddleName() {
        return $this->middleName;
    }


    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }


    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Customer
     */
    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName() {
        return $this->companyName;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * @return Customer
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set fax
     *
     * @param string $fax
     * @return Customer
     */
    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set url
     *
     * @param string $url
     * @return Customer
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }


    /**
     * Set defaultAddress
     *
     * @param string $defaultAddress
     * @return Customer
     */
    public function setDefaultAddress($defaultAddress) {
        $this->defaultAddress = $defaultAddress;
        return $this;
    }

    /**
     * Get defaultAddress
     *
     * @return string
     */
    public function getDefaultAddress() {
        return $this->defaultAddress;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Customer
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Customer
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set printOnCheckAs
     *
     * @param string $printOnCheckAs
     * @return Customer
     */
    public function setPrintOnCheckAs($printOnCheckAs) {
        $this->printOnCheckAs = $printOnCheckAs;
        return $this;
    }

    /**
     * Get printOnCheckAs
     *
     * @return string
     */
    public function getPrintOnCheckAs() {
        return $this->printOnCheckAs;
    }


    /**
     * Set altPhone
     *
     * @param string $altPhone
     * @return Customer
     */
    public function setAltPhone($altPhone) {
        $this->altPhone = $altPhone;
        return $this;
    }

    /**
     * Get altPhone
     *
     * @return string
     */
    public function getAltPhone() {
        return $this->altPhone;
    }


    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Customer
     */
    public function setHomePhone($homePhone) {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * Get homePhone
     *
     * @return string
     */
    public function getHomePhone() {
        return $this->homePhone;
    }


    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Customer
     */
    public function setMobilePhone($mobilePhone) {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string
     */
    public function getMobilePhone() {
        return $this->mobilePhone;
    }


    /**
     * Set altEmail
     *
     * @param string $altEmail
     * @return Customer
     */
    public function setAltEmail($altEmail) {
        $this->altEmail = $altEmail;
        return $this;
    }

    /**
     * Get altEmail
     *
     * @return string
     */
    public function getAltEmail() {
        return $this->altEmail;
    }


    /**
     * Set language
     *
     * @param Language $language
     * @return Customer
     */
    public function setLanguage(Language $language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return Language
     */
    public function getLanguage() {
        return $this->language;
    }


    /**
     * Set comments
     *
     * @param string $comments
     * @return Customer
     */
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments() {
        return $this->comments;
    }


    /**
     * Set numberFormat
     *
     * @param CustomerNumberFormat $numberFormat
     * @return Customer
     */
    public function setNumberFormat(CustomerNumberFormat $numberFormat) {
        $this->numberFormat = $numberFormat;
        return $this;
    }

    /**
     * Get numberFormat
     *
     * @return CustomerNumberFormat
     */
    public function getNumberFormat() {
        return $this->numberFormat;
    }


    /**
     * Set negativeNumberFormat
     *
     * @param CustomerNegativeNumberFormat $negativeNumberFormat
     * @return Customer
     */
    public function setNegativeNumberFormat(CustomerNegativeNumberFormat $negativeNumberFormat) {
        $this->negativeNumberFormat = $negativeNumberFormat;
        return $this;
    }

    /**
     * Get negativeNumberFormat
     *
     * @return CustomerNegativeNumberFormat
     */
    public function getNegativeNumberFormat() {
        return $this->negativeNumberFormat;
    }


    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Customer
     */
    public function setDateCreated(\DateTime $dateCreated) {
        $this->dateCreated = $dateCreated->format('c');
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated() {
        return new \DateTime($this->dateCreated);
    }


    /**
     * Set emailPreference
     *
     * @param EmailPreference $emailPreference
     * @return Customer
     */
    public function setEmailPreference(EmailPreference $emailPreference) {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * Get emailPreference
     *
     * @return EmailPreference
     */
    public function getEmailPreference() {
        return $this->emailPreference;
    }


    /**
     * Set contribPct
     *
     * @param string $contribPct
     * @return Customer
     */
    public function setContribPct($contribPct) {
        $this->contribPct = $contribPct;
        return $this;
    }

    /**
     * Get contribPct
     *
     * @return string
     */
    public function getContribPct() {
        return $this->contribPct;
    }


    /**
     * Set vatRegNumber
     *
     * @param string $vatRegNumber
     * @return Customer
     */
    public function setVatRegNumber($vatRegNumber) {
        $this->vatRegNumber = $vatRegNumber;
        return $this;
    }

    /**
     * Get vatRegNumber
     *
     * @return string
     */
    public function getVatRegNumber() {
        return $this->vatRegNumber;
    }


    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Customer
     */
    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber() {
        return $this->accountNumber;
    }


    /**
     * Set taxExempt
     *
     * @param boolean $taxExempt
     * @return Customer
     */
    public function setTaxExempt($taxExempt) {
        $this->taxExempt = $taxExempt;
        return $this;
    }

    /**
     * Get taxExempt
     *
     * @return boolean
     */
    public function getTaxExempt() {
        return $this->taxExempt;
    }


    /**
     * Set creditLimit
     *
     * @param float $creditLimit
     * @return Customer
     */
    public function setCreditLimit($creditLimit) {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return float
     */
    public function getCreditLimit() {
        return $this->creditLimit;
    }


    /**
     * Set creditHoldOverride
     *
     * @param CustomerCreditHoldOverride $creditHoldOverride
     * @return Customer
     */
    public function setCreditHoldOverride(CustomerCreditHoldOverride $creditHoldOverride) {
        $this->creditHoldOverride = $creditHoldOverride;
        return $this;
    }

    /**
     * Get creditHoldOverride
     *
     * @return CustomerCreditHoldOverride
     */
    public function getCreditHoldOverride() {
        return $this->creditHoldOverride;
    }


    /**
     * Set monthlyClosing
     *
     * @param CustomerMonthlyClosing $monthlyClosing
     * @return Customer
     */
    public function setMonthlyClosing(CustomerMonthlyClosing $monthlyClosing) {
        $this->monthlyClosing = $monthlyClosing;
        return $this;
    }

    /**
     * Get monthlyClosing
     *
     * @return CustomerMonthlyClosing
     */
    public function getMonthlyClosing() {
        return $this->monthlyClosing;
    }


    /**
     * Set overrideCurrencyFormat
     *
     * @param boolean $overrideCurrencyFormat
     * @return Customer
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat) {
        $this->overrideCurrencyFormat = $overrideCurrencyFormat;
        return $this;
    }

    /**
     * Get overrideCurrencyFormat
     *
     * @return boolean
     */
    public function getOverrideCurrencyFormat() {
        return $this->overrideCurrencyFormat;
    }


    /**
     * Set displaySymbol
     *
     * @param string $displaySymbol
     * @return Customer
     */
    public function setDisplaySymbol($displaySymbol) {
        $this->displaySymbol = $displaySymbol;
        return $this;
    }

    /**
     * Get displaySymbol
     *
     * @return string
     */
    public function getDisplaySymbol() {
        return $this->displaySymbol;
    }


    /**
     * Set symbolPlacement
     *
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return Customer
     */
    public function setSymbolPlacement(CurrencySymbolPlacement $symbolPlacement) {
        $this->symbolPlacement = $symbolPlacement;
        return $this;
    }

    /**
     * Get symbolPlacement
     *
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement() {
        return $this->symbolPlacement;
    }


    /**
     * Set balance
     *
     * @param float $balance
     * @return Customer
     */
    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance() {
        return $this->balance;
    }


    /**
     * Set overdueBalance
     *
     * @param float $overdueBalance
     * @return Customer
     */
    public function setOverdueBalance($overdueBalance) {
        $this->overdueBalance = $overdueBalance;
        return $this;
    }

    /**
     * Get overdueBalance
     *
     * @return float
     */
    public function getOverdueBalance() {
        return $this->overdueBalance;
    }


    /**
     * Set daysOverdue
     *
     * @param integer $daysOverdue
     * @return Customer
     */
    public function setDaysOverdue($daysOverdue) {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * Get daysOverdue
     *
     * @return integer
     */
    public function getDaysOverdue() {
        return $this->daysOverdue;
    }


    /**
     * Set unbilledOrders
     *
     * @param float $unbilledOrders
     * @return Customer
     */
    public function setUnbilledOrders($unbilledOrders) {
        $this->unbilledOrders = $unbilledOrders;
        return $this;
    }

    /**
     * Get unbilledOrders
     *
     * @return float
     */
    public function getUnbilledOrders() {
        return $this->unbilledOrders;
    }


    /**
     * Set consolUnbilledOrders
     *
     * @param float $consolUnbilledOrders
     * @return Customer
     */
    public function setConsolUnbilledOrders($consolUnbilledOrders) {
        $this->consolUnbilledOrders = $consolUnbilledOrders;
        return $this;
    }

    /**
     * Get consolUnbilledOrders
     *
     * @return float
     */
    public function getConsolUnbilledOrders() {
        return $this->consolUnbilledOrders;
    }


    /**
     * Set consolOverdueBalance
     *
     * @param float $consolOverdueBalance
     * @return Customer
     */
    public function setConsolOverdueBalance($consolOverdueBalance) {
        $this->consolOverdueBalance = $consolOverdueBalance;
        return $this;
    }

    /**
     * Get consolOverdueBalance
     *
     * @return float
     */
    public function getConsolOverdueBalance() {
        return $this->consolOverdueBalance;
    }


    /**
     * Set consolDepositBalance
     *
     * @param float $consolDepositBalance
     * @return Customer
     */
    public function setConsolDepositBalance($consolDepositBalance) {
        $this->consolDepositBalance = $consolDepositBalance;
        return $this;
    }

    /**
     * Get consolDepositBalance
     *
     * @return float
     */
    public function getConsolDepositBalance() {
        return $this->consolDepositBalance;
    }


    /**
     * Set consolBalance
     *
     * @param float $consolBalance
     * @return Customer
     */
    public function setConsolBalance($consolBalance) {
        $this->consolBalance = $consolBalance;
        return $this;
    }

    /**
     * Get consolBalance
     *
     * @return float
     */
    public function getConsolBalance() {
        return $this->consolBalance;
    }


    /**
     * Set consolAging
     *
     * @param float $consolAging
     * @return Customer
     */
    public function setConsolAging($consolAging) {
        $this->consolAging = $consolAging;
        return $this;
    }

    /**
     * Get consolAging
     *
     * @return float
     */
    public function getConsolAging() {
        return $this->consolAging;
    }


    /**
     * Set consolDaysOverdue
     *
     * @param integer $consolDaysOverdue
     * @return Customer
     */
    public function setConsolDaysOverdue($consolDaysOverdue) {
        $this->consolDaysOverdue = $consolDaysOverdue;
        return $this;
    }

    /**
     * Get consolDaysOverdue
     *
     * @return integer
     */
    public function getConsolDaysOverdue() {
        return $this->consolDaysOverdue;
    }


    /**
     * Set depositBalance
     *
     * @param float $depositBalance
     * @return Customer
     */
    public function setDepositBalance($depositBalance) {
        $this->depositBalance = $depositBalance;
        return $this;
    }

    /**
     * Get depositBalance
     *
     * @return float
     */
    public function getDepositBalance() {
        return $this->depositBalance;
    }


    /**
     * Set shipComplete
     *
     * @param boolean $shipComplete
     * @return Customer
     */
    public function setShipComplete($shipComplete) {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * Get shipComplete
     *
     * @return boolean
     */
    public function getShipComplete() {
        return $this->shipComplete;
    }


    /**
     * Set taxable
     *
     * @param boolean $taxable
     * @return Customer
     */
    public function setTaxable($taxable) {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * Get taxable
     *
     * @return boolean
     */
    public function getTaxable() {
        return $this->taxable;
    }


    /**
     * Set resaleNumber
     *
     * @param string $resaleNumber
     * @return Customer
     */
    public function setResaleNumber($resaleNumber) {
        $this->resaleNumber = $resaleNumber;
        return $this;
    }

    /**
     * Get resaleNumber
     *
     * @return string
     */
    public function getResaleNumber() {
        return $this->resaleNumber;
    }


    /**
     * Set aging
     *
     * @param float $aging
     * @return Customer
     */
    public function setAging($aging) {
        $this->aging = $aging;
        return $this;
    }

    /**
     * Get aging
     *
     * @return float
     */
    public function getAging() {
        return $this->aging;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Customer
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Customer
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set reminderDays
     *
     * @param integer $reminderDays
     * @return Customer
     */
    public function setReminderDays($reminderDays) {
        $this->reminderDays = $reminderDays;
        return $this;
    }

    /**
     * Get reminderDays
     *
     * @return integer
     */
    public function getReminderDays() {
        return $this->reminderDays;
    }


    /**
     * Set thirdPartyAcct
     *
     * @param string $thirdPartyAcct
     * @return Customer
     */
    public function setThirdPartyAcct($thirdPartyAcct) {
        $this->thirdPartyAcct = $thirdPartyAcct;
        return $this;
    }

    /**
     * Get thirdPartyAcct
     *
     * @return string
     */
    public function getThirdPartyAcct() {
        return $this->thirdPartyAcct;
    }


    /**
     * Set thirdPartyZipcode
     *
     * @param string $thirdPartyZipcode
     * @return Customer
     */
    public function setThirdPartyZipcode($thirdPartyZipcode) {
        $this->thirdPartyZipcode = $thirdPartyZipcode;
        return $this;
    }

    /**
     * Get thirdPartyZipcode
     *
     * @return string
     */
    public function getThirdPartyZipcode() {
        return $this->thirdPartyZipcode;
    }


    /**
     * Set thirdPartyCountry
     *
     * @param Country $thirdPartyCountry
     * @return Customer
     */
    public function setThirdPartyCountry(Country $thirdPartyCountry) {
        $this->thirdPartyCountry = $thirdPartyCountry;
        return $this;
    }

    /**
     * Get thirdPartyCountry
     *
     * @return Country
     */
    public function getThirdPartyCountry() {
        return $this->thirdPartyCountry;
    }


    /**
     * Set giveAccess
     *
     * @param boolean $giveAccess
     * @return Customer
     */
    public function setGiveAccess($giveAccess) {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * Get giveAccess
     *
     * @return boolean
     */
    public function getGiveAccess() {
        return $this->giveAccess;
    }


    /**
     * Set estimatedBudget
     *
     * @param float $estimatedBudget
     * @return Customer
     */
    public function setEstimatedBudget($estimatedBudget) {
        $this->estimatedBudget = $estimatedBudget;
        return $this;
    }

    /**
     * Get estimatedBudget
     *
     * @return float
     */
    public function getEstimatedBudget() {
        return $this->estimatedBudget;
    }


    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return Customer
     */
    public function setSendEmail($sendEmail) {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return boolean
     */
    public function getSendEmail() {
        return $this->sendEmail;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Customer
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }


    /**
     * Set password2
     *
     * @param string $password2
     * @return Customer
     */
    public function setPassword2($password2) {
        $this->password2 = $password2;
        return $this;
    }

    /**
     * Get password2
     *
     * @return string
     */
    public function getPassword2() {
        return $this->password2;
    }


    /**
     * Set requirePwdChange
     *
     * @param boolean $requirePwdChange
     * @return Customer
     */
    public function setRequirePwdChange($requirePwdChange) {
        $this->requirePwdChange = $requirePwdChange;
        return $this;
    }

    /**
     * Get requirePwdChange
     *
     * @return boolean
     */
    public function getRequirePwdChange() {
        return $this->requirePwdChange;
    }


    /**
     * Set defaultOrderPriority
     *
     * @param float $defaultOrderPriority
     * @return Customer
     */
    public function setDefaultOrderPriority($defaultOrderPriority) {
        $this->defaultOrderPriority = $defaultOrderPriority;
        return $this;
    }

    /**
     * Get defaultOrderPriority
     *
     * @return float
     */
    public function getDefaultOrderPriority() {
        return $this->defaultOrderPriority;
    }


    /**
     * Set webLead
     *
     * @param string $webLead
     * @return Customer
     */
    public function setWebLead($webLead) {
        $this->webLead = $webLead;
        return $this;
    }

    /**
     * Get webLead
     *
     * @return string
     */
    public function getWebLead() {
        return $this->webLead;
    }


    /**
     * Set referrer
     *
     * @param string $referrer
     * @return Customer
     */
    public function setReferrer($referrer) {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * Get referrer
     *
     * @return string
     */
    public function getReferrer() {
        return $this->referrer;
    }


    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Customer
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords() {
        return $this->keywords;
    }


    /**
     * Set clickStream
     *
     * @param string $clickStream
     * @return Customer
     */
    public function setClickStream($clickStream) {
        $this->clickStream = $clickStream;
        return $this;
    }

    /**
     * Get clickStream
     *
     * @return string
     */
    public function getClickStream() {
        return $this->clickStream;
    }


    /**
     * Set lastPageVisited
     *
     * @param string $lastPageVisited
     * @return Customer
     */
    public function setLastPageVisited($lastPageVisited) {
        $this->lastPageVisited = $lastPageVisited;
        return $this;
    }

    /**
     * Get lastPageVisited
     *
     * @return string
     */
    public function getLastPageVisited() {
        return $this->lastPageVisited;
    }


    /**
     * Set visits
     *
     * @param integer $visits
     * @return Customer
     */
    public function setVisits($visits) {
        $this->visits = $visits;
        return $this;
    }

    /**
     * Get visits
     *
     * @return integer
     */
    public function getVisits() {
        return $this->visits;
    }


    /**
     * Set firstVisit
     *
     * @param \DateTime $firstVisit
     * @return Customer
     */
    public function setFirstVisit(\DateTime $firstVisit) {
        $this->firstVisit = $firstVisit->format('c');
        return $this;
    }

    /**
     * Get firstVisit
     *
     * @return \DateTime
     */
    public function getFirstVisit() {
        return new \DateTime($this->firstVisit);
    }


    /**
     * Set lastVisit
     *
     * @param \DateTime $lastVisit
     * @return Customer
     */
    public function setLastVisit(\DateTime $lastVisit) {
        $this->lastVisit = $lastVisit->format('c');
        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return \DateTime
     */
    public function getLastVisit() {
        return new \DateTime($this->lastVisit);
    }


    /**
     * Set billPay
     *
     * @param boolean $billPay
     * @return Customer
     */
    public function setBillPay($billPay) {
        $this->billPay = $billPay;
        return $this;
    }

    /**
     * Get billPay
     *
     * @return boolean
     */
    public function getBillPay() {
        return $this->billPay;
    }


    /**
     * Set openingBalance
     *
     * @param float $openingBalance
     * @return Customer
     */
    public function setOpeningBalance($openingBalance) {
        $this->openingBalance = $openingBalance;
        return $this;
    }

    /**
     * Get openingBalance
     *
     * @return float
     */
    public function getOpeningBalance() {
        return $this->openingBalance;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Customer
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set openingBalanceDate
     *
     * @param \DateTime $openingBalanceDate
     * @return Customer
     */
    public function setOpeningBalanceDate(\DateTime $openingBalanceDate) {
        $this->openingBalanceDate = $openingBalanceDate->format('c');
        return $this;
    }

    /**
     * Get openingBalanceDate
     *
     * @return \DateTime
     */
    public function getOpeningBalanceDate() {
        return new \DateTime($this->openingBalanceDate);
    }


    /**
     * Set stage
     *
     * @param CustomerStage $stage
     * @return Customer
     */
    public function setStage(CustomerStage $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return CustomerStage
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set emailTransactions
     *
     * @param boolean $emailTransactions
     * @return Customer
     */
    public function setEmailTransactions($emailTransactions) {
        $this->emailTransactions = $emailTransactions;
        return $this;
    }

    /**
     * Get emailTransactions
     *
     * @return boolean
     */
    public function getEmailTransactions() {
        return $this->emailTransactions;
    }


    /**
     * Set printTransactions
     *
     * @param boolean $printTransactions
     * @return Customer
     */
    public function setPrintTransactions($printTransactions) {
        $this->printTransactions = $printTransactions;
        return $this;
    }

    /**
     * Get printTransactions
     *
     * @return boolean
     */
    public function getPrintTransactions() {
        return $this->printTransactions;
    }


    /**
     * Set faxTransactions
     *
     * @param boolean $faxTransactions
     * @return Customer
     */
    public function setFaxTransactions($faxTransactions) {
        $this->faxTransactions = $faxTransactions;
        return $this;
    }

    /**
     * Get faxTransactions
     *
     * @return boolean
     */
    public function getFaxTransactions() {
        return $this->faxTransactions;
    }


    /**
     * Set syncPartnerTeams
     *
     * @param boolean $syncPartnerTeams
     * @return Customer
     */
    public function setSyncPartnerTeams($syncPartnerTeams) {
        $this->syncPartnerTeams = $syncPartnerTeams;
        return $this;
    }

    /**
     * Get syncPartnerTeams
     *
     * @return boolean
     */
    public function getSyncPartnerTeams() {
        return $this->syncPartnerTeams;
    }


    /**
     * Set isBudgetApproved
     *
     * @param boolean $isBudgetApproved
     * @return Customer
     */
    public function setIsBudgetApproved($isBudgetApproved) {
        $this->isBudgetApproved = $isBudgetApproved;
        return $this;
    }

    /**
     * Get isBudgetApproved
     *
     * @return boolean
     */
    public function getIsBudgetApproved() {
        return $this->isBudgetApproved;
    }


    /**
     * Set globalSubscriptionStatus
     *
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Customer
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus) {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * Get globalSubscriptionStatus
     *
     * @return GlobalSubscriptionStatus
     */
    public function getGlobalSubscriptionStatus() {
        return $this->globalSubscriptionStatus;
    }


    /**
     * Set salesTeamList
     *
     * @param CustomerSalesTeamList $salesTeamList
     * @return Customer
     */
    public function setSalesTeamList(CustomerSalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return CustomerSalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set downloadList
     *
     * @param CustomerDownloadList $downloadList
     * @return Customer
     */
    public function setDownloadList(CustomerDownloadList $downloadList) {
        $this->downloadList = $downloadList;
        return $this;
    }

    /**
     * Get downloadList
     *
     * @return CustomerDownloadList
     */
    public function getDownloadList() {
        return $this->downloadList;
    }


    /**
     * Set addressbookList
     *
     * @param CustomerAddressbookList $addressbookList
     * @return Customer
     */
    public function setAddressbookList(CustomerAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return CustomerAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set subscriptionsList
     *
     * @param SubscriptionsList $subscriptionsList
     * @return Customer
     */
    public function setSubscriptionsList(SubscriptionsList $subscriptionsList) {
        $this->subscriptionsList = $subscriptionsList;
        return $this;
    }

    /**
     * Get subscriptionsList
     *
     * @return SubscriptionsList
     */
    public function getSubscriptionsList() {
        return $this->subscriptionsList;
    }


    /**
     * Set contactRolesList
     *
     * @param ContactAccessRolesList $contactRolesList
     * @return Customer
     */
    public function setContactRolesList(ContactAccessRolesList $contactRolesList) {
        $this->contactRolesList = $contactRolesList;
        return $this;
    }

    /**
     * Get contactRolesList
     *
     * @return ContactAccessRolesList
     */
    public function getContactRolesList() {
        return $this->contactRolesList;
    }


    /**
     * Set currencyList
     *
     * @param CustomerCurrencyList $currencyList
     * @return Customer
     */
    public function setCurrencyList(CustomerCurrencyList $currencyList) {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * Get currencyList
     *
     * @return CustomerCurrencyList
     */
    public function getCurrencyList() {
        return $this->currencyList;
    }


    /**
     * Set creditCardsList
     *
     * @param CustomerCreditCardsList $creditCardsList
     * @return Customer
     */
    public function setCreditCardsList(CustomerCreditCardsList $creditCardsList) {
        $this->creditCardsList = $creditCardsList;
        return $this;
    }

    /**
     * Get creditCardsList
     *
     * @return CustomerCreditCardsList
     */
    public function getCreditCardsList() {
        return $this->creditCardsList;
    }


    /**
     * Set partnersList
     *
     * @param CustomerPartnersList $partnersList
     * @return Customer
     */
    public function setPartnersList(CustomerPartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return CustomerPartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set groupPricingList
     *
     * @param CustomerGroupPricingList $groupPricingList
     * @return Customer
     */
    public function setGroupPricingList(CustomerGroupPricingList $groupPricingList) {
        $this->groupPricingList = $groupPricingList;
        return $this;
    }

    /**
     * Get groupPricingList
     *
     * @return CustomerGroupPricingList
     */
    public function getGroupPricingList() {
        return $this->groupPricingList;
    }


    /**
     * Set itemPricingList
     *
     * @param CustomerItemPricingList $itemPricingList
     * @return Customer
     */
    public function setItemPricingList(CustomerItemPricingList $itemPricingList) {
        $this->itemPricingList = $itemPricingList;
        return $this;
    }

    /**
     * Get itemPricingList
     *
     * @return CustomerItemPricingList
     */
    public function getItemPricingList() {
        return $this->itemPricingList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Customer
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Customer
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Customer
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}