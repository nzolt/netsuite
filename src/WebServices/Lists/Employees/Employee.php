<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeePayFrequency;
use Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeUseTimeData;
use Nzolt\NetSuite\WebServices\Lists\Employees\Types\Gender;
use Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeCommissionPaymentPreference;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Employee
 */
class Employee extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $template;

    /**
     * @access public
     * @var string
     */
    protected $entityId;

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
    protected $altName;

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
    protected $defaultAddress;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $phoneticName;

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
     * @var string
     */
    protected $initials;

    /**
     * @access public
     * @var string
     */
    protected $officePhone;

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
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingClass;

    /**
     * @access public
     * @var string
     */
    protected $accountNumber;

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
     * @var EmployeePayFrequency
     */
    protected $payFrequency;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastPaidDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var EmployeeUseTimeData
     */
    protected $useTimeData;

    /**
     * @access public
     * @var boolean
     */
    protected $usePerquest;

    /**
     * @access public
     * @var RecordRef
     */
    public $workplace;

    /**
     * @access public
     * @var string
     */
    protected $adpId;

    /**
     * @access public
     * @var boolean
     */
    protected $directDeposit;

    /**
     * @access public
     * @var float
     */
    protected $expenseLimit;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderLimit;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderApprovalLimit;

    /**
     * @access public
     * @var string
     */
    protected $socialSecurityNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $supervisor;

    /**
     * @access public
     * @var RecordRef
     */
    public $approver;

    /**
     * @access public
     * @var float
     */
    protected $approvalLimit;

    /**
     * @access public
     * @var RecordRef
     */
    public $timeApprover;

    /**
     * @access public
     * @var RecordRef
     */
    public $employeeType;

    /**
     * @access public
     * @var boolean
     */
    protected $isSalesRep;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRole;

    /**
     * @access public
     * @var boolean
     */
    protected $isSupportRep;

    /**
     * @access public
     * @var boolean
     */
    protected $isJobResource;

    /**
     * @access public
     * @var float
     */
    protected $laborCost;

    /**
     * @access public
     * @var dateTime
     */
    protected $birthDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $hireDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $releaseDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastReviewDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $nextReviewDate;

    /**
     * @access public
     * @var string
     */
    protected $title;

    /**
     * @access public
     * @var RecordRef
     */
    public $employeeStatus;

    /**
     * @access public
     * @var string
     */
    protected $jobDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $maritalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $ethnicity;

    /**
     * @access public
     * @var Gender
     */
    protected $gender;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseOrderApprover;

    /**
     * @access public
     * @var RecordRef
     */
    public $workCalendar;

    /**
     * @access public
     * @var boolean
     */
    protected $giveAccess;

    /**
     * @access public
     * @var boolean
     */
    protected $concurrentWebServicesUser;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    /**
     * @access public
     * @var boolean
     */
    protected $hasOfflineAccess;

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
    protected $inheritIPRules;

    /**
     * @access public
     * @var string
     */
    protected $IPAddressRule;

    /**
     * @access public
     * @var EmployeeCommissionPaymentPreference
     */
    protected $commissionPaymentPreference;

    /**
     * @access public
     * @var boolean
     */
    protected $billPay;

    /**
     * @access public
     * @var boolean
     */
    protected $eligibleForCommission;

    /**
     * @access public
     * @var EmployeeSubscriptionsList
     */
    protected $subscriptionsList;

    /**
     * @access public
     * @var EmployeeAddressbookList
     */
    protected $addressbookList;

    /**
     * @access public
     * @var EmployeeRolesList
     */
    protected $rolesList;

    /**
     * @access public
     * @var EmployeeHrEducationList
     */
    protected $hrEducationList;

    /**
     * @access public
     * @var EmployeeAccruedTimeList
     */
    protected $accruedTimeList;

    /**
     * @access public
     * @var EmployeeDirectDepositList
     */
    protected $directDepositList;

    /**
     * @access public
     * @var EmployeeCompanyContributionList
     */
    protected $companyContributionList;

    /**
     * @access public
     * @var EmployeeEarningList
     */
    protected $earningList;

    /**
     * @access public
     * @var EmployeeEmergencyContactList
     */
    protected $emergencyContactList;

    /**
     * @access public
     * @var EmployeeDeductionList
     */
    protected $deductionList;

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
    	"template" => "RecordRef",
    	"entityId" => "string",
    	"salutation" => "string",
    	"firstName" => "string",
    	"middleName" => "string",
    	"lastName" => "string",
    	"altName" => "string",
    	"phone" => "string",
    	"fax" => "string",
    	"email" => "string",
    	"defaultAddress" => "string",
    	"isInactive" => "boolean",
    	"phoneticName" => "string",
    	"lastModifiedDate" => "dateTime",
    	"dateCreated" => "dateTime",
    	"initials" => "string",
    	"officePhone" => "string",
    	"homePhone" => "string",
    	"mobilePhone" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"billingClass" => "RecordRef",
    	"accountNumber" => "string",
    	"comments" => "string",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"image" => "RecordRef",
    	"payFrequency" => "EmployeePayFrequency",
    	"lastPaidDate" => "dateTime",
    	"currency" => "RecordRef",
    	"useTimeData" => "EmployeeUseTimeData",
    	"usePerquest" => "boolean",
    	"workplace" => "RecordRef",
    	"adpId" => "string",
    	"directDeposit" => "boolean",
    	"expenseLimit" => "float",
    	"purchaseOrderLimit" => "float",
    	"purchaseOrderApprovalLimit" => "float",
    	"socialSecurityNumber" => "string",
    	"supervisor" => "RecordRef",
    	"approver" => "RecordRef",
    	"approvalLimit" => "float",
    	"timeApprover" => "RecordRef",
    	"employeeType" => "RecordRef",
    	"isSalesRep" => "boolean",
    	"salesRole" => "RecordRef",
    	"isSupportRep" => "boolean",
    	"isJobResource" => "boolean",
    	"laborCost" => "float",
    	"birthDate" => "dateTime",
    	"hireDate" => "dateTime",
    	"releaseDate" => "dateTime",
    	"lastReviewDate" => "dateTime",
    	"nextReviewDate" => "dateTime",
    	"title" => "string",
    	"employeeStatus" => "RecordRef",
    	"jobDescription" => "string",
    	"maritalStatus" => "RecordRef",
    	"ethnicity" => "RecordRef",
    	"gender" => "Gender",
    	"purchaseOrderApprover" => "RecordRef",
    	"workCalendar" => "RecordRef",
    	"giveAccess" => "boolean",
    	"concurrentWebServicesUser" => "boolean",
    	"sendEmail" => "boolean",
    	"hasOfflineAccess" => "boolean",
    	"password" => "string",
    	"password2" => "string",
    	"requirePwdChange" => "boolean",
    	"inheritIPRules" => "boolean",
    	"IPAddressRule" => "string",
    	"commissionPaymentPreference" => "EmployeeCommissionPaymentPreference",
    	"billPay" => "boolean",
    	"eligibleForCommission" => "boolean",
    	"subscriptionsList" => "EmployeeSubscriptionsList",
    	"addressbookList" => "EmployeeAddressbookList",
    	"rolesList" => "EmployeeRolesList",
    	"hrEducationList" => "EmployeeHrEducationList",
    	"accruedTimeList" => "EmployeeAccruedTimeList",
    	"directDepositList" => "EmployeeDirectDepositList",
    	"companyContributionList" => "EmployeeCompanyContributionList",
    	"earningList" => "EmployeeEarningList",
    	"emergencyContactList" => "EmployeeEmergencyContactList",
    	"deductionList" => "EmployeeDeductionList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Employee
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
     * Set salutation
     *
     * @param string $salutation
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * Set altName
     *
     * @param string $altName
     * @return Employee
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
     * Set phone
     *
     * @param string $phone
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * Set defaultAddress
     *
     * @param string $defaultAddress
     * @return Employee
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
     * @return Employee
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
     * Set phoneticName
     *
     * @param string $phoneticName
     * @return Employee
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Employee
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
     * @return Employee
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
     * Set initials
     *
     * @param string $initials
     * @return Employee
     */
    public function setInitials($initials) {
        $this->initials = $initials;
        return $this;
    }

    /**
     * Get initials
     *
     * @return string
     */
    public function getInitials() {
        return $this->initials;
    }


    /**
     * Set officePhone
     *
     * @param string $officePhone
     * @return Employee
     */
    public function setOfficePhone($officePhone) {
        $this->officePhone = $officePhone;
        return $this;
    }

    /**
     * Get officePhone
     *
     * @return string
     */
    public function getOfficePhone() {
        return $this->officePhone;
    }


    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Employee
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
     * @return Employee
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
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Employee
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
     * Set comments
     *
     * @param string $comments
     * @return Employee
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
     * @return Employee
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
     * Set payFrequency
     *
     * @param EmployeePayFrequency $payFrequency
     * @return Employee
     */
    public function setPayFrequency(EmployeePayFrequency $payFrequency) {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * Get payFrequency
     *
     * @return EmployeePayFrequency
     */
    public function getPayFrequency() {
        return $this->payFrequency;
    }


    /**
     * Set lastPaidDate
     *
     * @param \DateTime $lastPaidDate
     * @return Employee
     */
    public function setLastPaidDate(\DateTime $lastPaidDate) {
        $this->lastPaidDate = $lastPaidDate->format('c');
        return $this;
    }

    /**
     * Get lastPaidDate
     *
     * @return \DateTime
     */
    public function getLastPaidDate() {
        return new \DateTime($this->lastPaidDate);
    }


    /**
     * Set useTimeData
     *
     * @param EmployeeUseTimeData $useTimeData
     * @return Employee
     */
    public function setUseTimeData(EmployeeUseTimeData $useTimeData) {
        $this->useTimeData = $useTimeData;
        return $this;
    }

    /**
     * Get useTimeData
     *
     * @return EmployeeUseTimeData
     */
    public function getUseTimeData() {
        return $this->useTimeData;
    }


    /**
     * Set usePerquest
     *
     * @param boolean $usePerquest
     * @return Employee
     */
    public function setUsePerquest($usePerquest) {
        $this->usePerquest = $usePerquest;
        return $this;
    }

    /**
     * Get usePerquest
     *
     * @return boolean
     */
    public function getUsePerquest() {
        return $this->usePerquest;
    }


    /**
     * Set adpId
     *
     * @param string $adpId
     * @return Employee
     */
    public function setAdpId($adpId) {
        $this->adpId = $adpId;
        return $this;
    }

    /**
     * Get adpId
     *
     * @return string
     */
    public function getAdpId() {
        return $this->adpId;
    }


    /**
     * Set directDeposit
     *
     * @param boolean $directDeposit
     * @return Employee
     */
    public function setDirectDeposit($directDeposit) {
        $this->directDeposit = $directDeposit;
        return $this;
    }

    /**
     * Get directDeposit
     *
     * @return boolean
     */
    public function getDirectDeposit() {
        return $this->directDeposit;
    }


    /**
     * Set expenseLimit
     *
     * @param float $expenseLimit
     * @return Employee
     */
    public function setExpenseLimit($expenseLimit) {
        $this->expenseLimit = $expenseLimit;
        return $this;
    }

    /**
     * Get expenseLimit
     *
     * @return float
     */
    public function getExpenseLimit() {
        return $this->expenseLimit;
    }


    /**
     * Set purchaseOrderLimit
     *
     * @param float $purchaseOrderLimit
     * @return Employee
     */
    public function setPurchaseOrderLimit($purchaseOrderLimit) {
        $this->purchaseOrderLimit = $purchaseOrderLimit;
        return $this;
    }

    /**
     * Get purchaseOrderLimit
     *
     * @return float
     */
    public function getPurchaseOrderLimit() {
        return $this->purchaseOrderLimit;
    }


    /**
     * Set purchaseOrderApprovalLimit
     *
     * @param float $purchaseOrderApprovalLimit
     * @return Employee
     */
    public function setPurchaseOrderApprovalLimit($purchaseOrderApprovalLimit) {
        $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
        return $this;
    }

    /**
     * Get purchaseOrderApprovalLimit
     *
     * @return float
     */
    public function getPurchaseOrderApprovalLimit() {
        return $this->purchaseOrderApprovalLimit;
    }


    /**
     * Set socialSecurityNumber
     *
     * @param string $socialSecurityNumber
     * @return Employee
     */
    public function setSocialSecurityNumber($socialSecurityNumber) {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * Get socialSecurityNumber
     *
     * @return string
     */
    public function getSocialSecurityNumber() {
        return $this->socialSecurityNumber;
    }


    /**
     * Set approvalLimit
     *
     * @param float $approvalLimit
     * @return Employee
     */
    public function setApprovalLimit($approvalLimit) {
        $this->approvalLimit = $approvalLimit;
        return $this;
    }

    /**
     * Get approvalLimit
     *
     * @return float
     */
    public function getApprovalLimit() {
        return $this->approvalLimit;
    }


    /**
     * Set isSalesRep
     *
     * @param boolean $isSalesRep
     * @return Employee
     */
    public function setIsSalesRep($isSalesRep) {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * Get isSalesRep
     *
     * @return boolean
     */
    public function getIsSalesRep() {
        return $this->isSalesRep;
    }


    /**
     * Set isSupportRep
     *
     * @param boolean $isSupportRep
     * @return Employee
     */
    public function setIsSupportRep($isSupportRep) {
        $this->isSupportRep = $isSupportRep;
        return $this;
    }

    /**
     * Get isSupportRep
     *
     * @return boolean
     */
    public function getIsSupportRep() {
        return $this->isSupportRep;
    }


    /**
     * Set isJobResource
     *
     * @param boolean $isJobResource
     * @return Employee
     */
    public function setIsJobResource($isJobResource) {
        $this->isJobResource = $isJobResource;
        return $this;
    }

    /**
     * Get isJobResource
     *
     * @return boolean
     */
    public function getIsJobResource() {
        return $this->isJobResource;
    }


    /**
     * Set laborCost
     *
     * @param float $laborCost
     * @return Employee
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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Employee
     */
    public function setBirthDate(\DateTime $birthDate) {
        $this->birthDate = $birthDate->format('c');
        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate() {
        return new \DateTime($this->birthDate);
    }


    /**
     * Set hireDate
     *
     * @param \DateTime $hireDate
     * @return Employee
     */
    public function setHireDate(\DateTime $hireDate) {
        $this->hireDate = $hireDate->format('c');
        return $this;
    }

    /**
     * Get hireDate
     *
     * @return \DateTime
     */
    public function getHireDate() {
        return new \DateTime($this->hireDate);
    }


    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return Employee
     */
    public function setReleaseDate(\DateTime $releaseDate) {
        $this->releaseDate = $releaseDate->format('c');
        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime
     */
    public function getReleaseDate() {
        return new \DateTime($this->releaseDate);
    }


    /**
     * Set lastReviewDate
     *
     * @param \DateTime $lastReviewDate
     * @return Employee
     */
    public function setLastReviewDate(\DateTime $lastReviewDate) {
        $this->lastReviewDate = $lastReviewDate->format('c');
        return $this;
    }

    /**
     * Get lastReviewDate
     *
     * @return \DateTime
     */
    public function getLastReviewDate() {
        return new \DateTime($this->lastReviewDate);
    }


    /**
     * Set nextReviewDate
     *
     * @param \DateTime $nextReviewDate
     * @return Employee
     */
    public function setNextReviewDate(\DateTime $nextReviewDate) {
        $this->nextReviewDate = $nextReviewDate->format('c');
        return $this;
    }

    /**
     * Get nextReviewDate
     *
     * @return \DateTime
     */
    public function getNextReviewDate() {
        return new \DateTime($this->nextReviewDate);
    }


    /**
     * Set title
     *
     * @param string $title
     * @return Employee
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
     * Set jobDescription
     *
     * @param string $jobDescription
     * @return Employee
     */
    public function setJobDescription($jobDescription) {
        $this->jobDescription = $jobDescription;
        return $this;
    }

    /**
     * Get jobDescription
     *
     * @return string
     */
    public function getJobDescription() {
        return $this->jobDescription;
    }


    /**
     * Set gender
     *
     * @param Gender $gender
     * @return Employee
     */
    public function setGender(Gender $gender) {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return Gender
     */
    public function getGender() {
        return $this->gender;
    }


    /**
     * Set giveAccess
     *
     * @param boolean $giveAccess
     * @return Employee
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
     * Set concurrentWebServicesUser
     *
     * @param boolean $concurrentWebServicesUser
     * @return Employee
     */
    public function setConcurrentWebServicesUser($concurrentWebServicesUser) {
        $this->concurrentWebServicesUser = $concurrentWebServicesUser;
        return $this;
    }

    /**
     * Get concurrentWebServicesUser
     *
     * @return boolean
     */
    public function getConcurrentWebServicesUser() {
        return $this->concurrentWebServicesUser;
    }


    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return Employee
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
     * Set hasOfflineAccess
     *
     * @param boolean $hasOfflineAccess
     * @return Employee
     */
    public function setHasOfflineAccess($hasOfflineAccess) {
        $this->hasOfflineAccess = $hasOfflineAccess;
        return $this;
    }

    /**
     * Get hasOfflineAccess
     *
     * @return boolean
     */
    public function getHasOfflineAccess() {
        return $this->hasOfflineAccess;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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
     * Set inheritIPRules
     *
     * @param boolean $inheritIPRules
     * @return Employee
     */
    public function setInheritIPRules($inheritIPRules) {
        $this->inheritIPRules = $inheritIPRules;
        return $this;
    }

    /**
     * Get inheritIPRules
     *
     * @return boolean
     */
    public function getInheritIPRules() {
        return $this->inheritIPRules;
    }


    /**
     * Set IPAddressRule
     *
     * @param string $IPAddressRule
     * @return Employee
     */
    public function setIPAddressRule($IPAddressRule) {
        $this->IPAddressRule = $IPAddressRule;
        return $this;
    }

    /**
     * Get IPAddressRule
     *
     * @return string
     */
    public function getIPAddressRule() {
        return $this->IPAddressRule;
    }


    /**
     * Set commissionPaymentPreference
     *
     * @param EmployeeCommissionPaymentPreference $commissionPaymentPreference
     * @return Employee
     */
    public function setCommissionPaymentPreference(EmployeeCommissionPaymentPreference $commissionPaymentPreference) {
        $this->commissionPaymentPreference = $commissionPaymentPreference;
        return $this;
    }

    /**
     * Get commissionPaymentPreference
     *
     * @return EmployeeCommissionPaymentPreference
     */
    public function getCommissionPaymentPreference() {
        return $this->commissionPaymentPreference;
    }


    /**
     * Set billPay
     *
     * @param boolean $billPay
     * @return Employee
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
     * Set eligibleForCommission
     *
     * @param boolean $eligibleForCommission
     * @return Employee
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
     * Set subscriptionsList
     *
     * @param EmployeeSubscriptionsList $subscriptionsList
     * @return Employee
     */
    public function setSubscriptionsList(EmployeeSubscriptionsList $subscriptionsList) {
        $this->subscriptionsList = $subscriptionsList;
        return $this;
    }

    /**
     * Get subscriptionsList
     *
     * @return EmployeeSubscriptionsList
     */
    public function getSubscriptionsList() {
        return $this->subscriptionsList;
    }


    /**
     * Set addressbookList
     *
     * @param EmployeeAddressbookList $addressbookList
     * @return Employee
     */
    public function setAddressbookList(EmployeeAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return EmployeeAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set rolesList
     *
     * @param EmployeeRolesList $rolesList
     * @return Employee
     */
    public function setRolesList(EmployeeRolesList $rolesList) {
        $this->rolesList = $rolesList;
        return $this;
    }

    /**
     * Get rolesList
     *
     * @return EmployeeRolesList
     */
    public function getRolesList() {
        return $this->rolesList;
    }


    /**
     * Set hrEducationList
     *
     * @param EmployeeHrEducationList $hrEducationList
     * @return Employee
     */
    public function setHrEducationList(EmployeeHrEducationList $hrEducationList) {
        $this->hrEducationList = $hrEducationList;
        return $this;
    }

    /**
     * Get hrEducationList
     *
     * @return EmployeeHrEducationList
     */
    public function getHrEducationList() {
        return $this->hrEducationList;
    }


    /**
     * Set accruedTimeList
     *
     * @param EmployeeAccruedTimeList $accruedTimeList
     * @return Employee
     */
    public function setAccruedTimeList(EmployeeAccruedTimeList $accruedTimeList) {
        $this->accruedTimeList = $accruedTimeList;
        return $this;
    }

    /**
     * Get accruedTimeList
     *
     * @return EmployeeAccruedTimeList
     */
    public function getAccruedTimeList() {
        return $this->accruedTimeList;
    }


    /**
     * Set directDepositList
     *
     * @param EmployeeDirectDepositList $directDepositList
     * @return Employee
     */
    public function setDirectDepositList(EmployeeDirectDepositList $directDepositList) {
        $this->directDepositList = $directDepositList;
        return $this;
    }

    /**
     * Get directDepositList
     *
     * @return EmployeeDirectDepositList
     */
    public function getDirectDepositList() {
        return $this->directDepositList;
    }


    /**
     * Set companyContributionList
     *
     * @param EmployeeCompanyContributionList $companyContributionList
     * @return Employee
     */
    public function setCompanyContributionList(EmployeeCompanyContributionList $companyContributionList) {
        $this->companyContributionList = $companyContributionList;
        return $this;
    }

    /**
     * Get companyContributionList
     *
     * @return EmployeeCompanyContributionList
     */
    public function getCompanyContributionList() {
        return $this->companyContributionList;
    }


    /**
     * Set earningList
     *
     * @param EmployeeEarningList $earningList
     * @return Employee
     */
    public function setEarningList(EmployeeEarningList $earningList) {
        $this->earningList = $earningList;
        return $this;
    }

    /**
     * Get earningList
     *
     * @return EmployeeEarningList
     */
    public function getEarningList() {
        return $this->earningList;
    }


    /**
     * Set emergencyContactList
     *
     * @param EmployeeEmergencyContactList $emergencyContactList
     * @return Employee
     */
    public function setEmergencyContactList(EmployeeEmergencyContactList $emergencyContactList) {
        $this->emergencyContactList = $emergencyContactList;
        return $this;
    }

    /**
     * Get emergencyContactList
     *
     * @return EmployeeEmergencyContactList
     */
    public function getEmergencyContactList() {
        return $this->emergencyContactList;
    }


    /**
     * Set deductionList
     *
     * @param EmployeeDeductionList $deductionList
     * @return Employee
     */
    public function setDeductionList(EmployeeDeductionList $deductionList) {
        $this->deductionList = $deductionList;
        return $this;
    }

    /**
     * Get deductionList
     *
     * @return EmployeeDeductionList
     */
    public function getDeductionList() {
        return $this->deductionList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Employee
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
     * @return Employee
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
     * @return Employee
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