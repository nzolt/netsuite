<?php

namespace Nzolt\NetSuite;

class ItemAvailability
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var \DateTime $lastQtyAvailableChange
     */
    protected $lastQtyAvailableChange = null;

    /**
     * @var RecordRef $locationId
     */
    protected $locationId = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var float $onHandValueMli
     */
    protected $onHandValueMli = null;

    /**
     * @var float $reorderPoint
     */
    protected $reorderPoint = null;

    /**
     * @var float $preferredStockLevel
     */
    protected $preferredStockLevel = null;

    /**
     * @var float $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @param RecordRef $item
     */
    public function __construct($item)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastQtyAvailableChange()
    {
      if ($this->lastQtyAvailableChange == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastQtyAvailableChange);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastQtyAvailableChange
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setLastQtyAvailableChange(\DateTime $lastQtyAvailableChange = null)
    {
      if ($lastQtyAvailableChange == null) {
       $this->lastQtyAvailableChange = null;
      } else {
        $this->lastQtyAvailableChange = $lastQtyAvailableChange->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocationId()
    {
      return $this->locationId;
    }

    /**
     * @param RecordRef $locationId
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setLocationId($locationId)
    {
      $this->locationId = $locationId;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param float $quantityOnHand
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli()
    {
      return $this->onHandValueMli;
    }

    /**
     * @param float $onHandValueMli
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setOnHandValueMli($onHandValueMli)
    {
      $this->onHandValueMli = $onHandValueMli;
      return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint()
    {
      return $this->reorderPoint;
    }

    /**
     * @param float $reorderPoint
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setReorderPoint($reorderPoint)
    {
      $this->reorderPoint = $reorderPoint;
      return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel()
    {
      return $this->preferredStockLevel;
    }

    /**
     * @param float $preferredStockLevel
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setPreferredStockLevel($preferredStockLevel)
    {
      $this->preferredStockLevel = $preferredStockLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityOnOrder
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param float $quantityCommitted
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityBackOrdered
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\ItemAvailability
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

}
