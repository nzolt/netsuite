<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * CashSaleShipGroupList
 */
class CashSaleShipGroupList {

    /**
     * @access public
     * @var TransactionShipGroup[]
     */
    public $shipGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"shipGroup" => "TransactionShipGroup[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return CashSaleShipGroupList
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