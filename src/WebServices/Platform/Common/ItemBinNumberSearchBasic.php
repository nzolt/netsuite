<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;

/**
 * ItemBinNumberSearchBasic
 */
class ItemBinNumberSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $binNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityOnHand;

    static $paramtypesmap = array(
    	"binNumber" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"quantityAvailable" => "SearchDoubleField",
    	"quantityOnHand" => "SearchDoubleField",
    );

    /**
     * Set binNumber
     *
     * @param SearchMultiSelectField $binNumber
     * @return ItemBinNumberSearchBasic
     */
    public function setBinNumber(SearchMultiSelectField $binNumber) {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * Get binNumber
     *
     * @return SearchMultiSelectField
     */
    public function getBinNumber() {
        return $this->binNumber;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ItemBinNumberSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set quantityAvailable
     *
     * @param SearchDoubleField $quantityAvailable
     * @return ItemBinNumberSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return SearchDoubleField
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityOnHand
     *
     * @param SearchDoubleField $quantityOnHand
     * @return ItemBinNumberSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return SearchDoubleField
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }

}