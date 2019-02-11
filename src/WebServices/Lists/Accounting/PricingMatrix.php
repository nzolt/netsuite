<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * PricingMatrix
 */
class PricingMatrix {

    /**
     * @access public
     * @var Pricing[]
     */
    public $pricing;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"pricing" => "Pricing[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return PricingMatrix
     */
    public function setReplaceAll($replaceAll) {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * Get replaceAll
     *
     * @return boolean
     */
    public function getReplaceAll() {
        return $this->replaceAll;
    }

}