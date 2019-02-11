<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

/**
 * ManufacturingRoutingRoutingComponent
 */
class ManufacturingRoutingRoutingComponent {

    /**
     * @access public
     * @var string
     */
    protected $itemName;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var float
     */
    protected $yield;

    /**
     * @access public
     * @var float
     */
    protected $bomQuantity;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $units;

    /**
     * @access public
     * @var RecordRef
     */
    public $operationDisplayText;

    /**
     * @access public
     * @var integer
     */
    protected $operationSequenceNumber;

    /**
     * @access public
     * @var string
     */
    protected $component;

    /**
     * @access public
     * @var string
     */
    protected $item;

    static $paramtypesmap = array(
    	"itemName" => "string",
    	"description" => "string",
    	"yield" => "float",
    	"bomQuantity" => "float",
    	"quantity" => "float",
    	"units" => "string",
    	"operationDisplayText" => "RecordRef",
    	"operationSequenceNumber" => "integer",
    	"component" => "string",
    	"item" => "string",
    );

    /**
     * Set itemName
     *
     * @param string $itemName
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setItemName($itemName) {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * Get itemName
     *
     * @return string
     */
    public function getItemName() {
        return $this->itemName;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set yield
     *
     * @param float $yield
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setYield($yield) {
        $this->yield = $yield;
        return $this;
    }

    /**
     * Get yield
     *
     * @return float
     */
    public function getYield() {
        return $this->yield;
    }


    /**
     * Set bomQuantity
     *
     * @param float $bomQuantity
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setBomQuantity($bomQuantity) {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * Get bomQuantity
     *
     * @return float
     */
    public function getBomQuantity() {
        return $this->bomQuantity;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ManufacturingRoutingRoutingComponent
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
     * Set units
     *
     * @param string $units
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setUnits($units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set operationSequenceNumber
     *
     * @param integer $operationSequenceNumber
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setOperationSequenceNumber($operationSequenceNumber) {
        $this->operationSequenceNumber = $operationSequenceNumber;
        return $this;
    }

    /**
     * Get operationSequenceNumber
     *
     * @return integer
     */
    public function getOperationSequenceNumber() {
        return $this->operationSequenceNumber;
    }


    /**
     * Set component
     *
     * @param string $component
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setComponent($component) {
        $this->component = $component;
        return $this;
    }

    /**
     * Get component
     *
     * @return string
     */
    public function getComponent() {
        return $this->component;
    }


    /**
     * Set item
     *
     * @param string $item
     * @return ManufacturingRoutingRoutingComponent
     */
    public function setItem($item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return string
     */
    public function getItem() {
        return $this->item;
    }

}