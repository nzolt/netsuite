<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

/**
 * ManufacturingRoutingRoutingStepList
 */
class ManufacturingRoutingRoutingStepList {

    /**
     * @access public
     * @var ManufacturingRoutingRoutingStep[]
     */
    public $manufacturingRoutingRoutingStep;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"manufacturingRoutingRoutingStep" => "ManufacturingRoutingRoutingStep[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return ManufacturingRoutingRoutingStepList
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