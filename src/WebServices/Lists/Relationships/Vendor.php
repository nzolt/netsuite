<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EmailPreference;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Vendor
 */
class Vendor extends Record {

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
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateCreated;

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
     * @var string
     */
    protected $comments;

    /**
     * @access public
     * @var GlobalSubscriptionStatus
     */
    protected $globalSubscriptionStatus;

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
     * @var string
     */
    protected $accountNumber;

    /**
     * @access public
     * @var string
     */
    protected $legalName;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $expenseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $payablesAccount;

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
     * @var float
     */
    protected $balancePrimary;

    /**
     * @access public
     * @var float
     */
    protected $openingBalance;

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
     * @var float
     */
    protected $balance;

    /**
     * @access public
     * @var float
     */
    protected $unbilledOrdersPrimary;

    /**
     * @access public
     * @var string
     */
    protected $bcn;

    /**
     * @access public
     * @var float
     */
    protected $unbilledOrders;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var boolean
     */
    protected $is1099Eligible;

    /**
     * @access public
     * @var boolean
     */
    protected $isJobResourceVend;

    /**
     * @access public
     * @var float
     */
    protected $laborCost;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var float
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var RecordRef
     */
    public $workCalendar;

    /**
     * @access public
     * @var string
     */
    protected $taxIdNum;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxItem;

    /**
     * @access public
     * @var boolean
     */
    protected $giveAccess;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    /**
     * @access public
     * @var boolean
     */
    protected $billPay;

    /**
     * @access public
     * @var boolean
     */
    protected $isAccountant;

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
     * @var boolean
     */
    protected $eligibleForCommission;

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
     * @var VendorPricingScheduleList
     */
    protected $pricingScheduleList;

    /**
     * @access public
     * @var SubscriptionsList
     */
    protected $subscriptionsList;

    /**
     * @access public
     * @var VendorAddressbookList
     */
    protected $addressbookList;

    /**
     * @access public
     * @var VendorCurrencyList
     */
    protected $currencyList;

    /**
     * @access public
     * @var VendorRolesList
     */
    protected $rolesList;

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
    	"phone" => "string",
    	"fax" => "string",
    	"email" => "string",
    	"url" => "string",
    	"defaultAddress" => "string",
    	"isInactive" => "boolean",
    	"lastModifiedDate" => "dateTime",
    	"dateCreated" => "dateTime",
    	"category" => "RecordRef",
    	"title" => "string",
    	"printOnCheckAs" => "string",
    	"altPhone" => "string",
    	"homePhone" => "string",
    	"mobilePhone" => "string",
    	"altEmail" => "string",
    	"comments" => "string",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"image" => "RecordRef",
    	"emailPreference" => "EmailPreference",
    	"subsidiary" => "RecordRef",
    	"representingSubsidiary" => "RecordRef",
    	"accountNumber" => "string",
    	"legalName" => "string",
    	"vatRegNumber" => "string",
    	"expenseAccount" => "RecordRef",
    	"payablesAccount" => "RecordRef",
    	"terms" => "RecordRef",
    	"creditLimit" => "float",
    	"balancePrimary" => "float",
    	"openingBalance" => "float",
    	"openingBalanceDate" => "dateTime",
    	"openingBalanceAccount" => "RecordRef",
    	"balance" => "float",
    	"unbilledOrdersPrimary" => "float",
    	"bcn" => "string",
    	"unbilledOrders" => "float",
    	"currency" => "RecordRef",
    	"is1099Eligible" => "boolean",
    	"isJobResourceVend" => "boolean",
    	"laborCost" => "float",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"workCalendar" => "RecordRef",
    	"taxIdNum" => "string",
    	"taxItem" => "RecordRef",
    	"giveAccess" => "boolean",
    	"sendEmail" => "boolean",
    	"billPay" => "boolean",
    	"isAccountant" => "boolean",
    	"password" => "string",
    	"password2" => "string",
    	"requirePwdChange" => "boolean",
    	"eligibleForCommission" => "boolean",
    	"emailTransactions" => "boolean",
    	"printTransactions" => "boolean",
    	"faxTransactions" => "boolean",
    	"pricingScheduleList" => "VendorPricingScheduleList",
    	"subscriptionsList" => "SubscriptionsList",
    	"addressbookList" => "VendorAddressbookList",
    	"currencyList" => "VendorCurrencyList",
    	"rolesList" => "VendorRolesList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Vendor
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Vendor
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
     * Set title
     *
     * @param string $title
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * Set comments
     *
     * @param string $comments
     * @return Vendor
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
     * Set globalSubscriptionStatus
     *
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Vendor
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
     * Set emailPreference
     *
     * @param EmailPreference $emailPreference
     * @return Vendor
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
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Vendor
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
     * Set legalName
     *
     * @param string $legalName
     * @return Vendor
     */
    public function setLegalName($legalName) {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * Get legalName
     *
     * @return string
     */
    public function getLegalName() {
        return $this->legalName;
    }


    /**
     * Set vatRegNumber
     *
     * @param string $vatRegNumber
     * @return Vendor
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
     * Set creditLimit
     *
     * @param float $creditLimit
     * @return Vendor
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
     * Set balancePrimary
     *
     * @param float $balancePrimary
     * @return Vendor
     */
    public function setBalancePrimary($balancePrimary) {
        $this->balancePrimary = $balancePrimary;
        return $this;
    }

    /**
     * Get balancePrimary
     *
     * @return float
     */
    public function getBalancePrimary() {
        return $this->balancePrimary;
    }


    /**
     * Set openingBalance
     *
     * @param float $openingBalance
     * @return Vendor
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
     * Set openingBalanceDate
     *
     * @param \DateTime $openingBalanceDate
     * @return Vendor
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
     * Set balance
     *
     * @param float $balance
     * @return Vendor
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
     * Set unbilledOrdersPrimary
     *
     * @param float $unbilledOrdersPrimary
     * @return Vendor
     */
    public function setUnbilledOrdersPrimary($unbilledOrdersPrimary) {
        $this->unbilledOrdersPrimary = $unbilledOrdersPrimary;
        return $this;
    }

    /**
     * Get unbilledOrdersPrimary
     *
     * @return float
     */
    public function getUnbilledOrdersPrimary() {
        return $this->unbilledOrdersPrimary;
    }


    /**
     * Set bcn
     *
     * @param string $bcn
     * @return Vendor
     */
    public function setBcn($bcn) {
        $this->bcn = $bcn;
        return $this;
    }

    /**
     * Get bcn
     *
     * @return string
     */
    public function getBcn() {
        return $this->bcn;
    }


    /**
     * Set unbilledOrders
     *
     * @param float $unbilledOrders
     * @return Vendor
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
     * Set is1099Eligible
     *
     * @param boolean $is1099Eligible
     * @return Vendor
     */
    public function setIs1099Eligible($is1099Eligible) {
        $this->is1099Eligible = $is1099Eligible;
        return $this;
    }

    /**
     * Get is1099Eligible
     *
     * @return boolean
     */
    public function getIs1099Eligible() {
        return $this->is1099Eligible;
    }


    /**
     * Set isJobResourceVend
     *
     * @param boolean $isJobResourceVend
     * @return Vendor
     */
    public function setIsJobResourceVend($isJobResourceVend) {
        $this->isJobResourceVend = $isJobResourceVend;
        return $this;
    }

    /**
     * Get isJobResourceVend
     *
     * @return boolean
     */
    public function getIsJobResourceVend() {
        return $this->isJobResourceVend;
    }


    /**
     * Set laborCost
     *
     * @param float $laborCost
     * @return Vendor
     */
    public function setLaborCost($laborCost) {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * Get laborCost
     *
     * @return float
     */
    public function getLaborCost() {
        return $this->laborCost;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return Vendor
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return float
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param float $purchaseOrderAmount
     * @return Vendor
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return float
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param float $purchaseOrderQuantityDiff
     * @return Vendor
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return float
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptQuantity
     *
     * @param float $receiptQuantity
     * @return Vendor
     */
    public function setReceiptQuantity($receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return float
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptAmount
     *
     * @param float $receiptAmount
     * @return Vendor
     */
    public function setReceiptAmount($receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return float
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param float $receiptQuantityDiff
     * @return Vendor
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return float
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set taxIdNum
     *
     * @param string $taxIdNum
     * @return Vendor
     */
    public function setTaxIdNum($taxIdNum) {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * Get taxIdNum
     *
     * @return string
     */
    public function getTaxIdNum() {
        return $this->taxIdNum;
    }


    /**
     * Set giveAccess
     *
     * @param boolean $giveAccess
     * @return Vendor
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
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return Vendor
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
     * Set billPay
     *
     * @param boolean $billPay
     * @return Vendor
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
     * Set isAccountant
     *
     * @param boolean $isAccountant
     * @return Vendor
     */
    public function setIsAccountant($isAccountant) {
        $this->isAccountant = $isAccountant;
        return $this;
    }

    /**
     * Get isAccountant
     *
     * @return boolean
     */
    public function getIsAccountant() {
        return $this->isAccountant;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * Set eligibleForCommission
     *
     * @param boolean $eligibleForCommission
     * @return Vendor
     */
    public function setEligibleForCommission($eligibleForCommission) {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * Get eligibleForCommission
     *
     * @return boolean
     */
    public function getEligibleForCommission() {
        return $this->eligibleForCommission;
    }


    /**
     * Set emailTransactions
     *
     * @param boolean $emailTransactions
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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
     * Set pricingScheduleList
     *
     * @param VendorPricingScheduleList $pricingScheduleList
     * @return Vendor
     */
    public function setPricingScheduleList(VendorPricingScheduleList $pricingScheduleList) {
        $this->pricingScheduleList = $pricingScheduleList;
        return $this;
    }

    /**
     * Get pricingScheduleList
     *
     * @return VendorPricingScheduleList
     */
    public function getPricingScheduleList() {
        return $this->pricingScheduleList;
    }


    /**
     * Set subscriptionsList
     *
     * @param SubscriptionsList $subscriptionsList
     * @return Vendor
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
     * Set addressbookList
     *
     * @param VendorAddressbookList $addressbookList
     * @return Vendor
     */
    public function setAddressbookList(VendorAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return VendorAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set currencyList
     *
     * @param VendorCurrencyList $currencyList
     * @return Vendor
     */
    public function setCurrencyList(VendorCurrencyList $currencyList) {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * Get currencyList
     *
     * @return VendorCurrencyList
     */
    public function getCurrencyList() {
        return $this->currencyList;
    }


    /**
     * Set rolesList
     *
     * @param VendorRolesList $rolesList
     * @return Vendor
     */
    public function setRolesList(VendorRolesList $rolesList) {
        $this->rolesList = $rolesList;
        return $this;
    }

    /**
     * Get rolesList
     *
     * @return VendorRolesList
     */
    public function getRolesList() {
        return $this->rolesList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Vendor
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
     * @return Vendor
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
     * @return Vendor
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