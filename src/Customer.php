<?php

namespace Nzolt\NetSuite;

class Customer extends Record
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
     * @var RecordRef $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

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
     * @var Language $language
     */
    protected $language = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var CustomerNumberFormat $numberFormat
     */
    protected $numberFormat = null;

    /**
     * @var CustomerNegativeNumberFormat $negativeNumberFormat
     */
    protected $negativeNumberFormat = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

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
     * @var RecordRef $salesRep
     */
    protected $salesRep = null;

    /**
     * @var RecordRef $territory
     */
    protected $territory = null;

    /**
     * @var string $contribPct
     */
    protected $contribPct = null;

    /**
     * @var RecordRef $partner
     */
    protected $partner = null;

    /**
     * @var RecordRef $salesGroup
     */
    protected $salesGroup = null;

    /**
     * @var string $vatRegNumber
     */
    protected $vatRegNumber = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @var boolean $taxExempt
     */
    protected $taxExempt = null;

    /**
     * @var RecordRef $terms
     */
    protected $terms = null;

    /**
     * @var float $creditLimit
     */
    protected $creditLimit = null;

    /**
     * @var CustomerCreditHoldOverride $creditHoldOverride
     */
    protected $creditHoldOverride = null;

    /**
     * @var CustomerMonthlyClosing $monthlyClosing
     */
    protected $monthlyClosing = null;

    /**
     * @var boolean $overrideCurrencyFormat
     */
    protected $overrideCurrencyFormat = null;

    /**
     * @var string $displaySymbol
     */
    protected $displaySymbol = null;

    /**
     * @var CurrencySymbolPlacement $symbolPlacement
     */
    protected $symbolPlacement = null;

    /**
     * @var float $balance
     */
    protected $balance = null;

    /**
     * @var float $overdueBalance
     */
    protected $overdueBalance = null;

    /**
     * @var int $daysOverdue
     */
    protected $daysOverdue = null;

    /**
     * @var float $unbilledOrders
     */
    protected $unbilledOrders = null;

    /**
     * @var float $consolUnbilledOrders
     */
    protected $consolUnbilledOrders = null;

    /**
     * @var float $consolOverdueBalance
     */
    protected $consolOverdueBalance = null;

    /**
     * @var float $consolDepositBalance
     */
    protected $consolDepositBalance = null;

    /**
     * @var float $consolBalance
     */
    protected $consolBalance = null;

    /**
     * @var float $consolAging
     */
    protected $consolAging = null;

    /**
     * @var float $consolAging1
     */
    protected $consolAging1 = null;

    /**
     * @var float $consolAging2
     */
    protected $consolAging2 = null;

    /**
     * @var float $consolAging3
     */
    protected $consolAging3 = null;

    /**
     * @var float $consolAging4
     */
    protected $consolAging4 = null;

    /**
     * @var int $consolDaysOverdue
     */
    protected $consolDaysOverdue = null;

    /**
     * @var RecordRef $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $prefCCProcessor
     */
    protected $prefCCProcessor = null;

    /**
     * @var float $depositBalance
     */
    protected $depositBalance = null;

    /**
     * @var boolean $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var boolean $taxable
     */
    protected $taxable = null;

    /**
     * @var RecordRef $taxItem
     */
    protected $taxItem = null;

    /**
     * @var string $resaleNumber
     */
    protected $resaleNumber = null;

    /**
     * @var float $aging
     */
    protected $aging = null;

    /**
     * @var float $aging1
     */
    protected $aging1 = null;

    /**
     * @var float $aging2
     */
    protected $aging2 = null;

    /**
     * @var float $aging3
     */
    protected $aging3 = null;

    /**
     * @var float $aging4
     */
    protected $aging4 = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var AlcoholRecipientType $alcoholRecipientType
     */
    protected $alcoholRecipientType = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var int $reminderDays
     */
    protected $reminderDays = null;

    /**
     * @var RecordRef $shippingItem
     */
    protected $shippingItem = null;

    /**
     * @var string $thirdPartyAcct
     */
    protected $thirdPartyAcct = null;

    /**
     * @var string $thirdPartyZipcode
     */
    protected $thirdPartyZipcode = null;

    /**
     * @var Country $thirdPartyCountry
     */
    protected $thirdPartyCountry = null;

    /**
     * @var boolean $giveAccess
     */
    protected $giveAccess = null;

    /**
     * @var float $estimatedBudget
     */
    protected $estimatedBudget = null;

    /**
     * @var RecordRef $accessRole
     */
    protected $accessRole = null;

    /**
     * @var boolean $sendEmail
     */
    protected $sendEmail = null;

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
     * @var RecordRef $campaignCategory
     */
    protected $campaignCategory = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var RecordRef $receivablesAccount
     */
    protected $receivablesAccount = null;

    /**
     * @var RecordRef $drAccount
     */
    protected $drAccount = null;

    /**
     * @var RecordRef $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var float $defaultOrderPriority
     */
    protected $defaultOrderPriority = null;

    /**
     * @var string $webLead
     */
    protected $webLead = null;

    /**
     * @var string $referrer
     */
    protected $referrer = null;

    /**
     * @var string $keywords
     */
    protected $keywords = null;

    /**
     * @var string $clickStream
     */
    protected $clickStream = null;

    /**
     * @var string $lastPageVisited
     */
    protected $lastPageVisited = null;

    /**
     * @var int $visits
     */
    protected $visits = null;

    /**
     * @var \DateTime $firstVisit
     */
    protected $firstVisit = null;

    /**
     * @var \DateTime $lastVisit
     */
    protected $lastVisit = null;

    /**
     * @var boolean $billPay
     */
    protected $billPay = null;

    /**
     * @var float $openingBalance
     */
    protected $openingBalance = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $openingBalanceDate
     */
    protected $openingBalanceDate = null;

    /**
     * @var RecordRef $openingBalanceAccount
     */
    protected $openingBalanceAccount = null;

    /**
     * @var CustomerStage $stage
     */
    protected $stage = null;

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
     * @var boolean $syncPartnerTeams
     */
    protected $syncPartnerTeams = null;

    /**
     * @var boolean $isBudgetApproved
     */
    protected $isBudgetApproved = null;

    /**
     * @var GlobalSubscriptionStatus $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var RecordRef $salesReadiness
     */
    protected $salesReadiness = null;

    /**
     * @var CustomerSalesTeamList $salesTeamList
     */
    protected $salesTeamList = null;

    /**
     * @var RecordRef $buyingReason
     */
    protected $buyingReason = null;

    /**
     * @var CustomerDownloadList $downloadList
     */
    protected $downloadList = null;

    /**
     * @var RecordRef $buyingTimeFrame
     */
    protected $buyingTimeFrame = null;

    /**
     * @var CustomerAddressbookList $addressbookList
     */
    protected $addressbookList = null;

    /**
     * @var SubscriptionsList $subscriptionsList
     */
    protected $subscriptionsList = null;

    /**
     * @var ContactAccessRolesList $contactRolesList
     */
    protected $contactRolesList = null;

    /**
     * @var CustomerCurrencyList $currencyList
     */
    protected $currencyList = null;

    /**
     * @var CustomerCreditCardsList $creditCardsList
     */
    protected $creditCardsList = null;

    /**
     * @var CustomerPartnersList $partnersList
     */
    protected $partnersList = null;

    /**
     * @var CustomerGroupPricingList $groupPricingList
     */
    protected $groupPricingList = null;

    /**
     * @var CustomerItemPricingList $itemPricingList
     */
    protected $itemPricingList = null;

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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAltEmail($altEmail)
    {
      $this->altEmail = $altEmail;
      return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param Language $language
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return CustomerNumberFormat
     */
    public function getNumberFormat()
    {
      return $this->numberFormat;
    }

    /**
     * @param CustomerNumberFormat $numberFormat
     * @return \Nzolt\NetSuite\Customer
     */
    public function setNumberFormat($numberFormat)
    {
      $this->numberFormat = $numberFormat;
      return $this;
    }

    /**
     * @return CustomerNegativeNumberFormat
     */
    public function getNegativeNumberFormat()
    {
      return $this->negativeNumberFormat;
    }

    /**
     * @param CustomerNegativeNumberFormat $negativeNumberFormat
     * @return \Nzolt\NetSuite\Customer
     */
    public function setNegativeNumberFormat($negativeNumberFormat)
    {
      $this->negativeNumberFormat = $negativeNumberFormat;
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
     * @return \Nzolt\NetSuite\Customer
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
    public function getImage()
    {
      return $this->image;
    }

    /**
     * @param RecordRef $image
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setRepresentingSubsidiary($representingSubsidiary)
    {
      $this->representingSubsidiary = $representingSubsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param RecordRef $salesRep
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerritory()
    {
      return $this->territory;
    }

    /**
     * @param RecordRef $territory
     * @return \Nzolt\NetSuite\Customer
     */
    public function setTerritory($territory)
    {
      $this->territory = $territory;
      return $this;
    }

    /**
     * @return string
     */
    public function getContribPct()
    {
      return $this->contribPct;
    }

    /**
     * @param string $contribPct
     * @return \Nzolt\NetSuite\Customer
     */
    public function setContribPct($contribPct)
    {
      $this->contribPct = $contribPct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param RecordRef $partner
     * @return \Nzolt\NetSuite\Customer
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesGroup()
    {
      return $this->salesGroup;
    }

    /**
     * @param RecordRef $salesGroup
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSalesGroup($salesGroup)
    {
      $this->salesGroup = $salesGroup;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setVatRegNumber($vatRegNumber)
    {
      $this->vatRegNumber = $vatRegNumber;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExempt()
    {
      return $this->taxExempt;
    }

    /**
     * @param boolean $taxExempt
     * @return \Nzolt\NetSuite\Customer
     */
    public function setTaxExempt($taxExempt)
    {
      $this->taxExempt = $taxExempt;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCreditLimit($creditLimit)
    {
      $this->creditLimit = $creditLimit;
      return $this;
    }

    /**
     * @return CustomerCreditHoldOverride
     */
    public function getCreditHoldOverride()
    {
      return $this->creditHoldOverride;
    }

    /**
     * @param CustomerCreditHoldOverride $creditHoldOverride
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCreditHoldOverride($creditHoldOverride)
    {
      $this->creditHoldOverride = $creditHoldOverride;
      return $this;
    }

    /**
     * @return CustomerMonthlyClosing
     */
    public function getMonthlyClosing()
    {
      return $this->monthlyClosing;
    }

    /**
     * @param CustomerMonthlyClosing $monthlyClosing
     * @return \Nzolt\NetSuite\Customer
     */
    public function setMonthlyClosing($monthlyClosing)
    {
      $this->monthlyClosing = $monthlyClosing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideCurrencyFormat()
    {
      return $this->overrideCurrencyFormat;
    }

    /**
     * @param boolean $overrideCurrencyFormat
     * @return \Nzolt\NetSuite\Customer
     */
    public function setOverrideCurrencyFormat($overrideCurrencyFormat)
    {
      $this->overrideCurrencyFormat = $overrideCurrencyFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplaySymbol()
    {
      return $this->displaySymbol;
    }

    /**
     * @param string $displaySymbol
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDisplaySymbol($displaySymbol)
    {
      $this->displaySymbol = $displaySymbol;
      return $this;
    }

    /**
     * @return CurrencySymbolPlacement
     */
    public function getSymbolPlacement()
    {
      return $this->symbolPlacement;
    }

    /**
     * @param CurrencySymbolPlacement $symbolPlacement
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSymbolPlacement($symbolPlacement)
    {
      $this->symbolPlacement = $symbolPlacement;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return float
     */
    public function getOverdueBalance()
    {
      return $this->overdueBalance;
    }

    /**
     * @param float $overdueBalance
     * @return \Nzolt\NetSuite\Customer
     */
    public function setOverdueBalance($overdueBalance)
    {
      $this->overdueBalance = $overdueBalance;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysOverdue()
    {
      return $this->daysOverdue;
    }

    /**
     * @param int $daysOverdue
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDaysOverdue($daysOverdue)
    {
      $this->daysOverdue = $daysOverdue;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setUnbilledOrders($unbilledOrders)
    {
      $this->unbilledOrders = $unbilledOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolUnbilledOrders()
    {
      return $this->consolUnbilledOrders;
    }

    /**
     * @param float $consolUnbilledOrders
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolUnbilledOrders($consolUnbilledOrders)
    {
      $this->consolUnbilledOrders = $consolUnbilledOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolOverdueBalance()
    {
      return $this->consolOverdueBalance;
    }

    /**
     * @param float $consolOverdueBalance
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolOverdueBalance($consolOverdueBalance)
    {
      $this->consolOverdueBalance = $consolOverdueBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolDepositBalance()
    {
      return $this->consolDepositBalance;
    }

    /**
     * @param float $consolDepositBalance
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolDepositBalance($consolDepositBalance)
    {
      $this->consolDepositBalance = $consolDepositBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolBalance()
    {
      return $this->consolBalance;
    }

    /**
     * @param float $consolBalance
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolBalance($consolBalance)
    {
      $this->consolBalance = $consolBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging()
    {
      return $this->consolAging;
    }

    /**
     * @param float $consolAging
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolAging($consolAging)
    {
      $this->consolAging = $consolAging;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging1()
    {
      return $this->consolAging1;
    }

    /**
     * @param float $consolAging1
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolAging1($consolAging1)
    {
      $this->consolAging1 = $consolAging1;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging2()
    {
      return $this->consolAging2;
    }

    /**
     * @param float $consolAging2
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolAging2($consolAging2)
    {
      $this->consolAging2 = $consolAging2;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging3()
    {
      return $this->consolAging3;
    }

    /**
     * @param float $consolAging3
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolAging3($consolAging3)
    {
      $this->consolAging3 = $consolAging3;
      return $this;
    }

    /**
     * @return float
     */
    public function getConsolAging4()
    {
      return $this->consolAging4;
    }

    /**
     * @param float $consolAging4
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolAging4($consolAging4)
    {
      $this->consolAging4 = $consolAging4;
      return $this;
    }

    /**
     * @return int
     */
    public function getConsolDaysOverdue()
    {
      return $this->consolDaysOverdue;
    }

    /**
     * @param int $consolDaysOverdue
     * @return \Nzolt\NetSuite\Customer
     */
    public function setConsolDaysOverdue($consolDaysOverdue)
    {
      $this->consolDaysOverdue = $consolDaysOverdue;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param RecordRef $priceLevel
     * @return \Nzolt\NetSuite\Customer
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrefCCProcessor()
    {
      return $this->prefCCProcessor;
    }

    /**
     * @param RecordRef $prefCCProcessor
     * @return \Nzolt\NetSuite\Customer
     */
    public function setPrefCCProcessor($prefCCProcessor)
    {
      $this->prefCCProcessor = $prefCCProcessor;
      return $this;
    }

    /**
     * @return float
     */
    public function getDepositBalance()
    {
      return $this->depositBalance;
    }

    /**
     * @param float $depositBalance
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDepositBalance($depositBalance)
    {
      $this->depositBalance = $depositBalance;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param boolean $shipComplete
     * @return \Nzolt\NetSuite\Customer
     */
    public function setShipComplete($shipComplete)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxable()
    {
      return $this->taxable;
    }

    /**
     * @param boolean $taxable
     * @return \Nzolt\NetSuite\Customer
     */
    public function setTaxable($taxable)
    {
      $this->taxable = $taxable;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setTaxItem($taxItem)
    {
      $this->taxItem = $taxItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getResaleNumber()
    {
      return $this->resaleNumber;
    }

    /**
     * @param string $resaleNumber
     * @return \Nzolt\NetSuite\Customer
     */
    public function setResaleNumber($resaleNumber)
    {
      $this->resaleNumber = $resaleNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getAging()
    {
      return $this->aging;
    }

    /**
     * @param float $aging
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAging($aging)
    {
      $this->aging = $aging;
      return $this;
    }

    /**
     * @return float
     */
    public function getAging1()
    {
      return $this->aging1;
    }

    /**
     * @param float $aging1
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAging1($aging1)
    {
      $this->aging1 = $aging1;
      return $this;
    }

    /**
     * @return float
     */
    public function getAging2()
    {
      return $this->aging2;
    }

    /**
     * @param float $aging2
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAging2($aging2)
    {
      $this->aging2 = $aging2;
      return $this;
    }

    /**
     * @return float
     */
    public function getAging3()
    {
      return $this->aging3;
    }

    /**
     * @param float $aging3
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAging3($aging3)
    {
      $this->aging3 = $aging3;
      return $this;
    }

    /**
     * @return float
     */
    public function getAging4()
    {
      return $this->aging4;
    }

    /**
     * @param float $aging4
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAging4($aging4)
    {
      $this->aging4 = $aging4;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return AlcoholRecipientType
     */
    public function getAlcoholRecipientType()
    {
      return $this->alcoholRecipientType;
    }

    /**
     * @param AlcoholRecipientType $alcoholRecipientType
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAlcoholRecipientType($alcoholRecipientType)
    {
      $this->alcoholRecipientType = $alcoholRecipientType;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return int
     */
    public function getReminderDays()
    {
      return $this->reminderDays;
    }

    /**
     * @param int $reminderDays
     * @return \Nzolt\NetSuite\Customer
     */
    public function setReminderDays($reminderDays)
    {
      $this->reminderDays = $reminderDays;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingItem()
    {
      return $this->shippingItem;
    }

    /**
     * @param RecordRef $shippingItem
     * @return \Nzolt\NetSuite\Customer
     */
    public function setShippingItem($shippingItem)
    {
      $this->shippingItem = $shippingItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcct()
    {
      return $this->thirdPartyAcct;
    }

    /**
     * @param string $thirdPartyAcct
     * @return \Nzolt\NetSuite\Customer
     */
    public function setThirdPartyAcct($thirdPartyAcct)
    {
      $this->thirdPartyAcct = $thirdPartyAcct;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyZipcode()
    {
      return $this->thirdPartyZipcode;
    }

    /**
     * @param string $thirdPartyZipcode
     * @return \Nzolt\NetSuite\Customer
     */
    public function setThirdPartyZipcode($thirdPartyZipcode)
    {
      $this->thirdPartyZipcode = $thirdPartyZipcode;
      return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountry()
    {
      return $this->thirdPartyCountry;
    }

    /**
     * @param Country $thirdPartyCountry
     * @return \Nzolt\NetSuite\Customer
     */
    public function setThirdPartyCountry($thirdPartyCountry)
    {
      $this->thirdPartyCountry = $thirdPartyCountry;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedBudget()
    {
      return $this->estimatedBudget;
    }

    /**
     * @param float $estimatedBudget
     * @return \Nzolt\NetSuite\Customer
     */
    public function setEstimatedBudget($estimatedBudget)
    {
      $this->estimatedBudget = $estimatedBudget;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccessRole()
    {
      return $this->accessRole;
    }

    /**
     * @param RecordRef $accessRole
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAccessRole($accessRole)
    {
      $this->accessRole = $accessRole;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setRequirePwdChange($requirePwdChange)
    {
      $this->requirePwdChange = $requirePwdChange;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignCategory()
    {
      return $this->campaignCategory;
    }

    /**
     * @param RecordRef $campaignCategory
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCampaignCategory($campaignCategory)
    {
      $this->campaignCategory = $campaignCategory;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param RecordRef $leadSource
     * @return \Nzolt\NetSuite\Customer
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivablesAccount()
    {
      return $this->receivablesAccount;
    }

    /**
     * @param RecordRef $receivablesAccount
     * @return \Nzolt\NetSuite\Customer
     */
    public function setReceivablesAccount($receivablesAccount)
    {
      $this->receivablesAccount = $receivablesAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param RecordRef $drAccount
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDrAccount($drAccount)
    {
      $this->drAccount = $drAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param RecordRef $fxAccount
     * @return \Nzolt\NetSuite\Customer
     */
    public function setFxAccount($fxAccount)
    {
      $this->fxAccount = $fxAccount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultOrderPriority()
    {
      return $this->defaultOrderPriority;
    }

    /**
     * @param float $defaultOrderPriority
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDefaultOrderPriority($defaultOrderPriority)
    {
      $this->defaultOrderPriority = $defaultOrderPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebLead()
    {
      return $this->webLead;
    }

    /**
     * @param string $webLead
     * @return \Nzolt\NetSuite\Customer
     */
    public function setWebLead($webLead)
    {
      $this->webLead = $webLead;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferrer()
    {
      return $this->referrer;
    }

    /**
     * @param string $referrer
     * @return \Nzolt\NetSuite\Customer
     */
    public function setReferrer($referrer)
    {
      $this->referrer = $referrer;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
      return $this->keywords;
    }

    /**
     * @param string $keywords
     * @return \Nzolt\NetSuite\Customer
     */
    public function setKeywords($keywords)
    {
      $this->keywords = $keywords;
      return $this;
    }

    /**
     * @return string
     */
    public function getClickStream()
    {
      return $this->clickStream;
    }

    /**
     * @param string $clickStream
     * @return \Nzolt\NetSuite\Customer
     */
    public function setClickStream($clickStream)
    {
      $this->clickStream = $clickStream;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastPageVisited()
    {
      return $this->lastPageVisited;
    }

    /**
     * @param string $lastPageVisited
     * @return \Nzolt\NetSuite\Customer
     */
    public function setLastPageVisited($lastPageVisited)
    {
      $this->lastPageVisited = $lastPageVisited;
      return $this;
    }

    /**
     * @return int
     */
    public function getVisits()
    {
      return $this->visits;
    }

    /**
     * @param int $visits
     * @return \Nzolt\NetSuite\Customer
     */
    public function setVisits($visits)
    {
      $this->visits = $visits;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstVisit()
    {
      if ($this->firstVisit == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->firstVisit);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $firstVisit
     * @return \Nzolt\NetSuite\Customer
     */
    public function setFirstVisit(\DateTime $firstVisit = null)
    {
      if ($firstVisit == null) {
       $this->firstVisit = null;
      } else {
        $this->firstVisit = $firstVisit->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastVisit()
    {
      if ($this->lastVisit == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastVisit);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastVisit
     * @return \Nzolt\NetSuite\Customer
     */
    public function setLastVisit(\DateTime $lastVisit = null)
    {
      if ($lastVisit == null) {
       $this->lastVisit = null;
      } else {
        $this->lastVisit = $lastVisit->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setBillPay($billPay)
    {
      $this->billPay = $billPay;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setOpeningBalance($openingBalance)
    {
      $this->openingBalance = $openingBalance;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setOpeningBalanceAccount($openingBalanceAccount)
    {
      $this->openingBalanceAccount = $openingBalanceAccount;
      return $this;
    }

    /**
     * @return CustomerStage
     */
    public function getStage()
    {
      return $this->stage;
    }

    /**
     * @param CustomerStage $stage
     * @return \Nzolt\NetSuite\Customer
     */
    public function setStage($stage)
    {
      $this->stage = $stage;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setFaxTransactions($faxTransactions)
    {
      $this->faxTransactions = $faxTransactions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSyncPartnerTeams()
    {
      return $this->syncPartnerTeams;
    }

    /**
     * @param boolean $syncPartnerTeams
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSyncPartnerTeams($syncPartnerTeams)
    {
      $this->syncPartnerTeams = $syncPartnerTeams;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBudgetApproved()
    {
      return $this->isBudgetApproved;
    }

    /**
     * @param boolean $isBudgetApproved
     * @return \Nzolt\NetSuite\Customer
     */
    public function setIsBudgetApproved($isBudgetApproved)
    {
      $this->isBudgetApproved = $isBudgetApproved;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesReadiness()
    {
      return $this->salesReadiness;
    }

    /**
     * @param RecordRef $salesReadiness
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSalesReadiness($salesReadiness)
    {
      $this->salesReadiness = $salesReadiness;
      return $this;
    }

    /**
     * @return CustomerSalesTeamList
     */
    public function getSalesTeamList()
    {
      return $this->salesTeamList;
    }

    /**
     * @param CustomerSalesTeamList $salesTeamList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSalesTeamList($salesTeamList)
    {
      $this->salesTeamList = $salesTeamList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingReason()
    {
      return $this->buyingReason;
    }

    /**
     * @param RecordRef $buyingReason
     * @return \Nzolt\NetSuite\Customer
     */
    public function setBuyingReason($buyingReason)
    {
      $this->buyingReason = $buyingReason;
      return $this;
    }

    /**
     * @return CustomerDownloadList
     */
    public function getDownloadList()
    {
      return $this->downloadList;
    }

    /**
     * @param CustomerDownloadList $downloadList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setDownloadList($downloadList)
    {
      $this->downloadList = $downloadList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuyingTimeFrame()
    {
      return $this->buyingTimeFrame;
    }

    /**
     * @param RecordRef $buyingTimeFrame
     * @return \Nzolt\NetSuite\Customer
     */
    public function setBuyingTimeFrame($buyingTimeFrame)
    {
      $this->buyingTimeFrame = $buyingTimeFrame;
      return $this;
    }

    /**
     * @return CustomerAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param CustomerAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setAddressbookList($addressbookList)
    {
      $this->addressbookList = $addressbookList;
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setSubscriptionsList($subscriptionsList)
    {
      $this->subscriptionsList = $subscriptionsList;
      return $this;
    }

    /**
     * @return ContactAccessRolesList
     */
    public function getContactRolesList()
    {
      return $this->contactRolesList;
    }

    /**
     * @param ContactAccessRolesList $contactRolesList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setContactRolesList($contactRolesList)
    {
      $this->contactRolesList = $contactRolesList;
      return $this;
    }

    /**
     * @return CustomerCurrencyList
     */
    public function getCurrencyList()
    {
      return $this->currencyList;
    }

    /**
     * @param CustomerCurrencyList $currencyList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCurrencyList($currencyList)
    {
      $this->currencyList = $currencyList;
      return $this;
    }

    /**
     * @return CustomerCreditCardsList
     */
    public function getCreditCardsList()
    {
      return $this->creditCardsList;
    }

    /**
     * @param CustomerCreditCardsList $creditCardsList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setCreditCardsList($creditCardsList)
    {
      $this->creditCardsList = $creditCardsList;
      return $this;
    }

    /**
     * @return CustomerPartnersList
     */
    public function getPartnersList()
    {
      return $this->partnersList;
    }

    /**
     * @param CustomerPartnersList $partnersList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setPartnersList($partnersList)
    {
      $this->partnersList = $partnersList;
      return $this;
    }

    /**
     * @return CustomerGroupPricingList
     */
    public function getGroupPricingList()
    {
      return $this->groupPricingList;
    }

    /**
     * @param CustomerGroupPricingList $groupPricingList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setGroupPricingList($groupPricingList)
    {
      $this->groupPricingList = $groupPricingList;
      return $this;
    }

    /**
     * @return CustomerItemPricingList
     */
    public function getItemPricingList()
    {
      return $this->itemPricingList;
    }

    /**
     * @param CustomerItemPricingList $itemPricingList
     * @return \Nzolt\NetSuite\Customer
     */
    public function setItemPricingList($itemPricingList)
    {
      $this->itemPricingList = $itemPricingList;
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
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
     * @return \Nzolt\NetSuite\Customer
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
