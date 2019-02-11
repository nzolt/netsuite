<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * SubsidiaryAccountingBookDetailList
 */
class SubsidiaryAccountingBookDetailList {

    /**
     * @access public
     * @var SubsidiaryAccountingBookDetail[]
     */
    public $subsidiaryAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"subsidiaryAccountingBookDetail" => "SubsidiaryAccountingBookDetail[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return SubsidiaryAccountingBookDetailList
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