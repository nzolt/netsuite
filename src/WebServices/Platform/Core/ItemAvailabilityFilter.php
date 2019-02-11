<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ItemAvailabilityFilter
 */
class ItemAvailabilityFilter {

    /**
     * @access public
     * @var RecordRefList
     */
    protected $item;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastQtyAvailableChange;

    static $paramtypesmap = array(
    	"item" => "RecordRefList",
    	"lastQtyAvailableChange" => "dateTime",
    );

    /**
     * Set item
     *
     * @param RecordRefList $item
     * @return ItemAvailabilityFilter
     */
    public function setItem(RecordRefList $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return RecordRefList
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set lastQtyAvailableChange
     *
     * @param \DateTime $lastQtyAvailableChange
     * @return ItemAvailabilityFilter
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

}