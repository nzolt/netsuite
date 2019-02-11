<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

/**
 * InventoryAssignment
 */
class InventoryAssignment {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueInventoryNumber;

    /**
     * @access public
     * @var string
     */
    protected $receiptInventoryNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $binNumber;

    /**
     * @access public
     * @var RecordRef
     */
    public $toBinNumber;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    /**
     * @access public
     * @var boolean
     */
    protected $quantityAvailable;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"issueInventoryNumber" => "RecordRef",
    	"receiptInventoryNumber" => "string",
    	"binNumber" => "RecordRef",
    	"toBinNumber" => "RecordRef",
    	"quantity" => "float",
    	"expirationDate" => "dateTime",
    	"quantityAvailable" => "boolean",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return InventoryAssignment
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set receiptInventoryNumber
     *
     * @param string $receiptInventoryNumber
     * @return InventoryAssignment
     */
    public function setReceiptInventoryNumber($receiptInventoryNumber) {
        $this->receiptInventoryNumber = $receiptInventoryNumber;
        return $this;
    }

    /**
     * Get receiptInventoryNumber
     *
     * @return string
     */
    public function getReceiptInventoryNumber() {
        return $this->receiptInventoryNumber;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return InventoryAssignment
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return InventoryAssignment
     */
    public function setExpirationDate(\DateTime $expirationDate) {
        $this->expirationDate = $expirationDate->format('c');
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return new \DateTime($this->expirationDate);
    }


    /**
     * Set quantityAvailable
     *
     * @param boolean $quantityAvailable
     * @return InventoryAssignment
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return boolean
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }

}