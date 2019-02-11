<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ItemAvailability
 */
class ItemAvailability {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastQtyAvailableChange;

    /**
     * @access public
     * @var RecordRef
     */
    public $locationId;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $onHandValueMli;

    /**
     * @access public
     * @var float
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"lastQtyAvailableChange" => "dateTime",
    	"locationId" => "RecordRef",
    	"quantityOnHand" => "float",
    	"onHandValueMli" => "float",
    	"reorderPoint" => "float",
    	"preferredStockLevel" => "float",
    	"quantityOnOrder" => "float",
    	"quantityCommitted" => "float",
    	"quantityBackOrdered" => "float",
    	"quantityAvailable" => "float",
    );

    /**
     * Set lastQtyAvailableChange
     *
     * @param \DateTime $lastQtyAvailableChange
     * @return ItemAvailability
     */
    public function setLastQtyAvailableChange(\DateTime $lastQtyAvailableChange) {
        $this->lastQtyAvailableChange = $lastQtyAvailableChange->format('c');
        return $this;
    }

    /**
     * Get lastQtyAvailableChange
     *
     * @return \DateTime
     */
    public function getLastQtyAvailableChange() {
        return new \DateTime($this->lastQtyAvailableChange);
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return ItemAvailability
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
     * Set onHandValueMli
     *
     * @param float $onHandValueMli
     * @return ItemAvailability
     */
    public function setOnHandValueMli($onHandValueMli) {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * Get onHandValueMli
     *
     * @return float
     */
    public function getOnHandValueMli() {
        return $this->onHandValueMli;
    }


    /**
     * Set reorderPoint
     *
     * @param float $reorderPoint
     * @return ItemAvailability
     */
    public function setReorderPoint($reorderPoint) {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return float
     */
    public function getReorderPoint() {
        return $this->reorderPoint;
    }


    /**
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return ItemAvailability
     */
    public function setPreferredStockLevel($preferredStockLevel) {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * Get preferredStockLevel
     *
     * @return float
     */
    public function getPreferredStockLevel() {
        return $this->preferredStockLevel;
    }


    /**
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return ItemAvailability
     */
    public function setQuantityOnOrder($quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return float
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return ItemAvailability
     */
    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return float
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return ItemAvailability
     */
    public function setQuantityBackOrdered($quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return float
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return ItemAvailability
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }

}