<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ItemAccountingBookDetail
 */
class ItemAccountingBookDetail {

    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $sameAsPrimaryRevRec;

    /**
     * @access public
     * @var RecordRef
     */
    public $amortizationTemplate;

    /**
     * @access public
     * @var boolean
     */
    protected $sameAsPrimaryAmortization;

    static $paramtypesmap = array(
    	"accountingBook" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"sameAsPrimaryRevRec" => "boolean",
    	"amortizationTemplate" => "RecordRef",
    	"sameAsPrimaryAmortization" => "boolean",
    );

    /**
     * Set sameAsPrimaryRevRec
     *
     * @param boolean $sameAsPrimaryRevRec
     * @return ItemAccountingBookDetail
     */
    public function setSameAsPrimaryRevRec($sameAsPrimaryRevRec) {
        $this->sameAsPrimaryRevRec = $sameAsPrimaryRevRec;
        return $this;
    }

    /**
     * Get sameAsPrimaryRevRec
     *
     * @return boolean
     */
    public function getSameAsPrimaryRevRec() {
        return $this->sameAsPrimaryRevRec;
    }


    /**
     * Set sameAsPrimaryAmortization
     *
     * @param boolean $sameAsPrimaryAmortization
     * @return ItemAccountingBookDetail
     */
    public function setSameAsPrimaryAmortization($sameAsPrimaryAmortization) {
        $this->sameAsPrimaryAmortization = $sameAsPrimaryAmortization;
        return $this;
    }

    /**
     * Get sameAsPrimaryAmortization
     *
     * @return boolean
     */
    public function getSameAsPrimaryAmortization() {
        return $this->sameAsPrimaryAmortization;
    }

}