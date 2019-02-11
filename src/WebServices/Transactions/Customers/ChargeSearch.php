<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ChargeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * ChargeSearch
 */
class ChargeSearch extends SearchRecord {

    /**
     * @access public
     * @var ChargeSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $invoiceJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $salesOrderJoin;

    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ChargeSearchBasic",
    	"invoiceJoin" => "TransactionSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"salesOrderJoin" => "TransactionSearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ChargeSearchBasic $basic
     * @return ChargeSearch
     */
    public function setBasic(ChargeSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ChargeSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set invoiceJoin
     *
     * @param TransactionSearchBasic $invoiceJoin
     * @return ChargeSearch
     */
    public function setInvoiceJoin(TransactionSearchBasic $invoiceJoin) {
        $this->invoiceJoin = $invoiceJoin;
        return $this;
    }

    /**
     * Get invoiceJoin
     *
     * @return TransactionSearchBasic
     */
    public function getInvoiceJoin() {
        return $this->invoiceJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return ChargeSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set salesOrderJoin
     *
     * @param TransactionSearchBasic $salesOrderJoin
     * @return ChargeSearch
     */
    public function setSalesOrderJoin(TransactionSearchBasic $salesOrderJoin) {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * Get salesOrderJoin
     *
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin() {
        return $this->salesOrderJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return ChargeSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return ChargeSearch
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


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ChargeSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }

}