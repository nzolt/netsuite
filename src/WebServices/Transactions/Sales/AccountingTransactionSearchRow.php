<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;

/**
 * AccountingTransactionSearchRow
 */
class AccountingTransactionSearchRow extends SearchRow {

    /**
     * @access public
     * @var AccountingTransactionSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $accountJoin;

    /**
     * @access public
     * @var RevRecScheduleSearchRowBasic
     */
    protected $revRecScheduleJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $transactionJoin;

    static $paramtypesmap = array(
    	"basic" => "AccountingTransactionSearchRowBasic",
    	"accountJoin" => "AccountSearchRowBasic",
    	"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param AccountingTransactionSearchRowBasic $basic
     * @return AccountingTransactionSearchRow
     */
    public function setBasic(AccountingTransactionSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AccountingTransactionSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set accountJoin
     *
     * @param AccountSearchRowBasic $accountJoin
     * @return AccountingTransactionSearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin) {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * Get accountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin() {
        return $this->accountJoin;
    }


    /**
     * Set revRecScheduleJoin
     *
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return AccountingTransactionSearchRow
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchRowBasic $revRecScheduleJoin) {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * Get revRecScheduleJoin
     *
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin() {
        return $this->revRecScheduleJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return AccountingTransactionSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }

}