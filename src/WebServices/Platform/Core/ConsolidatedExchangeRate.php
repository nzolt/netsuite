<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ConsolidatedExchangeRate
 */
class ConsolidatedExchangeRate {

    /**
     * @access public
     * @var RecordRef
     */
    public $period;

    /**
     * @access public
     * @var RecordRef
     */
    public $fromSubsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $toSubsidiary;

    /**
     * @access public
     * @var float
     */
    protected $currentRate;

    /**
     * @access public
     * @var float
     */
    protected $averageRate;

    /**
     * @access public
     * @var float
     */
    protected $historicalRate;

    static $paramtypesmap = array(
    	"period" => "RecordRef",
    	"fromSubsidiary" => "RecordRef",
    	"toSubsidiary" => "RecordRef",
    	"currentRate" => "float",
    	"averageRate" => "float",
    	"historicalRate" => "float",
    );

    /**
     * Set currentRate
     *
     * @param float $currentRate
     * @return ConsolidatedExchangeRate
     */
    public function setCurrentRate($currentRate) {
        $this->currentRate = $currentRate;
        return $this;
    }

    /**
     * Get currentRate
     *
     * @return float
     */
    public function getCurrentRate() {
        return $this->currentRate;
    }


    /**
     * Set averageRate
     *
     * @param float $averageRate
     * @return ConsolidatedExchangeRate
     */
    public function setAverageRate($averageRate) {
        $this->averageRate = $averageRate;
        return $this;
    }

    /**
     * Get averageRate
     *
     * @return float
     */
    public function getAverageRate() {
        return $this->averageRate;
    }


    /**
     * Set historicalRate
     *
     * @param float $historicalRate
     * @return ConsolidatedExchangeRate
     */
    public function setHistoricalRate($historicalRate) {
        $this->historicalRate = $historicalRate;
        return $this;
    }

    /**
     * Get historicalRate
     *
     * @return float
     */
    public function getHistoricalRate() {
        return $this->historicalRate;
    }

}