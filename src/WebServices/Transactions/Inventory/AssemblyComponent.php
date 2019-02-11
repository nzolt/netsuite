<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;

/**
 * AssemblyComponent
 */
class AssemblyComponent {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $componentInventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $componentNumbers;

    /**
     * @access public
     * @var string
     */
    protected $binNumbers;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"quantity" => "float",
    	"quantityOnHand" => "float",
    	"componentInventoryDetail" => "InventoryDetail",
    	"componentNumbers" => "string",
    	"binNumbers" => "string",
    );

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return AssemblyComponent
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
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return AssemblyComponent
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
     * Set componentInventoryDetail
     *
     * @param InventoryDetail $componentInventoryDetail
     * @return AssemblyComponent
     */
    public function setComponentInventoryDetail(InventoryDetail $componentInventoryDetail) {
        $this->componentInventoryDetail = $componentInventoryDetail;
        return $this;
    }

    /**
     * Get componentInventoryDetail
     *
     * @return InventoryDetail
     */
    public function getComponentInventoryDetail() {
        return $this->componentInventoryDetail;
    }


    /**
     * Set componentNumbers
     *
     * @param string $componentNumbers
     * @return AssemblyComponent
     */
    public function setComponentNumbers($componentNumbers) {
        $this->componentNumbers = $componentNumbers;
        return $this;
    }

    /**
     * Get componentNumbers
     *
     * @return string
     */
    public function getComponentNumbers() {
        return $this->componentNumbers;
    }


    /**
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return AssemblyComponent
     */
    public function setBinNumbers($binNumbers) {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * Get binNumbers
     *
     * @return string
     */
    public function getBinNumbers() {
        return $this->binNumbers;
    }

}