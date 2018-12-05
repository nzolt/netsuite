<?php

namespace Nzolt\NetSuite;

class InventoryAssignment
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var RecordRef $issueInventoryNumber
     */
    protected $issueInventoryNumber = null;

    /**
     * @var string $receiptInventoryNumber
     */
    protected $receiptInventoryNumber = null;

    /**
     * @var RecordRef $binNumber
     */
    protected $binNumber = null;

    /**
     * @var RecordRef $toBinNumber
     */
    protected $toBinNumber = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    
    public function __construct()
    {
    
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
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueInventoryNumber()
    {
      return $this->issueInventoryNumber;
    }

    /**
     * @param RecordRef $issueInventoryNumber
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setIssueInventoryNumber($issueInventoryNumber)
    {
      $this->issueInventoryNumber = $issueInventoryNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceiptInventoryNumber()
    {
      return $this->receiptInventoryNumber;
    }

    /**
     * @param string $receiptInventoryNumber
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setReceiptInventoryNumber($receiptInventoryNumber)
    {
      $this->receiptInventoryNumber = $receiptInventoryNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param RecordRef $binNumber
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getToBinNumber()
    {
      return $this->toBinNumber;
    }

    /**
     * @param RecordRef $toBinNumber
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setToBinNumber($toBinNumber)
    {
      $this->toBinNumber = $toBinNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \Nzolt\NetSuite\InventoryAssignment
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
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\InventoryAssignment
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

}
