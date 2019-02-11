<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;

/**
 * AccountingTransactionSearch
 */
class AccountingTransactionSearch extends SearchRecord {

    /**
     * @access public
     * @var AccountingTransactionSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $accountJoin;

    /**
     * @access public
     * @var RevRecScheduleSearchBasic
     */
    protected $revRecScheduleJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $transactionJoin;

    static $paramtypesmap = array(
    	"basic" => "AccountingTransactionSearchBasic",
    	"accountJoin" => "AccountSearchBasic",
    	"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    );

    /**
     * Set basic
     *
     * @param AccountingTransactionSearchBasic $basic
     * @return AccountingTransactionSearch
     */
    public function setBasic(AccountingTransactionSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return AccountingTransactionSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set accountJoin
     *
     * @param AccountSearchBasic $accountJoin
     * @return AccountingTransactionSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin) {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * Get accountJoin
     *
     * @return AccountSearchBasic
     */
    public function getAccountJoin() {
        return $this->accountJoin;
    }


    /**
     * Set revRecScheduleJoin
     *
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return AccountingTransactionSearch
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchBasic $revRecScheduleJoin) {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * Get revRecScheduleJoin
     *
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin() {
        return $this->revRecScheduleJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return AccountingTransactionSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }

}