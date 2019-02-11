<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\TaxFractionUnit;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EmailPreference;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\TaxRounding;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Partner
 */
class Partner extends Record {

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
    protected $partnerCode;

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
     * @var RecordRef
     */
    public $parent;

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
     * @var GlobalSubscriptionStatus
     */
    protected $globalSubscriptionStatus;

    /**
     * @access public
     * @var string
     */
    protected $referringUrl;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $roleList;

    /**
     * @access public
     * @var CategoryList
     */
    protected $categoryList;

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
    protected $taxIdNum;

    /**
     * @access public
     * @var string
     */
    protected $vatRegNumber;

    /**
     * @access public
     * @var string
     */
    protected $comments;

    /**
     * @access public
     * @var string
     */
    protected $bcn;

    /**
     * @access public
     * @var RecordRef
     */
    public $image;

    /**
     * @access public
     * @var TaxFractionUnit
     */
    protected $taxFractionUnit;

    /**
     * @access public
     * @var EmailPreference
     */
    protected $emailPreference;

    /**
     * @access public
     * @var TaxRounding
     */
    protected $taxRounding;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
     * @var boolean
     */
    protected $giveAccess;

    /**
     * @access public
     * @var RecordRef
     */
    public $accessRole;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

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
    protected $subPartnerLogin;

    /**
     * @access public
     * @var string
     */
    protected $loginAs;

    /**
     * @access public
     * @var boolean
     */
    protected $eligibleForCommission;

    /**
     * @access public
     * @var ContactAccessRolesList
     */
    protected $contactRolesList;

    /**
     * @access public
     * @var PartnerPromoCodeList
     */
    protected $promoCodeList;

    /**
     * @access public
     * @var PartnerAddressbookList
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
    	"altName" => "string",
    	"partnerCode" => "string",
    	"isPerson" => "boolean",
    	"phoneticName" => "string",
    	"salutation" => "string",
    	"firstName" => "string",
    	"middleName" => "string",
    	"lastName" => "string",
    	"companyName" => "string",
    	"parent" => "RecordRef",
    	"phone" => "string",
    	"fax" => "string",
    	"email" => "string",
    	"url" => "string",
    	"defaultAddress" => "string",
    	"isInactive" => "boolean",
    	"lastModifiedDate" => "dateTime",
    	"dateCreated" => "dateTime",
    	"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
    	"referringUrl" => "string",
    	"roleList" => "RecordRefList",
    	"categoryList" => "CategoryList",
    	"title" => "string",
    	"printOnCheckAs" => "string",
    	"taxIdNum" => "string",
    	"vatRegNumber" => "string",
    	"comments" => "string",
    	"bcn" => "string",
    	"image" => "RecordRef",
    	"taxFractionUnit" => "TaxFractionUnit",
    	"emailPreference" => "EmailPreference",
    	"taxRounding" => "TaxRounding",
    	"department" => "RecordRef",
    	"location" => "RecordRef",
    	"class" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"homePhone" => "string",
    	"mobilePhone" => "string",
    	"altEmail" => "string",
    	"giveAccess" => "boolean",
    	"accessRole" => "RecordRef",
    	"sendEmail" => "boolean",
    	"password" => "string",
    	"password2" => "string",
    	"requirePwdChange" => "boolean",
    	"subPartnerLogin" => "boolean",
    	"loginAs" => "string",
    	"eligibleForCommission" => "boolean",
    	"contactRolesList" => "ContactAccessRolesList",
    	"promoCodeList" => "PartnerPromoCodeList",
    	"addressbookList" => "PartnerAddressbookList",
    	"subscriptionsList" => "SubscriptionsList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set entityId
     *
     * @param string $entityId
     * @return Partner
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
     * @return Partner
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
     * Set partnerCode
     *
     * @param string $partnerCode
     * @return Partner
     */
    public function setPartnerCode($partnerCode) {
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * Get partnerCode
     *
     * @return string
     */
    public function getPartnerCode() {
        return $this->partnerCode;
    }


    /**
     * Set isPerson
     *
     * @param boolean $isPerson
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * Set globalSubscriptionStatus
     *
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Partner
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
     * Set referringUrl
     *
     * @param string $referringUrl
     * @return Partner
     */
    public function setReferringUrl($referringUrl) {
        $this->referringUrl = $referringUrl;
        return $this;
    }

    /**
     * Get referringUrl
     *
     * @return string
     */
    public function getReferringUrl() {
        return $this->referringUrl;
    }


    /**
     * Set roleList
     *
     * @param RecordRefList $roleList
     * @return Partner
     */
    public function setRoleList(RecordRefList $roleList) {
        $this->roleList = $roleList;
        return $this;
    }

    /**
     * Get roleList
     *
     * @return RecordRefList
     */
    public function getRoleList() {
        return $this->roleList;
    }


    /**
     * Set categoryList
     *
     * @param CategoryList $categoryList
     * @return Partner
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
     * Set title
     *
     * @param string $title
     * @return Partner
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
     * @return Partner
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
     * Set taxIdNum
     *
     * @param string $taxIdNum
     * @return Partner
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
     * Set vatRegNumber
     *
     * @param string $vatRegNumber
     * @return Partner
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
     * Set comments
     *
     * @param string $comments
     * @return Partner
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
     * Set bcn
     *
     * @param string $bcn
     * @return Partner
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
     * Set taxFractionUnit
     *
     * @param TaxFractionUnit $taxFractionUnit
     * @return Partner
     */
    public function setTaxFractionUnit(TaxFractionUnit $taxFractionUnit) {
        $this->taxFractionUnit = $taxFractionUnit;
        return $this;
    }

    /**
     * Get taxFractionUnit
     *
     * @return TaxFractionUnit
     */
    public function getTaxFractionUnit() {
        return $this->taxFractionUnit;
    }


    /**
     * Set emailPreference
     *
     * @param EmailPreference $emailPreference
     * @return Partner
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
     * Set taxRounding
     *
     * @param TaxRounding $taxRounding
     * @return Partner
     */
    public function setTaxRounding(TaxRounding $taxRounding) {
        $this->taxRounding = $taxRounding;
        return $this;
    }

    /**
     * Get taxRounding
     *
     * @return TaxRounding
     */
    public function getTaxRounding() {
        return $this->taxRounding;
    }


    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * Set giveAccess
     *
     * @param boolean $giveAccess
     * @return Partner
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
     * @return Partner
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
     * Set password
     *
     * @param string $password
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * Set subPartnerLogin
     *
     * @param boolean $subPartnerLogin
     * @return Partner
     */
    public function setSubPartnerLogin($subPartnerLogin) {
        $this->subPartnerLogin = $subPartnerLogin;
        return $this;
    }

    /**
     * Get subPartnerLogin
     *
     * @return boolean
     */
    public function getSubPartnerLogin() {
        return $this->subPartnerLogin;
    }


    /**
     * Set loginAs
     *
     * @param string $loginAs
     * @return Partner
     */
    public function setLoginAs($loginAs) {
        $this->loginAs = $loginAs;
        return $this;
    }

    /**
     * Get loginAs
     *
     * @return string
     */
    public function getLoginAs() {
        return $this->loginAs;
    }


    /**
     * Set eligibleForCommission
     *
     * @param boolean $eligibleForCommission
     * @return Partner
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
     * Set contactRolesList
     *
     * @param ContactAccessRolesList $contactRolesList
     * @return Partner
     */
    public function setContactRolesList(ContactAccessRolesList $contactRolesList) {
        $this->contactRolesList = $contactRolesList;
        return $this;
    }

    /**
     * Get contactRolesList
     *
     * @return ContactAccessRolesList
     */
    public function getContactRolesList() {
        return $this->contactRolesList;
    }


    /**
     * Set promoCodeList
     *
     * @param PartnerPromoCodeList $promoCodeList
     * @return Partner
     */
    public function setPromoCodeList(PartnerPromoCodeList $promoCodeList) {
        $this->promoCodeList = $promoCodeList;
        return $this;
    }

    /**
     * Get promoCodeList
     *
     * @return PartnerPromoCodeList
     */
    public function getPromoCodeList() {
        return $this->promoCodeList;
    }


    /**
     * Set addressbookList
     *
     * @param PartnerAddressbookList $addressbookList
     * @return Partner
     */
    public function setAddressbookList(PartnerAddressbookList $addressbookList) {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * Get addressbookList
     *
     * @return PartnerAddressbookList
     */
    public function getAddressbookList() {
        return $this->addressbookList;
    }


    /**
     * Set subscriptionsList
     *
     * @param SubscriptionsList $subscriptionsList
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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
     * @return Partner
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