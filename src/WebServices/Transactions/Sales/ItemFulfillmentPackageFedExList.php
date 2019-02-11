<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * ItemFulfillmentPackageFedExList
 */
class ItemFulfillmentPackageFedExList {

    /**
     * @access public
     * @var ItemFulfillmentPackageFedEx[]
     */
    public $packageFedEx;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"packageFedEx" => "ItemFulfillmentPackageFedEx[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return ItemFulfillmentPackageFedExList
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