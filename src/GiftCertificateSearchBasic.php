<?php

namespace Nzolt\NetSuite;

class GiftCertificateSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchDoubleField $amountAvailableBilled
     */
    protected $amountAvailableBilled = null;

    /**
     * @var SearchDoubleField $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var SearchDateField $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchDateField $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var SearchStringField $giftCertCode
     */
    protected $giftCertCode = null;

    /**
     * @var SearchMultiSelectField $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isActive
     */
    protected $isActive = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchMultiSelectField $liabilityAccount
     */
    protected $liabilityAccount = null;

    /**
     * @var SearchStringField $message
     */
    protected $message = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchDoubleField $originalAmount
     */
    protected $originalAmount = null;

    /**
     * @var SearchDateField $purchaseDate
     */
    protected $purchaseDate = null;

    /**
     * @var SearchStringField $sender
     */
    protected $sender = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountAvailableBilled()
    {
      return $this->amountAvailableBilled;
    }

    /**
     * @param SearchDoubleField $amountAvailableBilled
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setAmountAvailableBilled($amountAvailableBilled)
    {
      $this->amountAvailableBilled = $amountAvailableBilled;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param SearchDoubleField $amountRemaining
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setAmountRemaining($amountRemaining)
    {
      $this->amountRemaining = $amountRemaining;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setCreatedDate($createdDate)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchStringField $email
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param SearchDateField $expirationDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setExpirationDate($expirationDate)
    {
      $this->expirationDate = $expirationDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertCode()
    {
      return $this->giftCertCode;
    }

    /**
     * @param SearchStringField $giftCertCode
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setGiftCertCode($giftCertCode)
    {
      $this->giftCertCode = $giftCertCode;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncomeAccount()
    {
      return $this->incomeAccount;
    }

    /**
     * @param SearchMultiSelectField $incomeAccount
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setIncomeAccount($incomeAccount)
    {
      $this->incomeAccount = $incomeAccount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsActive()
    {
      return $this->isActive;
    }

    /**
     * @param SearchBooleanField $isActive
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount()
    {
      return $this->liabilityAccount;
    }

    /**
     * @param SearchMultiSelectField $liabilityAccount
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setLiabilityAccount($liabilityAccount)
    {
      $this->liabilityAccount = $liabilityAccount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchStringField $message
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOriginalAmount()
    {
      return $this->originalAmount;
    }

    /**
     * @param SearchDoubleField $originalAmount
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setOriginalAmount($originalAmount)
    {
      $this->originalAmount = $originalAmount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPurchaseDate()
    {
      return $this->purchaseDate;
    }

    /**
     * @param SearchDateField $purchaseDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setPurchaseDate($purchaseDate)
    {
      $this->purchaseDate = $purchaseDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param SearchStringField $sender
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\GiftCertificateSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
