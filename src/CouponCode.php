<?php

namespace Nzolt\NetSuite;

class CouponCode extends Record
{

    /**
     * @var RecordRef $promotion
     */
    protected $promotion = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var RecordRef $recipient
     */
    protected $recipient = null;

    /**
     * @var \DateTime $dateSent
     */
    protected $dateSent = null;

    /**
     * @var boolean $used
     */
    protected $used = null;

    /**
     * @var int $useCount
     */
    protected $useCount = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param RecordRef $promotion
     * @param string $code
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($promotion, $code, $internalId, $externalId)
    {
      parent::__construct();
      $this->promotion = $promotion;
      $this->code = $code;
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getPromotion()
    {
      return $this->promotion;
    }

    /**
     * @param RecordRef $promotion
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setPromotion($promotion)
    {
      $this->promotion = $promotion;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecipient()
    {
      return $this->recipient;
    }

    /**
     * @param RecordRef $recipient
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setRecipient($recipient)
    {
      $this->recipient = $recipient;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateSent()
    {
      if ($this->dateSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateSent
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setDateSent(\DateTime $dateSent = null)
    {
      if ($dateSent == null) {
       $this->dateSent = null;
      } else {
        $this->dateSent = $dateSent->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsed()
    {
      return $this->used;
    }

    /**
     * @param boolean $used
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setUsed($used)
    {
      $this->used = $used;
      return $this;
    }

    /**
     * @return int
     */
    public function getUseCount()
    {
      return $this->useCount;
    }

    /**
     * @param int $useCount
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setUseCount($useCount)
    {
      $this->useCount = $useCount;
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
     * @return \Nzolt\NetSuite\CouponCode
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
     * @return \Nzolt\NetSuite\CouponCode
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
