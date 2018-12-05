<?php

namespace Nzolt\NetSuite;

class Contact extends Record
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
     * @var RecordRef $contactSource
     */
    protected $contactSource = null;

    /**
     * @var RecordRef $company
     */
    protected $company = null;

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
     * @var string $title
     */
    protected $title = null;

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
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var string $phoneticName
     */
    protected $phoneticName = null;

    /**
     * @var CategoryList $categoryList
     */
    protected $categoryList = null;

    /**
     * @var string $altEmail
     */
    protected $altEmail = null;

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
     * @var RecordRef $supervisor
     */
    protected $supervisor = null;

    /**
     * @var string $supervisorPhone
     */
    protected $supervisorPhone = null;

    /**
     * @var RecordRef $assistant
     */
    protected $assistant = null;

    /**
     * @var string $assistantPhone
     */
    protected $assistantPhone = null;

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
     * @var boolean $billPay
     */
    protected $billPay = null;

    /**
     * @var \DateTime $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var ContactAddressbookList $addressbookList
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setEntityId($entityId)
    {
      $this->entityId = $entityId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getContactSource()
    {
      return $this->contactSource;
    }

    /**
     * @param RecordRef $contactSource
     * @return \Nzolt\NetSuite\Contact
     */
    public function setContactSource($contactSource)
    {
      $this->contactSource = $contactSource;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param RecordRef $company
     * @return \Nzolt\NetSuite\Contact
     */
    public function setCompany($company)
    {
      $this->company = $company;
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setDefaultAddress($defaultAddress)
    {
      $this->defaultAddress = $defaultAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     * @return \Nzolt\NetSuite\Contact
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setPhoneticName($phoneticName)
    {
      $this->phoneticName = $phoneticName;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setCategoryList($categoryList)
    {
      $this->categoryList = $categoryList;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setAltEmail($altEmail)
    {
      $this->altEmail = $altEmail;
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setMobilePhone($mobilePhone)
    {
      $this->mobilePhone = $mobilePhone;
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setSupervisor($supervisor)
    {
      $this->supervisor = $supervisor;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupervisorPhone()
    {
      return $this->supervisorPhone;
    }

    /**
     * @param string $supervisorPhone
     * @return \Nzolt\NetSuite\Contact
     */
    public function setSupervisorPhone($supervisorPhone)
    {
      $this->supervisorPhone = $supervisorPhone;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssistant()
    {
      return $this->assistant;
    }

    /**
     * @param RecordRef $assistant
     * @return \Nzolt\NetSuite\Contact
     */
    public function setAssistant($assistant)
    {
      $this->assistant = $assistant;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssistantPhone()
    {
      return $this->assistantPhone;
    }

    /**
     * @param string $assistantPhone
     * @return \Nzolt\NetSuite\Contact
     */
    public function setAssistantPhone($assistantPhone)
    {
      $this->assistantPhone = $assistantPhone;
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setImage($image)
    {
      $this->image = $image;
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return ContactAddressbookList
     */
    public function getAddressbookList()
    {
      return $this->addressbookList;
    }

    /**
     * @param ContactAddressbookList $addressbookList
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
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
     * @return \Nzolt\NetSuite\Contact
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
