<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Purchases;

/**
 * PurchaseRequisitionAccountingBookDetailList
 */
class PurchaseRequisitionAccountingBookDetailList {

    /**
     * @access public
     * @var PurchaseRequisitionAccountingBookDetail[]
     */
    public $purchaseRequisitionAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"purchaseRequisitionAccountingBookDetail" => "PurchaseRequisitionAccountingBookDetail[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return PurchaseRequisitionAccountingBookDetailList
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