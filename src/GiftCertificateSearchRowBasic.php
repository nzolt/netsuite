<?php

namespace Nzolt\NetSuite;

class GiftCertificateSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnDoubleField[] $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var SearchColumnDoubleField[] $amtAvailBilled
     */
    protected $amtAvailBilled = null;

    /**
     * @var SearchColumnDateField[] $createdDate
     */
    protected $createdDate = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnDateField[] $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var SearchColumnBooleanField[] $gcActive
     */
    protected $gcActive = null;

    /**
     * @var SearchColumnStringField[] $giftCertCode
     */
    protected $giftCertCode = null;

    /**
     * @var SearchColumnStringField[] $incomeAcct
     */
    protected $incomeAcct = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnStringField[] $liabilityAcct
     */
    protected $liabilityAcct = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnDoubleField[] $originalAmount
     */
    protected $originalAmount = null;

    /**
     * @var SearchColumnDateField[] $purchaseDate
     */
    protected $purchaseDate = null;

    /**
     * @var SearchColumnStringField[] $sender
     */
    protected $sender = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $amountRemaining
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setAmountRemaining(array $amountRemaining = null)
    {
      $this->amountRemaining = $amountRemaining;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmtAvailBilled()
    {
      return $this->amtAvailBilled;
    }

    /**
     * @param SearchColumnDoubleField[] $amtAvailBilled
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setAmtAvailBilled(array $amtAvailBilled = null)
    {
      $this->amtAvailBilled = $amtAvailBilled;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate()
    {
      return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setCreatedDate(array $createdDate = null)
    {
      $this->createdDate = $createdDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpirationDate()
    {
      return $this->expirationDate;
    }

    /**
     * @param SearchColumnDateField[] $expirationDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setExpirationDate(array $expirationDate = null)
    {
      $this->expirationDate = $expirationDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcActive()
    {
      return $this->gcActive;
    }

    /**
     * @param SearchColumnBooleanField[] $gcActive
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setGcActive(array $gcActive = null)
    {
      $this->gcActive = $gcActive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertCode()
    {
      return $this->giftCertCode;
    }

    /**
     * @param SearchColumnStringField[] $giftCertCode
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setGiftCertCode(array $giftCertCode = null)
    {
      $this->giftCertCode = $giftCertCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIncomeAcct()
    {
      return $this->incomeAcct;
    }

    /**
     * @param SearchColumnStringField[] $incomeAcct
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setIncomeAcct(array $incomeAcct = null)
    {
      $this->incomeAcct = $incomeAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLiabilityAcct()
    {
      return $this->liabilityAcct;
    }

    /**
     * @param SearchColumnStringField[] $liabilityAcct
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setLiabilityAcct(array $liabilityAcct = null)
    {
      $this->liabilityAcct = $liabilityAcct;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOriginalAmount()
    {
      return $this->originalAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $originalAmount
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setOriginalAmount(array $originalAmount = null)
    {
      $this->originalAmount = $originalAmount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPurchaseDate()
    {
      return $this->purchaseDate;
    }

    /**
     * @param SearchColumnDateField[] $purchaseDate
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setPurchaseDate(array $purchaseDate = null)
    {
      $this->purchaseDate = $purchaseDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param SearchColumnStringField[] $sender
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setSender(array $sender = null)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\GiftCertificateSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
