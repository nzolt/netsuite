<?php

namespace Nzolt\NetSuite;

class CouponCodeSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchStringField $code
     */
    protected $code = null;

    /**
     * @var SearchDateField $dateSent
     */
    protected $dateSent = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchLongField $id
     */
    protected $id = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $promotion
     */
    protected $promotion = null;

    /**
     * @var SearchMultiSelectField $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchLongField $useCount
     */
    protected $useCount = null;

    /**
     * @var SearchBooleanField $used
     */
    protected $used = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchStringField
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param SearchStringField $code
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateSent()
    {
      return $this->dateSent;
    }

    /**
     * @param SearchDateField $dateSent
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setDateSent($dateSent)
    {
      $this->dateSent = $dateSent;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchLongField $id
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
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
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromotion()
    {
      return $this->promotion;
    }

    /**
     * @param SearchMultiSelectField $promotion
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setPromotion($promotion)
    {
      $this->promotion = $promotion;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getUseCount()
    {
      return $this->useCount;
    }

    /**
     * @param SearchLongField $useCount
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setUseCount($useCount)
    {
      $this->useCount = $useCount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsed()
    {
      return $this->used;
    }

    /**
     * @param SearchBooleanField $used
     * @return \Nzolt\NetSuite\CouponCodeSearchBasic
     */
    public function setUsed($used)
    {
      $this->used = $used;
      return $this;
    }

}
