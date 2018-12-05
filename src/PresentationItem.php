<?php

namespace Nzolt\NetSuite;

class PresentationItem
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var PresentationItemType $itemType
     */
    protected $itemType = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var float $onlinePrice
     */
    protected $onlinePrice = null;

    /**
     * @var float $basePrice
     */
    protected $basePrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\PresentationItem
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return PresentationItemType
     */
    public function getItemType()
    {
      return $this->itemType;
    }

    /**
     * @param PresentationItemType $itemType
     * @return \Nzolt\NetSuite\PresentationItem
     */
    public function setItemType($itemType)
    {
      $this->itemType = $itemType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\PresentationItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnlinePrice()
    {
      return $this->onlinePrice;
    }

    /**
     * @param float $onlinePrice
     * @return \Nzolt\NetSuite\PresentationItem
     */
    public function setOnlinePrice($onlinePrice)
    {
      $this->onlinePrice = $onlinePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
      return $this->basePrice;
    }

    /**
     * @param float $basePrice
     * @return \Nzolt\NetSuite\PresentationItem
     */
    public function setBasePrice($basePrice)
    {
      $this->basePrice = $basePrice;
      return $this;
    }

}
