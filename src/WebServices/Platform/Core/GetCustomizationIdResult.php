<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetCustomizationIdResult
 */
class GetCustomizationIdResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var integer
     */
    protected $totalRecords;

    /**
     * @access public
     * @var CustomizationRefList
     */
    protected $customizationRefList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"totalRecords" => "integer",
    	"customizationRefList" => "CustomizationRefList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetCustomizationIdResult
     */
    public function setStatus(Status $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return Status
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set totalRecords
     *
     * @param integer $totalRecords
     * @return GetCustomizationIdResult
     */
    public function setTotalRecords($totalRecords) {
        $this->totalRecords = $totalRecords;
        return $this;
    }

    /**
     * Get totalRecords
     *
     * @return integer
     */
    public function getTotalRecords() {
        return $this->totalRecords;
    }


    /**
     * Set customizationRefList
     *
     * @param CustomizationRefList $customizationRefList
     * @return GetCustomizationIdResult
     */
    public function setCustomizationRefList(CustomizationRefList $customizationRefList) {
        $this->customizationRefList = $customizationRefList;
        return $this;
    }

    /**
     * Get customizationRefList
     *
     * @return CustomizationRefList
     */
    public function getCustomizationRefList() {
        return $this->customizationRefList;
    }

}