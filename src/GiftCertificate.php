<?php

namespace Nzolt\NetSuite;

class GiftCertificate extends Record
{

    /**
     * @var string $giftCertCode
     */
    protected $giftCertCode = null;

    /**
     * @var string $sender
     */
    protected $sender = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var float $originalAmount
     */
    protected $originalAmount = null;

    /**
     * @var float $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getGiftCertCode()
    {
      return $this->giftCertCode;
    }

    /**
     * @param string $giftCertCode
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setGiftCertCode($giftCertCode)
    {
      $this->giftCertCode = $giftCertCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param string $sender
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\GiftCertificate
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
     * @return float
     */
    public function getOriginalAmount()
    {
      return $this->originalAmount;
    }

    /**
     * @param float $originalAmount
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setOriginalAmount($originalAmount)
    {
      $this->originalAmount = $originalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param float $amountRemaining
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setAmountRemaining($amountRemaining)
    {
      $this->amountRemaining = $amountRemaining;
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
     * @return \Nzolt\NetSuite\GiftCertificate
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
