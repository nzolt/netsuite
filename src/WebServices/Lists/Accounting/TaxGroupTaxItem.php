<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * TaxGroupTaxItem
 */
class TaxGroupTaxItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $taxName;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $basis;

    /**
     * @access public
     * @var string
     */
    protected $taxType;

    static $paramtypesmap = array(
    	"taxName" => "RecordRef",
    	"rate" => "float",
    	"basis" => "float",
    	"taxType" => "string",
    );

    /**
     * Set rate
     *
     * @param float $rate
     * @return TaxGroupTaxItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set basis
     *
     * @param float $basis
     * @return TaxGroupTaxItem
     */
    public function setBasis($basis) {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Get basis
     *
     * @return float
     */
    public function getBasis() {
        return $this->basis;
    }


    /**
     * Set taxType
     *
     * @param string $taxType
     * @return TaxGroupTaxItem
     */
    public function setTaxType($taxType) {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * Get taxType
     *
     * @return string
     */
    public function getTaxType() {
        return $this->taxType;
    }

}