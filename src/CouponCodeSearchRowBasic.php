<?php

namespace Nzolt\NetSuite;

class CouponCodeSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $code
     */
    protected $code = null;

    /**
     * @var SearchColumnDateField[] $dateSent
     */
    protected $dateSent = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnLongField[] $id
     */
    protected $id = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $promotion
     */
    protected $promotion = null;

    /**
     * @var SearchColumnStringField[] $recipient
     */
    protected $recipient = null;

    /**
     * @var SearchColumnLongField[] $useCount
     */
    protected $useCount = null;

    /**
     * @var SearchColumnBooleanField[] $used
     */
    protected $used = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param SearchColumnStringField[] $code
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setCode(array $code = null)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateSent()
    {
      return $this->dateSent;
    }

    /**
     * @param SearchColumnDateField[] $dateSent
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setDateSent(array $dateSent = null)
    {
      $this->dateSent = $dateSent;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setId(array $id = null)
    {
      $this->id = $id;
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
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPromotion()
    {
      return $this->promotion;
    }

    /**
     * @param SearchColumnStringField[] $promotion
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setPromotion(array $promotion = null)
    {
      $this->promotion = $promotion;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param SearchColumnStringField[] $recipient
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setRecipient(array $recipient = null)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getUseCount()
    {
      return $this->useCount;
    }

    /**
     * @param SearchColumnLongField[] $useCount
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setUseCount(array $useCount = null)
    {
      $this->useCount = $useCount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsed()
    {
      return $this->used;
    }

    /**
     * @param SearchColumnBooleanField[] $used
     * @return \Nzolt\NetSuite\CouponCodeSearchRowBasic
     */
    public function setUsed(array $used = null)
    {
      $this->used = $used;
      return $this;
    }

}
