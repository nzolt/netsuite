<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * RevRecScheduleSearch
 */
class RevRecScheduleSearch extends SearchRecord {

    /**
     * @access public
     * @var RevRecScheduleSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $appliedToTransactionJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

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

    static $paramtypesmap = array(
    	"basic" => "RevRecScheduleSearchBasic",
    	"appliedToTransactionJoin" => "TransactionSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param RevRecScheduleSearchBasic $basic
     * @return RevRecScheduleSearch
     */
    public function setBasic(RevRecScheduleSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return RevRecScheduleSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set appliedToTransactionJoin
     *
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return RevRecScheduleSearch
     */
    public function setAppliedToTransactionJoin(TransactionSearchBasic $appliedToTransactionJoin) {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * Get appliedToTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin() {
        return $this->appliedToTransactionJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return RevRecScheduleSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return RevRecScheduleSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return RevRecScheduleSearch
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
     * @return RevRecScheduleSearch
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