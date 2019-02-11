<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\PresentationItemType;

/**
 * PresentationItem
 */
class PresentationItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var PresentationItemType
     */
    protected $itemType;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var float
     */
    protected $onlinePrice;

    /**
     * @access public
     * @var float
     */
    protected $basePrice;

    static $paramtypesmap = array(
    	"item" => "RecordRef",
    	"itemType" => "PresentationItemType",
    	"description" => "string",
    	"onlinePrice" => "float",
    	"basePrice" => "float",
    );

    /**
     * Set itemType
     *
     * @param PresentationItemType $itemType
     * @return PresentationItem
     */
    public function setItemType(PresentationItemType $itemType) {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * Get itemType
     *
     * @return PresentationItemType
     */
    public function getItemType() {
        return $this->itemType;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return PresentationItem
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
     * Set onlinePrice
     *
     * @param float $onlinePrice
     * @return PresentationItem
     */
    public function setOnlinePrice($onlinePrice) {
        $this->onlinePrice = $onlinePrice;
        return $this;
    }

    /**
     * Get onlinePrice
     *
     * @return float
     */
    public function getOnlinePrice() {
        return $this->onlinePrice;
    }


    /**
     * Set basePrice
     *
     * @param float $basePrice
     * @return PresentationItem
     */
    public function setBasePrice($basePrice) {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * Get basePrice
     *
     * @return float
     */
    public function getBasePrice() {
        return $this->basePrice;
    }

}