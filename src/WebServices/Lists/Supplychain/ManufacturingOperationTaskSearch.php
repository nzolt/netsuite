<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;

/**
 * ManufacturingOperationTaskSearch
 */
class ManufacturingOperationTaskSearch extends SearchRecord {

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected $predecessorJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $workOrderJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ManufacturingOperationTaskSearchBasic",
    	"predecessorJoin" => "ManufacturingOperationTaskSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"workOrderJoin" => "TransactionSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ManufacturingOperationTaskSearchBasic $basic
     * @return ManufacturingOperationTaskSearch
     */
    public function setBasic(ManufacturingOperationTaskSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set predecessorJoin
     *
     * @param ManufacturingOperationTaskSearchBasic $predecessorJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setPredecessorJoin(ManufacturingOperationTaskSearchBasic $predecessorJoin) {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * Get predecessorJoin
     *
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getPredecessorJoin() {
        return $this->predecessorJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ManufacturingOperationTaskSearch
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


    /**
     * Set workOrderJoin
     *
     * @param TransactionSearchBasic $workOrderJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setWorkOrderJoin(TransactionSearchBasic $workOrderJoin) {
        $this->workOrderJoin = $workOrderJoin;
        return $this;
    }

    /**
     * Get workOrderJoin
     *
     * @return TransactionSearchBasic
     */
    public function getWorkOrderJoin() {
        return $this->workOrderJoin;
    }

}