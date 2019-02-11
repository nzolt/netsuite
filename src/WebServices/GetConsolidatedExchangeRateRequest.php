<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\ConsolidatedExchangeRateFilter;

/**
 * GetConsolidatedExchangeRateRequest
 */
class GetConsolidatedExchangeRateRequest {

    /**
     * @access public
     * @var ConsolidatedExchangeRateFilter
     */
    protected $consolidatedExchangeRateFilter;

    static $paramtypesmap = array(
    	"consolidatedExchangeRateFilter" => "ConsolidatedExchangeRateFilter",
    );

    /**
     * Set consolidatedExchangeRateFilter
     *
     * @param ConsolidatedExchangeRateFilter $consolidatedExchangeRateFilter
     * @return GetConsolidatedExchangeRateRequest
     */
    public function setConsolidatedExchangeRateFilter(ConsolidatedExchangeRateFilter $consolidatedExchangeRateFilter) {
        $this->consolidatedExchangeRateFilter = $consolidatedExchangeRateFilter;
        return $this;
    }

    /**
     * Get consolidatedExchangeRateFilter
     *
     * @return ConsolidatedExchangeRateFilter
     */
    public function getConsolidatedExchangeRateFilter() {
        return $this->consolidatedExchangeRateFilter;
    }

}