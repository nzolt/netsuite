<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * LotNumberedInventoryItemNumbers
 */
class LotNumberedInventoryItemNumbers {

    /**
     * @access public
     * @var RecordRef
     */
    public $serialNumber;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    static $paramtypesmap = array(
    	"serialNumber" => "RecordRef",
    	"quantityOnHand" => "float",
    	"expirationDate" => "dateTime",
    );

    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return LotNumberedInventoryItemNumbers
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return LotNumberedInventoryItemNumbers
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

}