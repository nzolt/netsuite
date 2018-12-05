<?php

namespace Nzolt\NetSuite;

class Vendor extends Record
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
     * @var boolean $isPerson
     */
    protected $isPerson = null;

    /**
     * @var string $phoneticName
     */
    protected $phoneticName = null;

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
     * @var string $companyName
     */
    protected $companyName = null;

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
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $defaultAddress
     */
    protected $defaultAddress = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var RecordRef $category
     */
    protected $category = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $printOnCheckAs
     */
    protected $printOnCheckAs = null;

    /**
     * @var string $altPhone
     */
    protected $altPhone = null;

    /**
     * @var string $homePhone
     */
    protected $homePhone = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var string $altEmail
     */
    protected $altEmail = null;

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
     * @var EmailPreference $emailPreference
     */
    protected $emailPreference = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $representingSubsidiary
     */
    protected $representingSubsidiary = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var string $legalName
     */
    protected $legalName = null;

    /**
     * @var string $vatRegNumber
     */
    protected $vatRegNumber = null;

    /**
     * @var RecordRef $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var RecordRef $payablesAccount
     */
    protected $payablesAccount = null;

    /**
     * @var RecordRef $terms
     */
    protected $terms = null;

    /**
     * @var RecordRef $incoterm
     */
    protected $incoterm = null;

    /**
     * @var float $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var float $balancePrimary
     */
    protected $balancePrimary = null;

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
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var float $unbilledOrdersPrimary
     */
    protected $unbilledOrdersPrimary = null;

    /**
     * @var string $bcn
     */
    protected $bcn = null;

    /**
     * @var float $unbilledOrders
     */
    protected $unbilledOrders = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var boolean $is1099Eligible
     */
    protected $is1099Eligible = null;

    /**
     * @var boolean $isJobResourceVend
     */
    protected $isJobResourceVend = null;

    /**
     * @var float $laborCost
     */
    protected $laborCost = null;

    /**
     * @var float $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var float $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var float $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var float $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var float $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var float $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var RecordRef $workCalendar
     */
    protected $workCalendar = null;

    /**
     * @var string $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var RecordRef $taxItem
     */
    protected $taxItem = null;

    /**
     * @var boolean $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

    /**
     * @var boolean $isAccountant
     */
    protected $isAccountant = null;

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
     * @var boolean $eligibleForCommission
     */
    protected $eligibleForCommission = null;

    /**
     * @var boolean $emailTransactions
     */
    protected $emailTransactions = null;

    /**
     * @var boolean $printTransactions
     */
    protected $printTransactions = null;

    /**
     * @var boolean $faxTransactions
     */
    protected $faxTransactions = null;

    /**
     * @var VendorPricingScheduleList $pricingScheduleList
     */
    protected $pricingScheduleList = null;

    /**
     * @var SubscriptionsList $subscriptionsList
     */
    protected $subscriptionsList = null;

    /**
     * @var VendorAddressbookList $addressbookList
     */
    protected $addressbookList = null;

    /**
     * @var VendorCurrencyList $currencyList
     */
    protected $currencyList = null;

    /**
     * @var VendorRolesList $rolesList
     */
    protected $rolesList = null;

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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setAltName($altName)
    {
      $this->altName = $altName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPerson()
    {
      return $this->isPerson;
    }

    /**
     * @param boolean $isPerson
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIsPerson($isPerson)
    {
      $this->isPerson = $isPerson;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintOnCheckAs()
    {
      return $this->printOnCheckAs;
    }

    /**
     * @param string $printOnCheckAs
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPrintOnCheckAs($printOnCheckAs)
    {
      $this->printOnCheckAs = $printOnCheckAs;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setAltPhone($altPhone)
    {
      $this->altPhone = $altPhone;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setMobilePhone($mobilePhone)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltEmail()
    {
      return $this->altEmail;
    }

    /**
     * @param string $altEmail
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setAltEmail($altEmail)
    {
      $this->altEmail = $altEmail;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setImage($image)
    {
      $this->image = $image;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setEmailPreference($emailPreference)
    {
      $this->emailPreference = $emailPreference;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRepresentingSubsidiary()
    {
      return $this->representingSubsidiary;
    }

    /**
     * @param RecordRef $representingSubsidiary
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setRepresentingSubsidiary($representingSubsidiary)
    {
      $this->representingSubsidiary = $representingSubsidiary;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatRegNumber()
    {
      return $this->vatRegNumber;
    }

    /**
     * @param string $vatRegNumber
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setVatRegNumber($vatRegNumber)
    {
      $this->vatRegNumber = $vatRegNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setExpenseAccount($expenseAccount)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayablesAccount()
    {
      return $this->payablesAccount;
    }

    /**
     * @param RecordRef $payablesAccount
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPayablesAccount($payablesAccount)
    {
      $this->payablesAccount = $payablesAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param RecordRef $terms
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param RecordRef $incoterm
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
      return $this->creditLimit;
    }

    /**
     * @param float $creditLimit
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setCreditLimit($creditLimit)
    {
      $this->creditLimit = $creditLimit;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalancePrimary()
    {
      return $this->balancePrimary;
    }

    /**
     * @param float $balancePrimary
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setBalancePrimary($balancePrimary)
    {
      $this->balancePrimary = $balancePrimary;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setOpeningBalanceAccount($openingBalanceAccount)
    {
      $this->openingBalanceAccount = $openingBalanceAccount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param float $balance
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrdersPrimary()
    {
      return $this->unbilledOrdersPrimary;
    }

    /**
     * @param float $unbilledOrdersPrimary
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setUnbilledOrdersPrimary($unbilledOrdersPrimary)
    {
      $this->unbilledOrdersPrimary = $unbilledOrdersPrimary;
      return $this;
    }

    /**
     * @return string
     */
    public function getBcn()
    {
      return $this->bcn;
    }

    /**
     * @param string $bcn
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setBcn($bcn)
    {
      $this->bcn = $bcn;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnbilledOrders()
    {
      return $this->unbilledOrders;
    }

    /**
     * @param float $unbilledOrders
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setUnbilledOrders($unbilledOrders)
    {
      $this->unbilledOrders = $unbilledOrders;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs1099Eligible()
    {
      return $this->is1099Eligible;
    }

    /**
     * @param boolean $is1099Eligible
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIs1099Eligible($is1099Eligible)
    {
      $this->is1099Eligible = $is1099Eligible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJobResourceVend()
    {
      return $this->isJobResourceVend;
    }

    /**
     * @param boolean $isJobResourceVend
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIsJobResourceVend($isJobResourceVend)
    {
      $this->isJobResourceVend = $isJobResourceVend;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setLaborCost($laborCost)
    {
      $this->laborCost = $laborCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param float $receiptQuantity
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param float $receiptAmount
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setWorkCalendar($workCalendar)
    {
      $this->workCalendar = $workCalendar;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdNum()
    {
      return $this->taxIdNum;
    }

    /**
     * @param string $taxIdNum
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setTaxIdNum($taxIdNum)
    {
      $this->taxIdNum = $taxIdNum;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxItem()
    {
      return $this->taxItem;
    }

    /**
     * @param RecordRef $taxItem
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setTaxItem($taxItem)
    {
      $this->taxItem = $taxItem;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAccountant()
    {
      return $this->isAccountant;
    }

    /**
     * @param boolean $isAccountant
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setIsAccountant($isAccountant)
    {
      $this->isAccountant = $isAccountant;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setRequirePwdChange($requirePwdChange)
    {
      $this->requirePwdChange = $requirePwdChange;
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setEligibleForCommission($eligibleForCommission)
    {
      $this->eligibleForCommission = $eligibleForCommission;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailTransactions()
    {
      return $this->emailTransactions;
    }

    /**
     * @param boolean $emailTransactions
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setEmailTransactions($emailTransactions)
    {
      $this->emailTransactions = $emailTransactions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrintTransactions()
    {
      return $this->printTransactions;
    }

    /**
     * @param boolean $printTransactions
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPrintTransactions($printTransactions)
    {
      $this->printTransactions = $printTransactions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFaxTransactions()
    {
      return $this->faxTransactions;
    }

    /**
     * @param boolean $faxTransactions
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setFaxTransactions($faxTransactions)
    {
      $this->faxTransactions = $faxTransactions;
      return $this;
    }

    /**
     * @return VendorPricingScheduleList
     */
    public function getPricingScheduleList()
    {
      return $this->pricingScheduleList;
    }

    /**
     * @param VendorPricingScheduleList $pricingScheduleList
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setPricingScheduleList($pricingScheduleList)
    {
      $this->pricingScheduleList = $pricingScheduleList;
      return $this;
    }

    /**
     * @return SubscriptionsList
     */
    public function getSubscriptionsList()
    {
      return $this->subscriptionsList;
    }

    /**
     * @param SubscriptionsList $subscriptionsList
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setSubscriptionsList($subscriptionsList)
    {
      $this->subscriptionsList = $subscriptionsList;
      return $this;
    }

    /**
     * @return VendorAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param VendorAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setAddressbookList($addressbookList)
    {
      $this->addressbookList = $addressbookList;
      return $this;
    }

    /**
     * @return VendorCurrencyList
     */
    public function getCurrencyList()
    {
      return $this->currencyList;
    }

    /**
     * @param VendorCurrencyList $currencyList
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setCurrencyList($currencyList)
    {
      $this->currencyList = $currencyList;
      return $this;
    }

    /**
     * @return VendorRolesList
     */
    public function getRolesList()
    {
      return $this->rolesList;
    }

    /**
     * @param VendorRolesList $rolesList
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setRolesList($rolesList)
    {
      $this->rolesList = $rolesList;
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
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
     * @return \Nzolt\NetSuite\Vendor
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
