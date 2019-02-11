<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeEarning
 */
class EmployeeEarning {

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var string
     */
    protected $payRate;

    /**
     * @access public
     * @var boolean
     */
    protected $primaryEarning;

    /**
     * @access public
     * @var float
     */
    protected $defaultHours;

    /**
     * @access public
     * @var boolean
     */
    protected $inactive;

    /**
     * @access public
     * @var boolean
     */
    protected $defaultEarning;

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
    	"payRate" => "string",
    	"primaryEarning" => "boolean",
    	"defaultHours" => "float",
    	"inactive" => "boolean",
    	"defaultEarning" => "boolean",
    	"effectiveDate" => "dateTime",
    	"expirationDate" => "dateTime",
    );

    /**
     * Set payRate
     *
     * @param string $payRate
     * @return EmployeeEarning
     */
    public function setPayRate($payRate) {
        $this->payRate = $payRate;
        return $this;
    }

    /**
     * Get payRate
     *
     * @return string
     */
    public function getPayRate() {
        return $this->payRate;
    }


    /**
     * Set primaryEarning
     *
     * @param boolean $primaryEarning
     * @return EmployeeEarning
     */
    public function setPrimaryEarning($primaryEarning) {
        $this->primaryEarning = $primaryEarning;
        return $this;
    }

    /**
     * Get primaryEarning
     *
     * @return boolean
     */
    public function getPrimaryEarning() {
        return $this->primaryEarning;
    }


    /**
     * Set defaultHours
     *
     * @param float $defaultHours
     * @return EmployeeEarning
     */
    public function setDefaultHours($defaultHours) {
        $this->defaultHours = $defaultHours;
        return $this;
    }

    /**
     * Get defaultHours
     *
     * @return float
     */
    public function getDefaultHours() {
        return $this->defaultHours;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return EmployeeEarning
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
     * Set defaultEarning
     *
     * @param boolean $defaultEarning
     * @return EmployeeEarning
     */
    public function setDefaultEarning($defaultEarning) {
        $this->defaultEarning = $defaultEarning;
        return $this;
    }

    /**
     * Get defaultEarning
     *
     * @return boolean
     */
    public function getDefaultEarning() {
        return $this->defaultEarning;
    }


    /**
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return EmployeeEarning
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
     * @return EmployeeEarning
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