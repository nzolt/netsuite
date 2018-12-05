<?php

namespace Nzolt\NetSuite;

class Job extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $entityId
     */
    protected $entityId = null;

    /**
     * @var string $altName
     */
    protected $altName = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var RecordRef $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var string $defaultAddress
     */
    protected $defaultAddress = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var JobPercentCompleteOverrideList $percentCompleteOverrideList
     */
    protected $percentCompleteOverrideList = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var RecordRef $workplace
     */
    protected $workplace = null;

    /**
     * @var RecordRef $language
     */
    protected $language = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var float $fxRate
     */
    protected $fxRate = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $altPhone
     */
    protected $altPhone = null;

    /**
     * @var \DateTime $calculatedEndDate
     */
    protected $calculatedEndDate = null;

    /**
     * @var \DateTime $calculatedEndDateBaseline
     */
    protected $calculatedEndDateBaseline = null;

    /**
     * @var \DateTime $startDateBaseline
     */
    protected $startDateBaseline = null;

    /**
     * @var \DateTime $projectedEndDate
     */
    protected $projectedEndDate = null;

    /**
     * @var \DateTime $projectedEndDateBaseline
     */
    protected $projectedEndDateBaseline = null;

    /**
     * @var \DateTime $lastBaselineDate
     */
    protected $lastBaselineDate = null;

    /**
     * @var RecordRef $jobType
     */
    protected $jobType = null;

    /**
     * @var float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @var float $estimatedCost
     */
    protected $estimatedCost = null;

    /**
     * @var float $estimatedRevenue
     */
    protected $estimatedRevenue = null;

    /**
     * @var Duration $estimatedTime
     */
    protected $estimatedTime = null;

    /**
     * @var Duration $estimatedTimeOverride
     */
    protected $estimatedTimeOverride = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var EmailPreference $emailPreference
     */
    protected $emailPreference = null;

    /**
     * @var float $openingBalance
     */
    protected $openingBalance = null;

    /**
     * @var \DateTime $openingBalanceDate
     */
    protected $openingBalanceDate = null;

    /**
     * @var RecordRef $openingBalanceAccount
     */
    protected $openingBalanceAccount = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var JobBillingType $jobBillingType
     */
    protected $jobBillingType = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var RecordRef $jobItem
     */
    protected $jobItem = null;

    /**
     * @var float $percentTimeComplete
     */
    protected $percentTimeComplete = null;

    /**
     * @var Duration $actualTime
     */
    protected $actualTime = null;

    /**
     * @var boolean $allowTime
     */
    protected $allowTime = null;

    /**
     * @var Duration $timeRemaining
     */
    protected $timeRemaining = null;

    /**
     * @var boolean $limitTimeToAssignees
     */
    protected $limitTimeToAssignees = null;

    /**
     * @var float $estimatedLaborCost
     */
    protected $estimatedLaborCost = null;

    /**
     * @var float $estimatedLaborCostBaseline
     */
    protected $estimatedLaborCostBaseline = null;

    /**
     * @var RecordRef $estimateRevRecTemplate
     */
    protected $estimateRevRecTemplate = null;

    /**
     * @var RecordRef $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var boolean $usePercentCompleteOverride
     */
    protected $usePercentCompleteOverride = null;

    /**
     * @var float $estimatedLaborRevenue
     */
    protected $estimatedLaborRevenue = null;

    /**
     * @var float $estimatedGrossProfit
     */
    protected $estimatedGrossProfit = null;

    /**
     * @var float $estimatedGrossProfitPercent
     */
    protected $estimatedGrossProfitPercent = null;

    /**
     * @var RecordRef $projectExpenseType
     */
    protected $projectExpenseType = null;

    /**
     * @var boolean $applyProjectExpenseTypeToAll
     */
    protected $applyProjectExpenseTypeToAll = null;

    /**
     * @var boolean $allowAllResourcesForTasks
     */
    protected $allowAllResourcesForTasks = null;

    /**
     * @var float $jobPrice
     */
    protected $jobPrice = null;

    /**
     * @var boolean $isUtilizedTime
     */
    protected $isUtilizedTime = null;

    /**
     * @var boolean $isProductiveTime
     */
    protected $isProductiveTime = null;

    /**
     * @var boolean $isExemptTime
     */
    protected $isExemptTime = null;

    /**
     * @var boolean $materializeTime
     */
    protected $materializeTime = null;

    /**
     * @var boolean $allowExpenses
     */
    protected $allowExpenses = null;

    /**
     * @var boolean $allocatePayrollExpenses
     */
    protected $allocatePayrollExpenses = null;

    /**
     * @var boolean $includeCrmTasksInTotals
     */
    protected $includeCrmTasksInTotals = null;

    /**
     * @var GlobalSubscriptionStatus $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var JobResourcesList $jobResourcesList
     */
    protected $jobResourcesList = null;

    /**
     * @var JobPlStatementList $plStatementList
     */
    protected $plStatementList = null;

    /**
     * @var JobAddressbookList $addressbookList
     */
    protected $addressbookList = null;

    /**
     * @var JobMilestonesList $milestonesList
     */
    protected $milestonesList = null;

    /**
     * @var JobCreditCardsList $creditCardsList
     */
    protected $creditCardsList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\Job
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param string $entityId
     * @return \Nzolt\NetSuite\Job
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltName()
    {
      return $this->altName;
    }

    /**
     * @param string $altName
     * @return \Nzolt\NetSuite\Job
     */
    public function setAltName($altName)
    {
      $this->altName = $altName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \Nzolt\NetSuite\Job
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneticName()
    {
      return $this->phoneticName;
    }

    /**
     * @param string $phoneticName
     * @return \Nzolt\NetSuite\Job
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param RecordRef $entityStatus
     * @return \Nzolt\NetSuite\Job
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAddress()
    {
      return $this->defaultAddress;
    }

    /**
     * @param string $defaultAddress
     * @return \Nzolt\NetSuite\Job
     */
    public function setDefaultAddress($defaultAddress)
    {
      $this->defaultAddress = $defaultAddress;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\Job
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Job
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return JobPercentCompleteOverrideList
     */
    public function getPercentCompleteOverrideList()
    {
      return $this->percentCompleteOverrideList;
    }

    /**
     * @param JobPercentCompleteOverrideList $percentCompleteOverrideList
     * @return \Nzolt\NetSuite\Job
     */
    public function setPercentCompleteOverrideList($percentCompleteOverrideList)
    {
      $this->percentCompleteOverrideList = $percentCompleteOverrideList;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBillPay()
    {
      return $this->billPay;
    }

    /**
     * @param boolean $billPay
     * @return \Nzolt\NetSuite\Job
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
      if ($this->dateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateCreated
     * @return \Nzolt\NetSuite\Job
     */
    public function setDateCreated(\DateTime $dateCreated = null)
    {
      if ($dateCreated == null) {
       $this->dateCreated = null;
      } else {
        $this->dateCreated = $dateCreated->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param RecordRef $category
     * @return \Nzolt\NetSuite\Job
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace()
    {
      return $this->workplace;
    }

    /**
     * @param RecordRef $workplace
     * @return \Nzolt\NetSuite\Job
     */
    public function setWorkplace($workplace)
    {
      $this->workplace = $workplace;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param RecordRef $language
     * @return \Nzolt\NetSuite\Job
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Nzolt\NetSuite\Job
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \Nzolt\NetSuite\Job
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\Job
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getFxRate()
    {
      return $this->fxRate;
    }

    /**
     * @param float $fxRate
     * @return \Nzolt\NetSuite\Job
     */
    public function setFxRate($fxRate)
    {
      $this->fxRate = $fxRate;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Nzolt\NetSuite\Job
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltPhone()
    {
      return $this->altPhone;
    }

    /**
     * @param string $altPhone
     * @return \Nzolt\NetSuite\Job
     */
    public function setAltPhone($altPhone)
    {
      $this->altPhone = $altPhone;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCalculatedEndDate()
    {
      if ($this->calculatedEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->calculatedEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $calculatedEndDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setCalculatedEndDate(\DateTime $calculatedEndDate = null)
    {
      if ($calculatedEndDate == null) {
       $this->calculatedEndDate = null;
      } else {
        $this->calculatedEndDate = $calculatedEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCalculatedEndDateBaseline()
    {
      if ($this->calculatedEndDateBaseline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->calculatedEndDateBaseline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $calculatedEndDateBaseline
     * @return \Nzolt\NetSuite\Job
     */
    public function setCalculatedEndDateBaseline(\DateTime $calculatedEndDateBaseline = null)
    {
      if ($calculatedEndDateBaseline == null) {
       $this->calculatedEndDateBaseline = null;
      } else {
        $this->calculatedEndDateBaseline = $calculatedEndDateBaseline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateBaseline()
    {
      if ($this->startDateBaseline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDateBaseline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDateBaseline
     * @return \Nzolt\NetSuite\Job
     */
    public function setStartDateBaseline(\DateTime $startDateBaseline = null)
    {
      if ($startDateBaseline == null) {
       $this->startDateBaseline = null;
      } else {
        $this->startDateBaseline = $startDateBaseline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProjectedEndDate()
    {
      if ($this->projectedEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->projectedEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $projectedEndDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setProjectedEndDate(\DateTime $projectedEndDate = null)
    {
      if ($projectedEndDate == null) {
       $this->projectedEndDate = null;
      } else {
        $this->projectedEndDate = $projectedEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProjectedEndDateBaseline()
    {
      if ($this->projectedEndDateBaseline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->projectedEndDateBaseline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $projectedEndDateBaseline
     * @return \Nzolt\NetSuite\Job
     */
    public function setProjectedEndDateBaseline(\DateTime $projectedEndDateBaseline = null)
    {
      if ($projectedEndDateBaseline == null) {
       $this->projectedEndDateBaseline = null;
      } else {
        $this->projectedEndDateBaseline = $projectedEndDateBaseline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBaselineDate()
    {
      if ($this->lastBaselineDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastBaselineDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastBaselineDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setLastBaselineDate(\DateTime $lastBaselineDate = null)
    {
      if ($lastBaselineDate == null) {
       $this->lastBaselineDate = null;
      } else {
        $this->lastBaselineDate = $lastBaselineDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJobType()
    {
      return $this->jobType;
    }

    /**
     * @param RecordRef $jobType
     * @return \Nzolt\NetSuite\Job
     */
    public function setJobType($jobType)
    {
      $this->jobType = $jobType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete()
    {
      return $this->percentComplete;
    }

    /**
     * @param float $percentComplete
     * @return \Nzolt\NetSuite\Job
     */
    public function setPercentComplete($percentComplete)
    {
      $this->percentComplete = $percentComplete;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedCost()
    {
      return $this->estimatedCost;
    }

    /**
     * @param float $estimatedCost
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedCost($estimatedCost)
    {
      $this->estimatedCost = $estimatedCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedRevenue()
    {
      return $this->estimatedRevenue;
    }

    /**
     * @param float $estimatedRevenue
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedRevenue($estimatedRevenue)
    {
      $this->estimatedRevenue = $estimatedRevenue;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTime()
    {
      return $this->estimatedTime;
    }

    /**
     * @param Duration $estimatedTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedTime($estimatedTime)
    {
      $this->estimatedTime = $estimatedTime;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTimeOverride()
    {
      return $this->estimatedTimeOverride;
    }

    /**
     * @param Duration $estimatedTimeOverride
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedTimeOverride($estimatedTimeOverride)
    {
      $this->estimatedTimeOverride = $estimatedTimeOverride;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \Nzolt\NetSuite\Job
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Nzolt\NetSuite\Job
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return EmailPreference
     */
    public function getEmailPreference()
    {
      return $this->emailPreference;
    }

    /**
     * @param EmailPreference $emailPreference
     * @return \Nzolt\NetSuite\Job
     */
    public function setEmailPreference($emailPreference)
    {
      $this->emailPreference = $emailPreference;
      return $this;
    }

    /**
     * @return float
     */
    public function getOpeningBalance()
    {
      return $this->openingBalance;
    }

    /**
     * @param float $openingBalance
     * @return \Nzolt\NetSuite\Job
     */
    public function setOpeningBalance($openingBalance)
    {
      $this->openingBalance = $openingBalance;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpeningBalanceDate()
    {
      if ($this->openingBalanceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->openingBalanceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $openingBalanceDate
     * @return \Nzolt\NetSuite\Job
     */
    public function setOpeningBalanceDate(\DateTime $openingBalanceDate = null)
    {
      if ($openingBalanceDate == null) {
       $this->openingBalanceDate = null;
      } else {
        $this->openingBalanceDate = $openingBalanceDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOpeningBalanceAccount()
    {
      return $this->openingBalanceAccount;
    }

    /**
     * @param RecordRef $openingBalanceAccount
     * @return \Nzolt\NetSuite\Job
     */
    public function setOpeningBalanceAccount($openingBalanceAccount)
    {
      $this->openingBalanceAccount = $openingBalanceAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\Job
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return JobBillingType
     */
    public function getJobBillingType()
    {
      return $this->jobBillingType;
    }

    /**
     * @param JobBillingType $jobBillingType
     * @return \Nzolt\NetSuite\Job
     */
    public function setJobBillingType($jobBillingType)
    {
      $this->jobBillingType = $jobBillingType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\Job
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJobItem()
    {
      return $this->jobItem;
    }

    /**
     * @param RecordRef $jobItem
     * @return \Nzolt\NetSuite\Job
     */
    public function setJobItem($jobItem)
    {
      $this->jobItem = $jobItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentTimeComplete()
    {
      return $this->percentTimeComplete;
    }

    /**
     * @param float $percentTimeComplete
     * @return \Nzolt\NetSuite\Job
     */
    public function setPercentTimeComplete($percentTimeComplete)
    {
      $this->percentTimeComplete = $percentTimeComplete;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getActualTime()
    {
      return $this->actualTime;
    }

    /**
     * @param Duration $actualTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setActualTime($actualTime)
    {
      $this->actualTime = $actualTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowTime()
    {
      return $this->allowTime;
    }

    /**
     * @param boolean $allowTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setAllowTime($allowTime)
    {
      $this->allowTime = $allowTime;
      return $this;
    }

    /**
     * @return Duration
     */
    public function getTimeRemaining()
    {
      return $this->timeRemaining;
    }

    /**
     * @param Duration $timeRemaining
     * @return \Nzolt\NetSuite\Job
     */
    public function setTimeRemaining($timeRemaining)
    {
      $this->timeRemaining = $timeRemaining;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLimitTimeToAssignees()
    {
      return $this->limitTimeToAssignees;
    }

    /**
     * @param boolean $limitTimeToAssignees
     * @return \Nzolt\NetSuite\Job
     */
    public function setLimitTimeToAssignees($limitTimeToAssignees)
    {
      $this->limitTimeToAssignees = $limitTimeToAssignees;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborCost()
    {
      return $this->estimatedLaborCost;
    }

    /**
     * @param float $estimatedLaborCost
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedLaborCost($estimatedLaborCost)
    {
      $this->estimatedLaborCost = $estimatedLaborCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborCostBaseline()
    {
      return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param float $estimatedLaborCostBaseline
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedLaborCostBaseline($estimatedLaborCostBaseline)
    {
      $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEstimateRevRecTemplate()
    {
      return $this->estimateRevRecTemplate;
    }

    /**
     * @param RecordRef $estimateRevRecTemplate
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimateRevRecTemplate($estimateRevRecTemplate)
    {
      $this->estimateRevRecTemplate = $estimateRevRecTemplate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return \Nzolt\NetSuite\Job
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsePercentCompleteOverride()
    {
      return $this->usePercentCompleteOverride;
    }

    /**
     * @param boolean $usePercentCompleteOverride
     * @return \Nzolt\NetSuite\Job
     */
    public function setUsePercentCompleteOverride($usePercentCompleteOverride)
    {
      $this->usePercentCompleteOverride = $usePercentCompleteOverride;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborRevenue()
    {
      return $this->estimatedLaborRevenue;
    }

    /**
     * @param float $estimatedLaborRevenue
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedLaborRevenue($estimatedLaborRevenue)
    {
      $this->estimatedLaborRevenue = $estimatedLaborRevenue;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedGrossProfit()
    {
      return $this->estimatedGrossProfit;
    }

    /**
     * @param float $estimatedGrossProfit
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedGrossProfit($estimatedGrossProfit)
    {
      $this->estimatedGrossProfit = $estimatedGrossProfit;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedGrossProfitPercent()
    {
      return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param float $estimatedGrossProfitPercent
     * @return \Nzolt\NetSuite\Job
     */
    public function setEstimatedGrossProfitPercent($estimatedGrossProfitPercent)
    {
      $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectExpenseType()
    {
      return $this->projectExpenseType;
    }

    /**
     * @param RecordRef $projectExpenseType
     * @return \Nzolt\NetSuite\Job
     */
    public function setProjectExpenseType($projectExpenseType)
    {
      $this->projectExpenseType = $projectExpenseType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyProjectExpenseTypeToAll()
    {
      return $this->applyProjectExpenseTypeToAll;
    }

    /**
     * @param boolean $applyProjectExpenseTypeToAll
     * @return \Nzolt\NetSuite\Job
     */
    public function setApplyProjectExpenseTypeToAll($applyProjectExpenseTypeToAll)
    {
      $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAllResourcesForTasks()
    {
      return $this->allowAllResourcesForTasks;
    }

    /**
     * @param boolean $allowAllResourcesForTasks
     * @return \Nzolt\NetSuite\Job
     */
    public function setAllowAllResourcesForTasks($allowAllResourcesForTasks)
    {
      $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
      return $this;
    }

    /**
     * @return float
     */
    public function getJobPrice()
    {
      return $this->jobPrice;
    }

    /**
     * @param float $jobPrice
     * @return \Nzolt\NetSuite\Job
     */
    public function setJobPrice($jobPrice)
    {
      $this->jobPrice = $jobPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUtilizedTime()
    {
      return $this->isUtilizedTime;
    }

    /**
     * @param boolean $isUtilizedTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setIsUtilizedTime($isUtilizedTime)
    {
      $this->isUtilizedTime = $isUtilizedTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProductiveTime()
    {
      return $this->isProductiveTime;
    }

    /**
     * @param boolean $isProductiveTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setIsProductiveTime($isProductiveTime)
    {
      $this->isProductiveTime = $isProductiveTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExemptTime()
    {
      return $this->isExemptTime;
    }

    /**
     * @param boolean $isExemptTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setIsExemptTime($isExemptTime)
    {
      $this->isExemptTime = $isExemptTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMaterializeTime()
    {
      return $this->materializeTime;
    }

    /**
     * @param boolean $materializeTime
     * @return \Nzolt\NetSuite\Job
     */
    public function setMaterializeTime($materializeTime)
    {
      $this->materializeTime = $materializeTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowExpenses()
    {
      return $this->allowExpenses;
    }

    /**
     * @param boolean $allowExpenses
     * @return \Nzolt\NetSuite\Job
     */
    public function setAllowExpenses($allowExpenses)
    {
      $this->allowExpenses = $allowExpenses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllocatePayrollExpenses()
    {
      return $this->allocatePayrollExpenses;
    }

    /**
     * @param boolean $allocatePayrollExpenses
     * @return \Nzolt\NetSuite\Job
     */
    public function setAllocatePayrollExpenses($allocatePayrollExpenses)
    {
      $this->allocatePayrollExpenses = $allocatePayrollExpenses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCrmTasksInTotals()
    {
      return $this->includeCrmTasksInTotals;
    }

    /**
     * @param boolean $includeCrmTasksInTotals
     * @return \Nzolt\NetSuite\Job
     */
    public function setIncludeCrmTasksInTotals($includeCrmTasksInTotals)
    {
      $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
      return $this;
    }

    /**
     * @return GlobalSubscriptionStatus
     */
    public function getGlobalSubscriptionStatus()
    {
      return $this->globalSubscriptionStatus;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return \Nzolt\NetSuite\Job
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return JobResourcesList
     */
    public function getJobResourcesList()
    {
      return $this->jobResourcesList;
    }

    /**
     * @param JobResourcesList $jobResourcesList
     * @return \Nzolt\NetSuite\Job
     */
    public function setJobResourcesList($jobResourcesList)
    {
      $this->jobResourcesList = $jobResourcesList;
      return $this;
    }

    /**
     * @return JobPlStatementList
     */
    public function getPlStatementList()
    {
      return $this->plStatementList;
    }

    /**
     * @param JobPlStatementList $plStatementList
     * @return \Nzolt\NetSuite\Job
     */
    public function setPlStatementList($plStatementList)
    {
      $this->plStatementList = $plStatementList;
      return $this;
    }

    /**
     * @return JobAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param JobAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Job
     */
    public function setAddressbookList($addressbookList)
    {
      $this->addressbookList = $addressbookList;
      return $this;
    }

    /**
     * @return JobMilestonesList
     */
    public function getMilestonesList()
    {
      return $this->milestonesList;
    }

    /**
     * @param JobMilestonesList $milestonesList
     * @return \Nzolt\NetSuite\Job
     */
    public function setMilestonesList($milestonesList)
    {
      $this->milestonesList = $milestonesList;
      return $this;
    }

    /**
     * @return JobCreditCardsList
     */
    public function getCreditCardsList()
    {
      return $this->creditCardsList;
    }

    /**
     * @param JobCreditCardsList $creditCardsList
     * @return \Nzolt\NetSuite\Job
     */
    public function setCreditCardsList($creditCardsList)
    {
      $this->creditCardsList = $creditCardsList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\Job
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\Job
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\Job
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
