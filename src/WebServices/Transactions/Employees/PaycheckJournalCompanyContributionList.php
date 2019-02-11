<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

/**
 * PaycheckJournalCompanyContributionList
 */
class PaycheckJournalCompanyContributionList {

    /**
     * @access public
     * @var PaycheckJournalCompanyContribution[]
     */
    public $paycheckJournalCompanyContribution;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"paycheckJournalCompanyContribution" => "PaycheckJournalCompanyContribution[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return PaycheckJournalCompanyContributionList
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