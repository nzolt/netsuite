<?php

namespace Nzolt\NetSuite;

class Employee extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $template
     */
    protected $template = null;

    /**
     * @var string $entityId
     */
    protected $entityId = null;

    /**
     * @var string $salutation
     */
    protected $salutation = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $middleName
     */
    protected $middleName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $altName
     */
    protected $altName = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $defaultAddress
     */
    protected $defaultAddress = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var string $initials
     */
    protected $initials = null;

    /**
     * @var string $officePhone
     */
    protected $officePhone = null;

    /**
     * @var string $homePhone
     */
    protected $homePhone = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $billingClass
     */
    protected $billingClass = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var EmployeeCompensationCurrency $compensationCurrency
     */
    protected $compensationCurrency = null;

    /**
     * @var EmployeeBaseWageType $baseWageType
     */
    protected $baseWageType = null;

    /**
     * @var float $baseWage
     */
    protected $baseWage = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var GlobalSubscriptionStatus $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var RecordRef $image
     */
    protected $image = null;

    /**
     * @var EmployeePayFrequency $payFrequency
     */
    protected $payFrequency = null;

    /**
     * @var \DateTime $lastPaidDate
     */
    protected $lastPaidDate = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var EmployeeUseTimeData $useTimeData
     */
    protected $useTimeData = null;

    /**
     * @var boolean $usePerquest
     */
    protected $usePerquest = null;

    /**
     * @var RecordRef $workplace
     */
    protected $workplace = null;

    /**
     * @var string $adpId
     */
    protected $adpId = null;

    /**
     * @var boolean $directDeposit
     */
    protected $directDeposit = null;

    /**
     * @var float $expenseLimit
     */
    protected $expenseLimit = null;

    /**
     * @var float $purchaseOrderLimit
     */
    protected $purchaseOrderLimit = null;

    /**
     * @var float $purchaseOrderApprovalLimit
     */
    protected $purchaseOrderApprovalLimit = null;

    /**
     * @var string $socialSecurityNumber
     */
    protected $socialSecurityNumber = null;

    /**
     * @var RecordRef $supervisor
     */
    protected $supervisor = null;

    /**
     * @var RecordRef $approver
     */
    protected $approver = null;

    /**
     * @var float $approvalLimit
     */
    protected $approvalLimit = null;

    /**
     * @var RecordRef $timeApprover
     */
    protected $timeApprover = null;

    /**
     * @var RecordRef $employeeType
     */
    protected $employeeType = null;

    /**
     * @var boolean $isSalesRep
     */
    protected $isSalesRep = null;

    /**
     * @var RecordRef $salesRole
     */
    protected $salesRole = null;

    /**
     * @var boolean $isSupportRep
     */
    protected $isSupportRep = null;

    /**
     * @var boolean $isJobResource
     */
    protected $isJobResource = null;

    /**
     * @var float $laborCost
     */
    protected $laborCost = null;

    /**
     * @var \DateTime $birthDate
     */
    protected $birthDate = null;

    /**
     * @var \DateTime $hireDate
     */
    protected $hireDate = null;

    /**
     * @var \DateTime $releaseDate
     */
    protected $releaseDate = null;

    /**
     * @var string $terminationDetails
     */
    protected $terminationDetails = null;

    /**
     * @var RecordRef $terminationReason
     */
    protected $terminationReason = null;

    /**
     * @var EmployeeTerminationRegretted $terminationRegretted
     */
    protected $terminationRegretted = null;

    /**
     * @var EmployeeTerminationCategory $terminationCategory
     */
    protected $terminationCategory = null;

    /**
     * @var RecordRef $timeOffPlan
     */
    protected $timeOffPlan = null;

    /**
     * @var \DateTime $lastReviewDate
     */
    protected $lastReviewDate = null;

    /**
     * @var \DateTime $nextReviewDate
     */
    protected $nextReviewDate = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var RecordRef $employeeStatus
     */
    protected $employeeStatus = null;

    /**
     * @var string $jobDescription
     */
    protected $jobDescription = null;

    /**
     * @var EmployeeWorkAssignment $workAssignment
     */
    protected $workAssignment = null;

    /**
     * @var RecordRef $job
     */
    protected $job = null;

    /**
     * @var RecordRef $maritalStatus
     */
    protected $maritalStatus = null;

    /**
     * @var RecordRef $ethnicity
     */
    protected $ethnicity = null;

    /**
     * @var Gender $gender
     */
    protected $gender = null;

    /**
     * @var RecordRef $purchaseOrderApprover
     */
    protected $purchaseOrderApprover = null;

    /**
     * @var RecordRef $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var boolean $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var boolean $concurrentWebServicesUser
     */
    protected $concurrentWebServicesUser = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var boolean $hasOfflineAccess
     */
    protected $hasOfflineAccess = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $password2
     */
    protected $password2 = null;

    /**
     * @var boolean $requirePwdChange
     */
    protected $requirePwdChange = null;

    /**
     * @var boolean $inheritIPRules
     */
    protected $inheritIPRules = null;

    /**
     * @var string $IPAddressRule
     */
    protected $IPAddressRule = null;

    /**
     * @var \DateTime $startDateTimeOffCalc
     */
    protected $startDateTimeOffCalc = null;

    /**
     * @var EmployeeCommissionPaymentPreference $commissionPaymentPreference
     */
    protected $commissionPaymentPreference = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

    /**
     * @var boolean $eligibleForCommission
     */
    protected $eligibleForCommission = null;

    /**
     * @var EmployeeSubscriptionsList $subscriptionsList
     */
    protected $subscriptionsList = null;

    /**
     * @var EmployeeRatesList $ratesList
     */
    protected $ratesList = null;

    /**
     * @var EmployeeAddressbookList $addressbookList
     */
    protected $addressbookList = null;

    /**
     * @var EmployeeRolesList $rolesList
     */
    protected $rolesList = null;

    /**
     * @var EmployeeHrEducationList $hrEducationList
     */
    protected $hrEducationList = null;

    /**
     * @var EmployeeAccruedTimeList $accruedTimeList
     */
    protected $accruedTimeList = null;

    /**
     * @var EmployeeDirectDepositList $directDepositList
     */
    protected $directDepositList = null;

    /**
     * @var EmployeeCompanyContributionList $companyContributionList
     */
    protected $companyContributionList = null;

    /**
     * @var EmployeeEarningList $earningList
     */
    protected $earningList = null;

    /**
     * @var EmployeeEmergencyContactList $emergencyContactList
     */
    protected $emergencyContactList = null;

    /**
     * @var EmployeeHcmPositionList $hcmPositionList
     */
    protected $hcmPositionList = null;

    /**
     * @var EmployeeDeductionList $deductionList
     */
    protected $deductionList = null;

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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemplate()
    {
      return $this->template;
    }

    /**
     * @param RecordRef $template
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTemplate($template)
    {
      $this->template = $template;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
      return $this->salutation;
    }

    /**
     * @param string $salutation
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSalutation($salutation)
    {
      $this->salutation = $salutation;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Nzolt\NetSuite\Employee
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
      return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return \Nzolt\NetSuite\Employee
     */
    public function setMiddleName($middleName)
    {
      $this->middleName = $middleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Nzolt\NetSuite\Employee
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setAltName($altName)
    {
      $this->altName = $altName;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
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
     * @return \Nzolt\NetSuite\Employee
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setDefaultAddress($defaultAddress)
    {
      $this->defaultAddress = $defaultAddress;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
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
     * @return \Nzolt\NetSuite\Employee
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
     * @return \Nzolt\NetSuite\Employee
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
     * @return string
     */
    public function getInitials()
    {
      return $this->initials;
    }

    /**
     * @param string $initials
     * @return \Nzolt\NetSuite\Employee
     */
    public function setInitials($initials)
    {
      $this->initials = $initials;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhone()
    {
      return $this->officePhone;
    }

    /**
     * @param string $officePhone
     * @return \Nzolt\NetSuite\Employee
     */
    public function setOfficePhone($officePhone)
    {
      $this->officePhone = $officePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
      return $this->homePhone;
    }

    /**
     * @param string $homePhone
     * @return \Nzolt\NetSuite\Employee
     */
    public function setHomePhone($homePhone)
    {
      $this->homePhone = $homePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return \Nzolt\NetSuite\Employee
     */
    public function setMobilePhone($mobilePhone)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\Employee
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\Employee
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\Employee
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingClass()
    {
      return $this->billingClass;
    }

    /**
     * @param RecordRef $billingClass
     * @return \Nzolt\NetSuite\Employee
     */
    public function setBillingClass($billingClass)
    {
      $this->billingClass = $billingClass;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return EmployeeCompensationCurrency
     */
    public function getCompensationCurrency()
    {
      return $this->compensationCurrency;
    }

    /**
     * @param EmployeeCompensationCurrency $compensationCurrency
     * @return \Nzolt\NetSuite\Employee
     */
    public function setCompensationCurrency($compensationCurrency)
    {
      $this->compensationCurrency = $compensationCurrency;
      return $this;
    }

    /**
     * @return EmployeeBaseWageType
     */
    public function getBaseWageType()
    {
      return $this->baseWageType;
    }

    /**
     * @param EmployeeBaseWageType $baseWageType
     * @return \Nzolt\NetSuite\Employee
     */
    public function setBaseWageType($baseWageType)
    {
      $this->baseWageType = $baseWageType;
      return $this;
    }

    /**
     * @return float
     */
    public function getBaseWage()
    {
      return $this->baseWage;
    }

    /**
     * @param float $baseWage
     * @return \Nzolt\NetSuite\Employee
     */
    public function setBaseWage($baseWage)
    {
      $this->baseWage = $baseWage;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param RecordRef $image
     * @return \Nzolt\NetSuite\Employee
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return EmployeePayFrequency
     */
    public function getPayFrequency()
    {
      return $this->payFrequency;
    }

    /**
     * @param EmployeePayFrequency $payFrequency
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPayFrequency($payFrequency)
    {
      $this->payFrequency = $payFrequency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastPaidDate()
    {
      if ($this->lastPaidDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastPaidDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastPaidDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setLastPaidDate(\DateTime $lastPaidDate = null)
    {
      if ($lastPaidDate == null) {
       $this->lastPaidDate = null;
      } else {
        $this->lastPaidDate = $lastPaidDate->format(\DateTime::ATOM);
      }
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return EmployeeUseTimeData
     */
    public function getUseTimeData()
    {
      return $this->useTimeData;
    }

    /**
     * @param EmployeeUseTimeData $useTimeData
     * @return \Nzolt\NetSuite\Employee
     */
    public function setUseTimeData($useTimeData)
    {
      $this->useTimeData = $useTimeData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsePerquest()
    {
      return $this->usePerquest;
    }

    /**
     * @param boolean $usePerquest
     * @return \Nzolt\NetSuite\Employee
     */
    public function setUsePerquest($usePerquest)
    {
      $this->usePerquest = $usePerquest;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setWorkplace($workplace)
    {
      $this->workplace = $workplace;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdpId()
    {
      return $this->adpId;
    }

    /**
     * @param string $adpId
     * @return \Nzolt\NetSuite\Employee
     */
    public function setAdpId($adpId)
    {
      $this->adpId = $adpId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectDeposit()
    {
      return $this->directDeposit;
    }

    /**
     * @param boolean $directDeposit
     * @return \Nzolt\NetSuite\Employee
     */
    public function setDirectDeposit($directDeposit)
    {
      $this->directDeposit = $directDeposit;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpenseLimit()
    {
      return $this->expenseLimit;
    }

    /**
     * @param float $expenseLimit
     * @return \Nzolt\NetSuite\Employee
     */
    public function setExpenseLimit($expenseLimit)
    {
      $this->expenseLimit = $expenseLimit;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderLimit()
    {
      return $this->purchaseOrderLimit;
    }

    /**
     * @param float $purchaseOrderLimit
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPurchaseOrderLimit($purchaseOrderLimit)
    {
      $this->purchaseOrderLimit = $purchaseOrderLimit;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderApprovalLimit()
    {
      return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param float $purchaseOrderApprovalLimit
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPurchaseOrderApprovalLimit($purchaseOrderApprovalLimit)
    {
      $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber()
    {
      return $this->socialSecurityNumber;
    }

    /**
     * @param string $socialSecurityNumber
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
      $this->socialSecurityNumber = $socialSecurityNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupervisor()
    {
      return $this->supervisor;
    }

    /**
     * @param RecordRef $supervisor
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSupervisor($supervisor)
    {
      $this->supervisor = $supervisor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprover()
    {
      return $this->approver;
    }

    /**
     * @param RecordRef $approver
     * @return \Nzolt\NetSuite\Employee
     */
    public function setApprover($approver)
    {
      $this->approver = $approver;
      return $this;
    }

    /**
     * @return float
     */
    public function getApprovalLimit()
    {
      return $this->approvalLimit;
    }

    /**
     * @param float $approvalLimit
     * @return \Nzolt\NetSuite\Employee
     */
    public function setApprovalLimit($approvalLimit)
    {
      $this->approvalLimit = $approvalLimit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeApprover()
    {
      return $this->timeApprover;
    }

    /**
     * @param RecordRef $timeApprover
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTimeApprover($timeApprover)
    {
      $this->timeApprover = $timeApprover;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployeeType()
    {
      return $this->employeeType;
    }

    /**
     * @param RecordRef $employeeType
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEmployeeType($employeeType)
    {
      $this->employeeType = $employeeType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSalesRep()
    {
      return $this->isSalesRep;
    }

    /**
     * @param boolean $isSalesRep
     * @return \Nzolt\NetSuite\Employee
     */
    public function setIsSalesRep($isSalesRep)
    {
      $this->isSalesRep = $isSalesRep;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRole()
    {
      return $this->salesRole;
    }

    /**
     * @param RecordRef $salesRole
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSalesRole($salesRole)
    {
      $this->salesRole = $salesRole;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSupportRep()
    {
      return $this->isSupportRep;
    }

    /**
     * @param boolean $isSupportRep
     * @return \Nzolt\NetSuite\Employee
     */
    public function setIsSupportRep($isSupportRep)
    {
      $this->isSupportRep = $isSupportRep;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJobResource()
    {
      return $this->isJobResource;
    }

    /**
     * @param boolean $isJobResource
     * @return \Nzolt\NetSuite\Employee
     */
    public function setIsJobResource($isJobResource)
    {
      $this->isJobResource = $isJobResource;
      return $this;
    }

    /**
     * @return float
     */
    public function getLaborCost()
    {
      return $this->laborCost;
    }

    /**
     * @param float $laborCost
     * @return \Nzolt\NetSuite\Employee
     */
    public function setLaborCost($laborCost)
    {
      $this->laborCost = $laborCost;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate()
    {
      if ($this->birthDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->birthDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $birthDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setBirthDate(\DateTime $birthDate = null)
    {
      if ($birthDate == null) {
       $this->birthDate = null;
      } else {
        $this->birthDate = $birthDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHireDate()
    {
      if ($this->hireDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->hireDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $hireDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setHireDate(\DateTime $hireDate = null)
    {
      if ($hireDate == null) {
       $this->hireDate = null;
      } else {
        $this->hireDate = $hireDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReleaseDate()
    {
      if ($this->releaseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->releaseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $releaseDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setReleaseDate(\DateTime $releaseDate = null)
    {
      if ($releaseDate == null) {
       $this->releaseDate = null;
      } else {
        $this->releaseDate = $releaseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminationDetails()
    {
      return $this->terminationDetails;
    }

    /**
     * @param string $terminationDetails
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTerminationDetails($terminationDetails)
    {
      $this->terminationDetails = $terminationDetails;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerminationReason()
    {
      return $this->terminationReason;
    }

    /**
     * @param RecordRef $terminationReason
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTerminationReason($terminationReason)
    {
      $this->terminationReason = $terminationReason;
      return $this;
    }

    /**
     * @return EmployeeTerminationRegretted
     */
    public function getTerminationRegretted()
    {
      return $this->terminationRegretted;
    }

    /**
     * @param EmployeeTerminationRegretted $terminationRegretted
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTerminationRegretted($terminationRegretted)
    {
      $this->terminationRegretted = $terminationRegretted;
      return $this;
    }

    /**
     * @return EmployeeTerminationCategory
     */
    public function getTerminationCategory()
    {
      return $this->terminationCategory;
    }

    /**
     * @param EmployeeTerminationCategory $terminationCategory
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTerminationCategory($terminationCategory)
    {
      $this->terminationCategory = $terminationCategory;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeOffPlan()
    {
      return $this->timeOffPlan;
    }

    /**
     * @param RecordRef $timeOffPlan
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTimeOffPlan($timeOffPlan)
    {
      $this->timeOffPlan = $timeOffPlan;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReviewDate()
    {
      if ($this->lastReviewDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastReviewDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastReviewDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setLastReviewDate(\DateTime $lastReviewDate = null)
    {
      if ($lastReviewDate == null) {
       $this->lastReviewDate = null;
      } else {
        $this->lastReviewDate = $lastReviewDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextReviewDate()
    {
      if ($this->nextReviewDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextReviewDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextReviewDate
     * @return \Nzolt\NetSuite\Employee
     */
    public function setNextReviewDate(\DateTime $nextReviewDate = null)
    {
      if ($nextReviewDate == null) {
       $this->nextReviewDate = null;
      } else {
        $this->nextReviewDate = $nextReviewDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \Nzolt\NetSuite\Employee
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployeeStatus()
    {
      return $this->employeeStatus;
    }

    /**
     * @param RecordRef $employeeStatus
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEmployeeStatus($employeeStatus)
    {
      $this->employeeStatus = $employeeStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobDescription()
    {
      return $this->jobDescription;
    }

    /**
     * @param string $jobDescription
     * @return \Nzolt\NetSuite\Employee
     */
    public function setJobDescription($jobDescription)
    {
      $this->jobDescription = $jobDescription;
      return $this;
    }

    /**
     * @return EmployeeWorkAssignment
     */
    public function getWorkAssignment()
    {
      return $this->workAssignment;
    }

    /**
     * @param EmployeeWorkAssignment $workAssignment
     * @return \Nzolt\NetSuite\Employee
     */
    public function setWorkAssignment($workAssignment)
    {
      $this->workAssignment = $workAssignment;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob()
    {
      return $this->job;
    }

    /**
     * @param RecordRef $job
     * @return \Nzolt\NetSuite\Employee
     */
    public function setJob($job)
    {
      $this->job = $job;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMaritalStatus()
    {
      return $this->maritalStatus;
    }

    /**
     * @param RecordRef $maritalStatus
     * @return \Nzolt\NetSuite\Employee
     */
    public function setMaritalStatus($maritalStatus)
    {
      $this->maritalStatus = $maritalStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEthnicity()
    {
      return $this->ethnicity;
    }

    /**
     * @param RecordRef $ethnicity
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEthnicity($ethnicity)
    {
      $this->ethnicity = $ethnicity;
      return $this;
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return \Nzolt\NetSuite\Employee
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseOrderApprover()
    {
      return $this->purchaseOrderApprover;
    }

    /**
     * @param RecordRef $purchaseOrderApprover
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPurchaseOrderApprover($purchaseOrderApprover)
    {
      $this->purchaseOrderApprover = $purchaseOrderApprover;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkCalendar()
    {
      return $this->workCalendar;
    }

    /**
     * @param RecordRef $workCalendar
     * @return \Nzolt\NetSuite\Employee
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGiveAccess()
    {
      return $this->giveAccess;
    }

    /**
     * @param boolean $giveAccess
     * @return \Nzolt\NetSuite\Employee
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConcurrentWebServicesUser()
    {
      return $this->concurrentWebServicesUser;
    }

    /**
     * @param boolean $concurrentWebServicesUser
     * @return \Nzolt\NetSuite\Employee
     */
    public function setConcurrentWebServicesUser($concurrentWebServicesUser)
    {
      $this->concurrentWebServicesUser = $concurrentWebServicesUser;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmail()
    {
      return $this->sendEmail;
    }

    /**
     * @param boolean $sendEmail
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasOfflineAccess()
    {
      return $this->hasOfflineAccess;
    }

    /**
     * @param boolean $hasOfflineAccess
     * @return \Nzolt\NetSuite\Employee
     */
    public function setHasOfflineAccess($hasOfflineAccess)
    {
      $this->hasOfflineAccess = $hasOfflineAccess;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword2()
    {
      return $this->password2;
    }

    /**
     * @param string $password2
     * @return \Nzolt\NetSuite\Employee
     */
    public function setPassword2($password2)
    {
      $this->password2 = $password2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirePwdChange()
    {
      return $this->requirePwdChange;
    }

    /**
     * @param boolean $requirePwdChange
     * @return \Nzolt\NetSuite\Employee
     */
    public function setRequirePwdChange($requirePwdChange)
    {
      $this->requirePwdChange = $requirePwdChange;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritIPRules()
    {
      return $this->inheritIPRules;
    }

    /**
     * @param boolean $inheritIPRules
     * @return \Nzolt\NetSuite\Employee
     */
    public function setInheritIPRules($inheritIPRules)
    {
      $this->inheritIPRules = $inheritIPRules;
      return $this;
    }

    /**
     * @return string
     */
    public function getIPAddressRule()
    {
      return $this->IPAddressRule;
    }

    /**
     * @param string $IPAddressRule
     * @return \Nzolt\NetSuite\Employee
     */
    public function setIPAddressRule($IPAddressRule)
    {
      $this->IPAddressRule = $IPAddressRule;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTimeOffCalc()
    {
      if ($this->startDateTimeOffCalc == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDateTimeOffCalc);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDateTimeOffCalc
     * @return \Nzolt\NetSuite\Employee
     */
    public function setStartDateTimeOffCalc(\DateTime $startDateTimeOffCalc = null)
    {
      if ($startDateTimeOffCalc == null) {
       $this->startDateTimeOffCalc = null;
      } else {
        $this->startDateTimeOffCalc = $startDateTimeOffCalc->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return EmployeeCommissionPaymentPreference
     */
    public function getCommissionPaymentPreference()
    {
      return $this->commissionPaymentPreference;
    }

    /**
     * @param EmployeeCommissionPaymentPreference $commissionPaymentPreference
     * @return \Nzolt\NetSuite\Employee
     */
    public function setCommissionPaymentPreference($commissionPaymentPreference)
    {
      $this->commissionPaymentPreference = $commissionPaymentPreference;
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEligibleForCommission()
    {
      return $this->eligibleForCommission;
    }

    /**
     * @param boolean $eligibleForCommission
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEligibleForCommission($eligibleForCommission)
    {
      $this->eligibleForCommission = $eligibleForCommission;
      return $this;
    }

    /**
     * @return EmployeeSubscriptionsList
     */
    public function getSubscriptionsList()
    {
      return $this->subscriptionsList;
    }

    /**
     * @param EmployeeSubscriptionsList $subscriptionsList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setSubscriptionsList($subscriptionsList)
    {
      $this->subscriptionsList = $subscriptionsList;
      return $this;
    }

    /**
     * @return EmployeeRatesList
     */
    public function getRatesList()
    {
      return $this->ratesList;
    }

    /**
     * @param EmployeeRatesList $ratesList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setRatesList($ratesList)
    {
      $this->ratesList = $ratesList;
      return $this;
    }

    /**
     * @return EmployeeAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param EmployeeAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setAddressbookList($addressbookList)
    {
      $this->addressbookList = $addressbookList;
      return $this;
    }

    /**
     * @return EmployeeRolesList
     */
    public function getRolesList()
    {
      return $this->rolesList;
    }

    /**
     * @param EmployeeRolesList $rolesList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setRolesList($rolesList)
    {
      $this->rolesList = $rolesList;
      return $this;
    }

    /**
     * @return EmployeeHrEducationList
     */
    public function getHrEducationList()
    {
      return $this->hrEducationList;
    }

    /**
     * @param EmployeeHrEducationList $hrEducationList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setHrEducationList($hrEducationList)
    {
      $this->hrEducationList = $hrEducationList;
      return $this;
    }

    /**
     * @return EmployeeAccruedTimeList
     */
    public function getAccruedTimeList()
    {
      return $this->accruedTimeList;
    }

    /**
     * @param EmployeeAccruedTimeList $accruedTimeList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setAccruedTimeList($accruedTimeList)
    {
      $this->accruedTimeList = $accruedTimeList;
      return $this;
    }

    /**
     * @return EmployeeDirectDepositList
     */
    public function getDirectDepositList()
    {
      return $this->directDepositList;
    }

    /**
     * @param EmployeeDirectDepositList $directDepositList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setDirectDepositList($directDepositList)
    {
      $this->directDepositList = $directDepositList;
      return $this;
    }

    /**
     * @return EmployeeCompanyContributionList
     */
    public function getCompanyContributionList()
    {
      return $this->companyContributionList;
    }

    /**
     * @param EmployeeCompanyContributionList $companyContributionList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setCompanyContributionList($companyContributionList)
    {
      $this->companyContributionList = $companyContributionList;
      return $this;
    }

    /**
     * @return EmployeeEarningList
     */
    public function getEarningList()
    {
      return $this->earningList;
    }

    /**
     * @param EmployeeEarningList $earningList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEarningList($earningList)
    {
      $this->earningList = $earningList;
      return $this;
    }

    /**
     * @return EmployeeEmergencyContactList
     */
    public function getEmergencyContactList()
    {
      return $this->emergencyContactList;
    }

    /**
     * @param EmployeeEmergencyContactList $emergencyContactList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setEmergencyContactList($emergencyContactList)
    {
      $this->emergencyContactList = $emergencyContactList;
      return $this;
    }

    /**
     * @return EmployeeHcmPositionList
     */
    public function getHcmPositionList()
    {
      return $this->hcmPositionList;
    }

    /**
     * @param EmployeeHcmPositionList $hcmPositionList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setHcmPositionList($hcmPositionList)
    {
      $this->hcmPositionList = $hcmPositionList;
      return $this;
    }

    /**
     * @return EmployeeDeductionList
     */
    public function getDeductionList()
    {
      return $this->deductionList;
    }

    /**
     * @param EmployeeDeductionList $deductionList
     * @return \Nzolt\NetSuite\Employee
     */
    public function setDeductionList($deductionList)
    {
      $this->deductionList = $deductionList;
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
     * @return \Nzolt\NetSuite\Employee
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
     * @return \Nzolt\NetSuite\Employee
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
     * @return \Nzolt\NetSuite\Employee
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
