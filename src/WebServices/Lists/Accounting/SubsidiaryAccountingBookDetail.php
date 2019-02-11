<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AccountingBookStatus;

/**
 * SubsidiaryAccountingBookDetail
 */
class SubsidiaryAccountingBookDetail {

    /**
     * @access public
     * @var RecordRef
     */
    public $accountingBook;

    /**
     * @access public
     * @var RecordRef
     */
    public $currency;

    /**
     * @access public
     * @var AccountingBookStatus
     */
    protected $bookStatus;

    static $paramtypesmap = array(
    	"accountingBook" => "RecordRef",
    	"currency" => "RecordRef",
    	"bookStatus" => "AccountingBookStatus",
    );

    /**
     * Set bookStatus
     *
     * @param AccountingBookStatus $bookStatus
     * @return SubsidiaryAccountingBookDetail
     */
    public function setBookStatus(AccountingBookStatus $bookStatus) {
        $this->bookStatus = $bookStatus;
        return $this;
    }

    /**
     * Get bookStatus
     *
     * @return AccountingBookStatus
     */
    public function getBookStatus() {
        return $this->bookStatus;
    }

}