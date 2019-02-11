<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CurrencyRateFilter
 */
class CurrencyRateFilter {

    /**
     * @access public
     * @var RecordRef
     */
    public $baseCurrency;

    /**
     * @access public
     * @var RecordRef
     */
    public $fromCurrency;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    static $paramtypesmap = array(
    	"baseCurrency" => "RecordRef",
    	"fromCurrency" => "RecordRef",
    	"effectiveDate" => "dateTime",
    );

    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return CurrencyRateFilter
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }

}