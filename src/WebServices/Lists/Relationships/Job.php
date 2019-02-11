<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\Duration;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EmailPreference;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\JobBillingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Job
 */
class Job extends Record {

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
     * @var string
     */
    protected $companyName;

    /**
     * @access public
     * @var string
     */
    protected $phoneticName;

    /**
     * @access public
     * @var RecordRef
     */
    public $entityStatus;

    /**
     * @access public
     * @var string
     */
    protected $defaultAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

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
     * @var boolean
     */
    protected $billPay;

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
     * @var RecordRef
     */
    public $workplace;

    /**
     * @access public
     * @var RecordRef
     */
    public $language;

    /**
     * @access public
     * @var string
     */
    protected $comments;

    /**
     * @access public
     * @var string
     */
    protected $accountNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var float
     */
    protected $fxRate;

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
     * @var string
     */
    protected $phone;

    /**
     * @access public
     * @var string
     */
    protected $altPhone;

    /**
     * @access public
     * @var dateTime
     */
    protected $calculatedEndDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $calculatedEndDateBaseline;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDateBaseline;

    /**
     * @access public
     * @var dateTime
     */
    protected $projectedEndDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $projectedEndDateBaseline;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastBaselineDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $jobType;

    /**
     * @access public
     * @var float
     */
    protected $percentComplete;

    /**
     * @access public
     * @var float
     */
    protected $estimatedCost;

    /**
     * @access public
     * @var float
     */
    protected $estimatedRevenue;

    /**
     * @access public
     * @var Duration
     */
    protected $estimatedTime;

    /**
     * @access public
     * @var Duration
     */
    protected $estimatedTimeOverride;

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
     * @var EmailPreference
     */
    protected $emailPreference;

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
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var JobBillingType
     */
    protected $jobBillingType;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $jobItem;

    /**
     * @access public
     * @var float
     */
    protected $percentTimeComplete;

    /**
     * @access public
     * @var Duration
     */
    protected $actualTime;

    /**
     * @access public
     * @var boolean
     */
    protected $allowTime;

    /**
     * @access public
     * @var Duration
     */
    protected $timeRemaining;

    /**
     * @access public
     * @var boolean
     */
    protected $limitTimeToAssignees;

    /**
     * @access public
     * @var float
     */
    protected $estimatedLaborCost;

    /**
     * @access public
     * @var float
     */
    protected $estimatedLaborCostBaseline;

    /**
     * @access public
     * @var RecordRef
     */
    public $estimateRevRecTemplate;

    /**
     * @access public
     * @var float
     */
    protected $estimatedLaborRevenue;

    /**
     * @access public
     * @var float
     */
    protected $estimatedGrossProfit;

    /**
     * @access public
     * @var float
     */
    protected $estimatedGrossProfitPercent;

    /**
     * @access public
     * @var RecordRef
     */
    public $projectExpenseType;

    /**
     * @access public
     * @var boolean
     */
    protected $applyProjectExpenseTypeToAll;

    /**
     * @access public
     * @var boolean
     */
    protected $allowAllResourcesForTasks;

    /**
     * @access public
     * @var float
     */
    protected $jobPrice;

    /**
     * @access public
     * @var boolean
     */
    protected $isUtilizedTime;

    /**
     * @access public
     * @var boolean
     */
    protected $isProductiveTime;

    /**
     * @access public
     * @var boolean
     */
    protected $isExemptTime;

    /**
     * @access public
     * @var boolean
     */
    protected $materializeTime;

    /**
     * @access public
     * @var boolean
     */
    protected $allowExpenses;

    /**
     * @access public
     * @var boolean
     */
    protected $allocatePayrollExpenses;

    /**
     * @access public
     * @var boolean
     */
    protected $includeCrmTasksInTotals;

    /**
     * @access public
     * @var GlobalSubscriptionStatus
     */
    protected $globalSubscriptionStatus;

    /**
     * @access public
     * @var JobResourcesList
     */
    protected $jobResourcesList;

    /**
     * @access public
     * @var JobPlStatementList
     */
    protected $plStatementList;

    /**
     * @access public
     * @var JobAddressbookList
     */
    protected $addressbookList;

    /**
     * @access public
     * @var JobMilestonesList
     */
    protected $milestonesList;

    /**
     * @access public
     * @var JobCreditCardsList
     */
    protected $creditCardsList;

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
    	"companyName" => "string",
    	"phoneticName" => "string",
    	"entityStatus" => "RecordRef",
    	"defaultAddress" => "string",
    	"parent" => "RecordRef",
    	"isInactive" => "boolean",
    	"lastModifiedDate" => "dateTime",
    	"billPay" => "boolean",
    	"dateCreated" => "dateTime",
    	"category" => "RecordRef",
    	"workplace" => "RecordRef",
    	"language" => "RecordRef",
    	"comments" => "string",
    	"accountNumber" => "string",
    	"currency" => "RecordRef",
    	"fxRate" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"phone" => "string",
    	"altPhone" => "string",
    	"calculatedEndDate" => "dateTime",
    	"calculatedEndDateBaseline" => "dateTime",
    	"startDateBaseline" => "dateTime",
    	"projectedEndDate" => "dateTime",
    	"projectedEndDateBaseline" => "dateTime",
    	"lastBaselineDate" => "dateTime",
    	"jobType" => "RecordRef",
    	"percentComplete" => "float",
    	"estimatedCost" => "float",
    	"estimatedRevenue" => "float",
    	"estimatedTime" => "Duration",
    	"estimatedTimeOverride" => "Duration",
    	"fax" => "string",
    	"email" => "string",
    	"emailPreference" => "EmailPreference",
    	"openingBalance" => "float",
    	"openingBalanceDate" => "dateTime",
    	"openingBalanceAccount" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"jobBillingType" => "JobBillingType",
    	"billingSchedule" => "RecordRef",
    	"jobItem" => "RecordRef",
    	"percentTimeComplete" => "float",
    	"actualTime" => "Duration",
    	"allowTime" => "boolean",
    	"timeRemaining" => "Duration",
    	"limitTimeToAssignees" => "boolean",
    	"estimatedLaborCost" => "float",
    	"estimatedLaborCostBaseline" => "float",
    	"estimateRevRecTemplate" => "RecordRef",
    	"estimatedLaborRevenue" => "float",
    	"estimatedGrossProfit" => "float",
    	"estimatedGrossProfitPercent" => "float",
    	"projectExpenseType" => "RecordRef",
    	"applyProjectExpenseTypeToAll" => "boolean",
    	"allowAllResourcesForTasks" => "boolean",
    	"jobPrice" => "float",
    	"isUtilizedTime" => "boolean",
    	"isProductiveTime" => "boolean",
    	"isExemptTime" => "boolean",
    	"materializeTime" => "boolean",
    	"allowExpenses" => "boolean",
    	"allocatePayrollExpenses" => "boolean",
    	"includeCrmTasksInTotals" => "boolean",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"jobResourcesList" => "JobResourcesList",
    	"plStatementList" => "JobPlStatementList",
    	"addressbookList" => "JobAddressbookList",
    	"milestonesList" => "JobMilestonesList",
    	"creditCardsList" => "JobCreditCardsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Job
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
     * @return Job
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
     * Set companyName
     *
     * @param string $companyName
     * @return Job
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
     * Set phoneticName
     *
     * @param string $phoneticName
     * @return Job
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
     * Set defaultAddress
     *
     * @param string $defaultAddress
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * Set billPay
     *
     * @param boolean $billPay
     * @return Job
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Job
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
     * Set comments
     *
     * @param string $comments
     * @return Job
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
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return Job
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
     * Set fxRate
     *
     * @param float $fxRate
     * @return Job
     */
    public function setFxRate($fxRate) {
        $this->fxRate = $fxRate;
        return $this;
    }

    /**
     * Get fxRate
     *
     * @return float
     */
    public function getFxRate() {
        return $this->fxRate;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Job
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
     * @return Job
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
     * Set phone
     *
     * @param string $phone
     * @return Job
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
     * Set altPhone
     *
     * @param string $altPhone
     * @return Job
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
     * Set calculatedEndDate
     *
     * @param \DateTime $calculatedEndDate
     * @return Job
     */
    public function setCalculatedEndDate(\DateTime $calculatedEndDate) {
        $this->calculatedEndDate = $calculatedEndDate->format('c');
        return $this;
    }

    /**
     * Get calculatedEndDate
     *
     * @return \DateTime
     */
    public function getCalculatedEndDate() {
        return new \DateTime($this->calculatedEndDate);
    }


    /**
     * Set calculatedEndDateBaseline
     *
     * @param \DateTime $calculatedEndDateBaseline
     * @return Job
     */
    public function setCalculatedEndDateBaseline(\DateTime $calculatedEndDateBaseline) {
        $this->calculatedEndDateBaseline = $calculatedEndDateBaseline->format('c');
        return $this;
    }

    /**
     * Get calculatedEndDateBaseline
     *
     * @return \DateTime
     */
    public function getCalculatedEndDateBaseline() {
        return new \DateTime($this->calculatedEndDateBaseline);
    }


    /**
     * Set startDateBaseline
     *
     * @param \DateTime $startDateBaseline
     * @return Job
     */
    public function setStartDateBaseline(\DateTime $startDateBaseline) {
        $this->startDateBaseline = $startDateBaseline->format('c');
        return $this;
    }

    /**
     * Get startDateBaseline
     *
     * @return \DateTime
     */
    public function getStartDateBaseline() {
        return new \DateTime($this->startDateBaseline);
    }


    /**
     * Set projectedEndDate
     *
     * @param \DateTime $projectedEndDate
     * @return Job
     */
    public function setProjectedEndDate(\DateTime $projectedEndDate) {
        $this->projectedEndDate = $projectedEndDate->format('c');
        return $this;
    }

    /**
     * Get projectedEndDate
     *
     * @return \DateTime
     */
    public function getProjectedEndDate() {
        return new \DateTime($this->projectedEndDate);
    }


    /**
     * Set projectedEndDateBaseline
     *
     * @param \DateTime $projectedEndDateBaseline
     * @return Job
     */
    public function setProjectedEndDateBaseline(\DateTime $projectedEndDateBaseline) {
        $this->projectedEndDateBaseline = $projectedEndDateBaseline->format('c');
        return $this;
    }

    /**
     * Get projectedEndDateBaseline
     *
     * @return \DateTime
     */
    public function getProjectedEndDateBaseline() {
        return new \DateTime($this->projectedEndDateBaseline);
    }


    /**
     * Set lastBaselineDate
     *
     * @param \DateTime $lastBaselineDate
     * @return Job
     */
    public function setLastBaselineDate(\DateTime $lastBaselineDate) {
        $this->lastBaselineDate = $lastBaselineDate->format('c');
        return $this;
    }

    /**
     * Get lastBaselineDate
     *
     * @return \DateTime
     */
    public function getLastBaselineDate() {
        return new \DateTime($this->lastBaselineDate);
    }


    /**
     * Set percentComplete
     *
     * @param float $percentComplete
     * @return Job
     */
    public function setPercentComplete($percentComplete) {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return float
     */
    public function getPercentComplete() {
        return $this->percentComplete;
    }


    /**
     * Set estimatedCost
     *
     * @param float $estimatedCost
     * @return Job
     */
    public function setEstimatedCost($estimatedCost) {
        $this->estimatedCost = $estimatedCost;
        return $this;
    }

    /**
     * Get estimatedCost
     *
     * @return float
     */
    public function getEstimatedCost() {
        return $this->estimatedCost;
    }


    /**
     * Set estimatedRevenue
     *
     * @param float $estimatedRevenue
     * @return Job
     */
    public function setEstimatedRevenue($estimatedRevenue) {
        $this->estimatedRevenue = $estimatedRevenue;
        return $this;
    }

    /**
     * Get estimatedRevenue
     *
     * @return float
     */
    public function getEstimatedRevenue() {
        return $this->estimatedRevenue;
    }


    /**
     * Set estimatedTime
     *
     * @param Duration $estimatedTime
     * @return Job
     */
    public function setEstimatedTime(Duration $estimatedTime) {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * Get estimatedTime
     *
     * @return Duration
     */
    public function getEstimatedTime() {
        return $this->estimatedTime;
    }


    /**
     * Set estimatedTimeOverride
     *
     * @param Duration $estimatedTimeOverride
     * @return Job
     */
    public function setEstimatedTimeOverride(Duration $estimatedTimeOverride) {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * Get estimatedTimeOverride
     *
     * @return Duration
     */
    public function getEstimatedTimeOverride() {
        return $this->estimatedTimeOverride;
    }


    /**
     * Set fax
     *
     * @param string $fax
     * @return Job
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
     * @return Job
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
     * Set emailPreference
     *
     * @param EmailPreference $emailPreference
     * @return Job
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
     * Set openingBalance
     *
     * @param float $openingBalance
     * @return Job
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
     * @return Job
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
     * Set jobBillingType
     *
     * @param JobBillingType $jobBillingType
     * @return Job
     */
    public function setJobBillingType(JobBillingType $jobBillingType) {
        $this->jobBillingType = $jobBillingType;
        return $this;
    }

    /**
     * Get jobBillingType
     *
     * @return JobBillingType
     */
    public function getJobBillingType() {
        return $this->jobBillingType;
    }


    /**
     * Set percentTimeComplete
     *
     * @param float $percentTimeComplete
     * @return Job
     */
    public function setPercentTimeComplete($percentTimeComplete) {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * Get percentTimeComplete
     *
     * @return float
     */
    public function getPercentTimeComplete() {
        return $this->percentTimeComplete;
    }


    /**
     * Set actualTime
     *
     * @param Duration $actualTime
     * @return Job
     */
    public function setActualTime(Duration $actualTime) {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * Get actualTime
     *
     * @return Duration
     */
    public function getActualTime() {
        return $this->actualTime;
    }


    /**
     * Set allowTime
     *
     * @param boolean $allowTime
     * @return Job
     */
    public function setAllowTime($allowTime) {
        $this->allowTime = $allowTime;
        return $this;
    }

    /**
     * Get allowTime
     *
     * @return boolean
     */
    public function getAllowTime() {
        return $this->allowTime;
    }


    /**
     * Set timeRemaining
     *
     * @param Duration $timeRemaining
     * @return Job
     */
    public function setTimeRemaining(Duration $timeRemaining) {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * Get timeRemaining
     *
     * @return Duration
     */
    public function getTimeRemaining() {
        return $this->timeRemaining;
    }


    /**
     * Set limitTimeToAssignees
     *
     * @param boolean $limitTimeToAssignees
     * @return Job
     */
    public function setLimitTimeToAssignees($limitTimeToAssignees) {
        $this->limitTimeToAssignees = $limitTimeToAssignees;
        return $this;
    }

    /**
     * Get limitTimeToAssignees
     *
     * @return boolean
     */
    public function getLimitTimeToAssignees() {
        return $this->limitTimeToAssignees;
    }


    /**
     * Set estimatedLaborCost
     *
     * @param float $estimatedLaborCost
     * @return Job
     */
    public function setEstimatedLaborCost($estimatedLaborCost) {
        $this->estimatedLaborCost = $estimatedLaborCost;
        return $this;
    }

    /**
     * Get estimatedLaborCost
     *
     * @return float
     */
    public function getEstimatedLaborCost() {
        return $this->estimatedLaborCost;
    }


    /**
     * Set estimatedLaborCostBaseline
     *
     * @param float $estimatedLaborCostBaseline
     * @return Job
     */
    public function setEstimatedLaborCostBaseline($estimatedLaborCostBaseline) {
        $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
        return $this;
    }

    /**
     * Get estimatedLaborCostBaseline
     *
     * @return float
     */
    public function getEstimatedLaborCostBaseline() {
        return $this->estimatedLaborCostBaseline;
    }


    /**
     * Set estimatedLaborRevenue
     *
     * @param float $estimatedLaborRevenue
     * @return Job
     */
    public function setEstimatedLaborRevenue($estimatedLaborRevenue) {
        $this->estimatedLaborRevenue = $estimatedLaborRevenue;
        return $this;
    }

    /**
     * Get estimatedLaborRevenue
     *
     * @return float
     */
    public function getEstimatedLaborRevenue() {
        return $this->estimatedLaborRevenue;
    }


    /**
     * Set estimatedGrossProfit
     *
     * @param float $estimatedGrossProfit
     * @return Job
     */
    public function setEstimatedGrossProfit($estimatedGrossProfit) {
        $this->estimatedGrossProfit = $estimatedGrossProfit;
        return $this;
    }

    /**
     * Get estimatedGrossProfit
     *
     * @return float
     */
    public function getEstimatedGrossProfit() {
        return $this->estimatedGrossProfit;
    }


    /**
     * Set estimatedGrossProfitPercent
     *
     * @param float $estimatedGrossProfitPercent
     * @return Job
     */
    public function setEstimatedGrossProfitPercent($estimatedGrossProfitPercent) {
        $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
        return $this;
    }

    /**
     * Get estimatedGrossProfitPercent
     *
     * @return float
     */
    public function getEstimatedGrossProfitPercent() {
        return $this->estimatedGrossProfitPercent;
    }


    /**
     * Set applyProjectExpenseTypeToAll
     *
     * @param boolean $applyProjectExpenseTypeToAll
     * @return Job
     */
    public function setApplyProjectExpenseTypeToAll($applyProjectExpenseTypeToAll) {
        $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
        return $this;
    }

    /**
     * Get applyProjectExpenseTypeToAll
     *
     * @return boolean
     */
    public function getApplyProjectExpenseTypeToAll() {
        return $this->applyProjectExpenseTypeToAll;
    }


    /**
     * Set allowAllResourcesForTasks
     *
     * @param boolean $allowAllResourcesForTasks
     * @return Job
     */
    public function setAllowAllResourcesForTasks($allowAllResourcesForTasks) {
        $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
        return $this;
    }

    /**
     * Get allowAllResourcesForTasks
     *
     * @return boolean
     */
    public function getAllowAllResourcesForTasks() {
        return $this->allowAllResourcesForTasks;
    }


    /**
     * Set jobPrice
     *
     * @param float $jobPrice
     * @return Job
     */
    public function setJobPrice($jobPrice) {
        $this->jobPrice = $jobPrice;
        return $this;
    }

    /**
     * Get jobPrice
     *
     * @return float
     */
    public function getJobPrice() {
        return $this->jobPrice;
    }


    /**
     * Set isUtilizedTime
     *
     * @param boolean $isUtilizedTime
     * @return Job
     */
    public function setIsUtilizedTime($isUtilizedTime) {
        $this->isUtilizedTime = $isUtilizedTime;
        return $this;
    }

    /**
     * Get isUtilizedTime
     *
     * @return boolean
     */
    public function getIsUtilizedTime() {
        return $this->isUtilizedTime;
    }


    /**
     * Set isProductiveTime
     *
     * @param boolean $isProductiveTime
     * @return Job
     */
    public function setIsProductiveTime($isProductiveTime) {
        $this->isProductiveTime = $isProductiveTime;
        return $this;
    }

    /**
     * Get isProductiveTime
     *
     * @return boolean
     */
    public function getIsProductiveTime() {
        return $this->isProductiveTime;
    }


    /**
     * Set isExemptTime
     *
     * @param boolean $isExemptTime
     * @return Job
     */
    public function setIsExemptTime($isExemptTime) {
        $this->isExemptTime = $isExemptTime;
        return $this;
    }

    /**
     * Get isExemptTime
     *
     * @return boolean
     */
    public function getIsExemptTime() {
        return $this->isExemptTime;
    }


    /**
     * Set materializeTime
     *
     * @param boolean $materializeTime
     * @return Job
     */
    public function setMaterializeTime($materializeTime) {
        $this->materializeTime = $materializeTime;
        return $this;
    }

    /**
     * Get materializeTime
     *
     * @return boolean
     */
    public function getMaterializeTime() {
        return $this->materializeTime;
    }


    /**
     * Set allowExpenses
     *
     * @param boolean $allowExpenses
     * @return Job
     */
    public function setAllowExpenses($allowExpenses) {
        $this->allowExpenses = $allowExpenses;
        return $this;
    }

    /**
     * Get allowExpenses
     *
     * @return boolean
     */
    public function getAllowExpenses() {
        return $this->allowExpenses;
    }


    /**
     * Set allocatePayrollExpenses
     *
     * @param boolean $allocatePayrollExpenses
     * @return Job
     */
    public function setAllocatePayrollExpenses($allocatePayrollExpenses) {
        $this->allocatePayrollExpenses = $allocatePayrollExpenses;
        return $this;
    }

    /**
     * Get allocatePayrollExpenses
     *
     * @return boolean
     */
    public function getAllocatePayrollExpenses() {
        return $this->allocatePayrollExpenses;
    }


    /**
     * Set includeCrmTasksInTotals
     *
     * @param boolean $includeCrmTasksInTotals
     * @return Job
     */
    public function setIncludeCrmTasksInTotals($includeCrmTasksInTotals) {
        $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
        return $this;
    }

    /**
     * Get includeCrmTasksInTotals
     *
     * @return boolean
     */
    public function getIncludeCrmTasksInTotals() {
        return $this->includeCrmTasksInTotals;
    }


    /**
     * Set globalSubscriptionStatus
     *
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Job
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
     * Set jobResourcesList
     *
     * @param JobResourcesList $jobResourcesList
     * @return Job
     */
    public function setJobResourcesList(JobResourcesList $jobResourcesList) {
        $this->jobResourcesList = $jobResourcesList;
        return $this;
    }

    /**
     * Get jobResourcesList
     *
     * @return JobResourcesList
     */
    public function getJobResourcesList() {
        return $this->jobResourcesList;
    }


    /**
     * Set plStatementList
     *
     * @param JobPlStatementList $plStatementList
     * @return Job
     */
    public function setPlStatementList(JobPlStatementList $plStatementList) {
        $this->plStatementList = $plStatementList;
        return $this;
    }

    /**
     * Get plStatementList
     *
     * @return JobPlStatementList
     */
    public function getPlStatementList() {
        return $this->plStatementList;
    }


    /**
     * Set addressbookList
     *
     * @param JobAddressbookList $addressbookList
     * @return Job
     */
    public function setAddressbookList(JobAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return JobAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set milestonesList
     *
     * @param JobMilestonesList $milestonesList
     * @return Job
     */
    public function setMilestonesList(JobMilestonesList $milestonesList) {
        $this->milestonesList = $milestonesList;
        return $this;
    }

    /**
     * Get milestonesList
     *
     * @return JobMilestonesList
     */
    public function getMilestonesList() {
        return $this->milestonesList;
    }


    /**
     * Set creditCardsList
     *
     * @param JobCreditCardsList $creditCardsList
     * @return Job
     */
    public function setCreditCardsList(JobCreditCardsList $creditCardsList) {
        $this->creditCardsList = $creditCardsList;
        return $this;
    }

    /**
     * Get creditCardsList
     *
     * @return JobCreditCardsList
     */
    public function getCreditCardsList() {
        return $this->creditCardsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Job
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
     * @return Job
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
     * @return Job
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