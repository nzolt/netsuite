<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

/**
 * ManufacturingOperationTaskPredecessorList
 */
class ManufacturingOperationTaskPredecessorList {

    /**
     * @access public
     * @var ManufacturingOperationTaskPredecessor[]
     */
    public $manufacturingOperationTaskPredecessor;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"manufacturingOperationTaskPredecessor" => "ManufacturingOperationTaskPredecessor[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return ManufacturingOperationTaskPredecessorList
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