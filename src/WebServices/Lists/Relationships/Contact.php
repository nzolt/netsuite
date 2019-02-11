<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Contact
 */
class Contact extends Record {

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
     * @var RecordRef
     */
    public $contactSource;

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

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
    protected $title;

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
    protected $isPrivate;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var string
     */
    protected $phoneticName;

    /**
     * @access public
     * @var CategoryList
     */
    protected $categoryList;

    /**
     * @access public
     * @var string
     */
    protected $altEmail;

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
    public $supervisor;

    /**
     * @access public
     * @var string
     */
    protected $supervisorPhone;

    /**
     * @access public
     * @var RecordRef
     */
    public $assistant;

    /**
     * @access public
     * @var string
     */
    protected $assistantPhone;

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
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var ContactAddressbookList
     */
    protected $addressbookList;

    /**
     * @access public
     * @var SubscriptionsList
     */
    protected $subscriptionsList;

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
    	"contactSource" => "RecordRef",
    	"company" => "RecordRef",
    	"salutation" => "string",
    	"firstName" => "string",
    	"middleName" => "string",
    	"lastName" => "string",
    	"title" => "string",
    	"phone" => "string",
    	"fax" => "string",
    	"email" => "string",
    	"defaultAddress" => "string",
    	"isPrivate" => "boolean",
    	"isInactive" => "boolean",
    	"subsidiary" => "RecordRef",
    	"phoneticName" => "string",
    	"categoryList" => "CategoryList",
    	"altEmail" => "string",
    	"officePhone" => "string",
    	"homePhone" => "string",
    	"mobilePhone" => "string",
    	"supervisor" => "RecordRef",
    	"supervisorPhone" => "string",
    	"assistant" => "RecordRef",
    	"assistantPhone" => "string",
    	"comments" => "string",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"image" => "RecordRef",
    	"billPay" => "boolean",
    	"dateCreated" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"addressbookList" => "ContactAddressbookList",
    	"subscriptionsList" => "SubscriptionsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set title
     *
     * @param string $title
     * @return Contact
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
     * Set phone
     *
     * @param string $phone
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return Contact
     */
    public function setIsPrivate($isPrivate) {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return boolean
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Contact
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
     * @return Contact
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
     * Set categoryList
     *
     * @param CategoryList $categoryList
     * @return Contact
     */
    public function setCategoryList(CategoryList $categoryList) {
        $this->categoryList = $categoryList;
        return $this;
    }

    /**
     * Get categoryList
     *
     * @return CategoryList
     */
    public function getCategoryList() {
        return $this->categoryList;
    }


    /**
     * Set altEmail
     *
     * @param string $altEmail
     * @return Contact
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
     * Set officePhone
     *
     * @param string $officePhone
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
     * Set supervisorPhone
     *
     * @param string $supervisorPhone
     * @return Contact
     */
    public function setSupervisorPhone($supervisorPhone) {
        $this->supervisorPhone = $supervisorPhone;
        return $this;
    }

    /**
     * Get supervisorPhone
     *
     * @return string
     */
    public function getSupervisorPhone() {
        return $this->supervisorPhone;
    }


    /**
     * Set assistantPhone
     *
     * @param string $assistantPhone
     * @return Contact
     */
    public function setAssistantPhone($assistantPhone) {
        $this->assistantPhone = $assistantPhone;
        return $this;
    }

    /**
     * Get assistantPhone
     *
     * @return string
     */
    public function getAssistantPhone() {
        return $this->assistantPhone;
    }


    /**
     * Set comments
     *
     * @param string $comments
     * @return Contact
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
     * @return Contact
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
     * Set billPay
     *
     * @param boolean $billPay
     * @return Contact
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
     * @return Contact
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
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Contact
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
     * Set addressbookList
     *
     * @param ContactAddressbookList $addressbookList
     * @return Contact
     */
    public function setAddressbookList(ContactAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return ContactAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set subscriptionsList
     *
     * @param SubscriptionsList $subscriptionsList
     * @return Contact
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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