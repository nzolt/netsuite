<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ChargeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * ChargeSearchRow
 */
class ChargeSearchRow extends SearchRow {

    /**
     * @access public
     * @var ChargeSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $invoiceJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $salesOrderJoin;

    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ChargeSearchRowBasic",
    	"invoiceJoin" => "TransactionSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"salesOrderJoin" => "TransactionSearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ChargeSearchRowBasic $basic
     * @return ChargeSearchRow
     */
    public function setBasic(ChargeSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ChargeSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set invoiceJoin
     *
     * @param TransactionSearchRowBasic $invoiceJoin
     * @return ChargeSearchRow
     */
    public function setInvoiceJoin(TransactionSearchRowBasic $invoiceJoin) {
        $this->invoiceJoin = $invoiceJoin;
        return $this;
    }

    /**
     * Get invoiceJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getInvoiceJoin() {
        return $this->invoiceJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return ChargeSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set salesOrderJoin
     *
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return ChargeSearchRow
     */
    public function setSalesOrderJoin(TransactionSearchRowBasic $salesOrderJoin) {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * Get salesOrderJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin() {
        return $this->salesOrderJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return ChargeSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ChargeSearchRow
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


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ChargeSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }

}