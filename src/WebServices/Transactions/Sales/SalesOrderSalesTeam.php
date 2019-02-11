<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

/**
 * SalesOrderSalesTeam
 */
class SalesOrderSalesTeam {

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesRole;

    /**
     * @access public
     * @var boolean
     */
    protected $isPrimary;

    /**
     * @access public
     * @var float
     */
    protected $contribution;

    static $paramtypesmap = array(
    	"employee" => "RecordRef",
    	"salesRole" => "RecordRef",
    	"isPrimary" => "boolean",
    	"contribution" => "float",
    );

    /**
     * Set isPrimary
     *
     * @param boolean $isPrimary
     * @return SalesOrderSalesTeam
     */
    public function setIsPrimary($isPrimary) {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Get isPrimary
     *
     * @return boolean
     */
    public function getIsPrimary() {
        return $this->isPrimary;
    }


    /**
     * Set contribution
     *
     * @param float $contribution
     * @return SalesOrderSalesTeam
     */
    public function setContribution($contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return float
     */
    public function getContribution() {
        return $this->contribution;
    }

}