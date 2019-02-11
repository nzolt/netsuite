<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * TaxTypeNexusesTax
 */
class TaxTypeNexusesTax {

    /**
     * @access public
     * @var RecordRef
     */
    public $nexus;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $saleTaxAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchTaxAcct;

    static $paramtypesmap = array(
    	"nexus" => "RecordRef",
    	"description" => "string",
    	"saleTaxAcct" => "RecordRef",
    	"purchTaxAcct" => "RecordRef",
    );

    /**
     * Set description
     *
     * @param string $description
     * @return TaxTypeNexusesTax
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

}