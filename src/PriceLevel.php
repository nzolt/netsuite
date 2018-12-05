<?php

namespace Nzolt\NetSuite;

class PriceLevel extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var float $discountpct
     */
    protected $discountpct = null;

    /**
     * @var boolean $updateExistingPrices
     */
    protected $updateExistingPrices = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

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
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountpct()
    {
      return $this->discountpct;
    }

    /**
     * @param float $discountpct
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setDiscountpct($discountpct)
    {
      $this->discountpct = $discountpct;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateExistingPrices()
    {
      return $this->updateExistingPrices;
    }

    /**
     * @param boolean $updateExistingPrices
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setUpdateExistingPrices($updateExistingPrices)
    {
      $this->updateExistingPrices = $updateExistingPrices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
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
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\PriceLevel
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
     * @return \Nzolt\NetSuite\PriceLevel
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
