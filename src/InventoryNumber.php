<?php

namespace Nzolt\NetSuite;

class InventoryNumber extends Record
{

    /**
     * @var string $inventoryNumber
     */
    protected $inventoryNumber = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $units
     */
    protected $units = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var InventoryNumberLocationsList $locationsList
     */
    protected $locationsList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

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
    public function getInventoryNumber()
    {
      return $this->inventoryNumber;
    }

    /**
     * @param string $inventoryNumber
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setInventoryNumber($inventoryNumber)
    {
      $this->inventoryNumber = $inventoryNumber;
      return $this;
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
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param string $units
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setUnits($units)
    {
      $this->units = $units;
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
     * @return \Nzolt\NetSuite\InventoryNumber
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
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return InventoryNumberLocationsList
     */
    public function getLocationsList()
    {
      return $this->locationsList;
    }

    /**
     * @param InventoryNumberLocationsList $locationsList
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setLocationsList($locationsList)
    {
      $this->locationsList = $locationsList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
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
     * @return \Nzolt\NetSuite\InventoryNumber
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
     * @return \Nzolt\NetSuite\InventoryNumber
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
