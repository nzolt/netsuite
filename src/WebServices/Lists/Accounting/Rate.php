<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * Rate
 */
class Rate {

    /**
     * @access public
     * @var float
     */
    protected $value;

    /**
     * @access public
     * @var RecordRef
     */
    public $priceLevel;

    static $paramtypesmap = array(
    	"value" => "float",
    	"priceLevel" => "RecordRef",
    );

    /**
     * Set value
     *
     * @param float $value
     * @return Rate
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue() {
        return $this->value;
    }

}