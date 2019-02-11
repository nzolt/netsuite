<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetConsolidatedExchangeRateResult
 */
class GetConsolidatedExchangeRateResult {

    /**
     * @access public
     * @var Status
     */
    protected $status;

    /**
     * @access public
     * @var ConsolidatedExchangeRateList
     */
    protected $consolidatedExchangeRateList;

    static $paramtypesmap = array(
    	"status" => "Status",
    	"consolidatedExchangeRateList" => "ConsolidatedExchangeRateList",
    );

    /**
     * Set status
     *
     * @param Status $status
     * @return GetConsolidatedExchangeRateResult
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
     * Set consolidatedExchangeRateList
     *
     * @param ConsolidatedExchangeRateList $consolidatedExchangeRateList
     * @return GetConsolidatedExchangeRateResult
     */
    public function setConsolidatedExchangeRateList(ConsolidatedExchangeRateList $consolidatedExchangeRateList) {
        $this->consolidatedExchangeRateList = $consolidatedExchangeRateList;
        return $this;
    }

    /**
     * Get consolidatedExchangeRateList
     *
     * @return ConsolidatedExchangeRateList
     */
    public function getConsolidatedExchangeRateList() {
        return $this->consolidatedExchangeRateList;
    }

}