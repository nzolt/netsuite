<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

/**
 * ManufacturingCostDetail
 */
class ManufacturingCostDetail {

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var float
     */
    protected $fixedRate;

    /**
     * @access public
     * @var float
     */
    protected $runRate;

    static $paramtypesmap = array(
    	"costCategory" => "RecordRef",
    	"item" => "RecordRef",
    	"fixedRate" => "float",
    	"runRate" => "float",
    );

    /**
     * Set fixedRate
     *
     * @param float $fixedRate
     * @return ManufacturingCostDetail
     */
    public function setFixedRate($fixedRate) {
        $this->fixedRate = $fixedRate;
        return $this;
    }

    /**
     * Get fixedRate
     *
     * @return float
     */
    public function getFixedRate() {
        return $this->fixedRate;
    }


    /**
     * Set runRate
     *
     * @param float $runRate
     * @return ManufacturingCostDetail
     */
    public function setRunRate($runRate) {
        $this->runRate = $runRate;
        return $this;
    }

    /**
     * Get runRate
     *
     * @return float
     */
    public function getRunRate() {
        return $this->runRate;
    }

}