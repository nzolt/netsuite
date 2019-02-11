<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

/**
 * PaycheckJournalEmployeeTaxList
 */
class PaycheckJournalEmployeeTaxList {

    /**
     * @access public
     * @var PaycheckJournalEmployeeTax[]
     */
    public $paycheckJournalEmployeeTax;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"paycheckJournalEmployeeTax" => "PaycheckJournalEmployeeTax[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return PaycheckJournalEmployeeTaxList
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