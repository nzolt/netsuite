<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeDeduction
 */
class EmployeeDeduction {

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var float
     */
    protected $limit;

    /**
     * @access public
     * @var boolean
     */
    protected $inactive;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $expirationDate;

    static $paramtypesmap = array(
    	"payrollItem" => "RecordRef",
    	"rate" => "string",
    	"limit" => "float",
    	"inactive" => "boolean",
    	"effectiveDate" => "dateTime",
    	"expirationDate" => "dateTime",
    );

    /**
     * Set rate
     *
     * @param string $rate
     * @return EmployeeDeduction
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set limit
     *
     * @param float $limit
     * @return EmployeeDeduction
     */
    public function setLimit($limit) {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Get limit
     *
     * @return float
     */
    public function getLimit() {
        return $this->limit;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return EmployeeDeduction
     */
    public function setInactive($inactive) {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * Get inactive
     *
     * @return boolean
     */
    public function getInactive() {
        return $this->inactive;
    }


    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return EmployeeDeduction
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }


    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     * @return EmployeeDeduction
     */
    public function setExpirationDate(\DateTime $expirationDate) {
        $this->expirationDate = $expirationDate->format('c');
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate() {
        return new \DateTime($this->expirationDate);
    }

}