<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;

/**
 * ManufacturingOperationTaskSearchRow
 */
class ManufacturingOperationTaskSearchRow extends SearchRow {

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected $predecessorJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $workOrderJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ManufacturingOperationTaskSearchRowBasic",
    	"predecessorJoin" => "ManufacturingOperationTaskSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"workOrderJoin" => "TransactionSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ManufacturingOperationTaskSearchRowBasic $basic
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setBasic(ManufacturingOperationTaskSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set predecessorJoin
     *
     * @param ManufacturingOperationTaskSearchRowBasic $predecessorJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setPredecessorJoin(ManufacturingOperationTaskSearchRowBasic $predecessorJoin) {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * Get predecessorJoin
     *
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getPredecessorJoin() {
        return $this->predecessorJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ManufacturingOperationTaskSearchRow
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


    /**
     * Set workOrderJoin
     *
     * @param TransactionSearchRowBasic $workOrderJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setWorkOrderJoin(TransactionSearchRowBasic $workOrderJoin) {
        $this->workOrderJoin = $workOrderJoin;
        return $this;
    }

    /**
     * Get workOrderJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getWorkOrderJoin() {
        return $this->workOrderJoin;
    }

}