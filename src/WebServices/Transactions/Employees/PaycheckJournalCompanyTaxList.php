<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

/**
 * PaycheckJournalCompanyTaxList
 */
class PaycheckJournalCompanyTaxList {

    /**
     * @access public
     * @var PaycheckJournalCompanyTax[]
     */
    public $paycheckJournalCompanyTax;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"paycheckJournalCompanyTax" => "PaycheckJournalCompanyTax[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return PaycheckJournalCompanyTaxList
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