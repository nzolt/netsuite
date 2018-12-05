<?php

namespace Nzolt\NetSuite;

class Partner extends Record
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
     * @var string $partnerCode
     */
    protected $partnerCode = null;

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
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var GlobalSubscriptionStatus $globalSubscriptionStatus
     */
    protected $globalSubscriptionStatus = null;

    /**
     * @var string $referringUrl
     */
    protected $referringUrl = null;

    /**
     * @var RecordRefList $roleList
     */
    protected $roleList = null;

    /**
     * @var CategoryList $categoryList
     */
    protected $categoryList = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $printOnCheckAs
     */
    protected $printOnCheckAs = null;

    /**
     * @var string $taxIdNum
     */
    protected $taxIdNum = null;

    /**
     * @var string $vatRegNumber
     */
    protected $vatRegNumber = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $bcn
     */
    protected $bcn = null;

    /**
     * @var RecordRef $image
     */
    protected $image = null;

    /**
     * @var TaxFractionUnit $taxFractionUnit
     */
    protected $taxFractionUnit = null;

    /**
     * @var EmailPreference $emailPreference
     */
    protected $emailPreference = null;

    /**
     * @var TaxRounding $taxRounding
     */
    protected $taxRounding = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

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
     * @var boolean $giveAccess
     */
    protected $giveAccess = null;

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
     * @var boolean $subPartnerLogin
     */
    protected $subPartnerLogin = null;

    /**
     * @var string $loginAs
     */
    protected $loginAs = null;

    /**
     * @var boolean $eligibleForCommission
     */
    protected $eligibleForCommission = null;

    /**
     * @var ContactAccessRolesList $contactRolesList
     */
    protected $contactRolesList = null;

    /**
     * @var PartnerPromoCodeList $promoCodeList
     */
    protected $promoCodeList = null;

    /**
     * @var PartnerAddressbookList $addressbookList
     */
    protected $addressbookList = null;

    /**
     * @var SubscriptionsList $subscriptionsList
     */
    protected $subscriptionsList = null;

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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setAltName($altName)
    {
      $this->altName = $altName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
      return $this->partnerCode;
    }

    /**
     * @param string $partnerCode
     * @return \Nzolt\NetSuite\Partner
     */
    public function setPartnerCode($partnerCode)
    {
      $this->partnerCode = $partnerCode;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return GlobalSubscriptionStatus
     */
    public function getGlobalSubscriptionStatus()
    {
      return $this->globalSubscriptionStatus;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return \Nzolt\NetSuite\Partner
     */
    public function setGlobalSubscriptionStatus($globalSubscriptionStatus)
    {
      $this->globalSubscriptionStatus = $globalSubscriptionStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferringUrl()
    {
      return $this->referringUrl;
    }

    /**
     * @param string $referringUrl
     * @return \Nzolt\NetSuite\Partner
     */
    public function setReferringUrl($referringUrl)
    {
      $this->referringUrl = $referringUrl;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRoleList()
    {
      return $this->roleList;
    }

    /**
     * @param RecordRefList $roleList
     * @return \Nzolt\NetSuite\Partner
     */
    public function setRoleList($roleList)
    {
      $this->roleList = $roleList;
      return $this;
    }

    /**
     * @return CategoryList
     */
    public function getCategoryList()
    {
      return $this->categoryList;
    }

    /**
     * @param CategoryList $categoryList
     * @return \Nzolt\NetSuite\Partner
     */
    public function setCategoryList($categoryList)
    {
      $this->categoryList = $categoryList;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setPrintOnCheckAs($printOnCheckAs)
    {
      $this->printOnCheckAs = $printOnCheckAs;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setTaxIdNum($taxIdNum)
    {
      $this->taxIdNum = $taxIdNum;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setVatRegNumber($vatRegNumber)
    {
      $this->vatRegNumber = $vatRegNumber;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setBcn($bcn)
    {
      $this->bcn = $bcn;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setImage($image)
    {
      $this->image = $image;
      return $this;
    }

    /**
     * @return TaxFractionUnit
     */
    public function getTaxFractionUnit()
    {
      return $this->taxFractionUnit;
    }

    /**
     * @param TaxFractionUnit $taxFractionUnit
     * @return \Nzolt\NetSuite\Partner
     */
    public function setTaxFractionUnit($taxFractionUnit)
    {
      $this->taxFractionUnit = $taxFractionUnit;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setEmailPreference($emailPreference)
    {
      $this->emailPreference = $emailPreference;
      return $this;
    }

    /**
     * @return TaxRounding
     */
    public function getTaxRounding()
    {
      return $this->taxRounding;
    }

    /**
     * @param TaxRounding $taxRounding
     * @return \Nzolt\NetSuite\Partner
     */
    public function setTaxRounding($taxRounding)
    {
      $this->taxRounding = $taxRounding;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setClass($class)
    {
      $this->class = $class;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setAltEmail($altEmail)
    {
      $this->altEmail = $altEmail;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setGiveAccess($giveAccess)
    {
      $this->giveAccess = $giveAccess;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setRequirePwdChange($requirePwdChange)
    {
      $this->requirePwdChange = $requirePwdChange;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubPartnerLogin()
    {
      return $this->subPartnerLogin;
    }

    /**
     * @param boolean $subPartnerLogin
     * @return \Nzolt\NetSuite\Partner
     */
    public function setSubPartnerLogin($subPartnerLogin)
    {
      $this->subPartnerLogin = $subPartnerLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoginAs()
    {
      return $this->loginAs;
    }

    /**
     * @param string $loginAs
     * @return \Nzolt\NetSuite\Partner
     */
    public function setLoginAs($loginAs)
    {
      $this->loginAs = $loginAs;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setEligibleForCommission($eligibleForCommission)
    {
      $this->eligibleForCommission = $eligibleForCommission;
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setContactRolesList($contactRolesList)
    {
      $this->contactRolesList = $contactRolesList;
      return $this;
    }

    /**
     * @return PartnerPromoCodeList
     */
    public function getPromoCodeList()
    {
      return $this->promoCodeList;
    }

    /**
     * @param PartnerPromoCodeList $promoCodeList
     * @return \Nzolt\NetSuite\Partner
     */
    public function setPromoCodeList($promoCodeList)
    {
      $this->promoCodeList = $promoCodeList;
      return $this;
    }

    /**
     * @return PartnerAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param PartnerAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setSubscriptionsList($subscriptionsList)
    {
      $this->subscriptionsList = $subscriptionsList;
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
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
     * @return \Nzolt\NetSuite\Partner
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
