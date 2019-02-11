<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeAccruedTimeAccrualMethod;

/**
 * EmployeeAccruedTime
 */
class EmployeeAccruedTime {

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var float
     */
    protected $accruedHours;

    /**
     * @access public
     * @var float
     */
    protected $accrualRate;

    /**
     * @access public
     * @var float
     */
    protected $monetaryRate;

    /**
     * @access public
     * @var boolean
     */
    protected $resetAccruedHoursAtYearEnd;

    /**
     * @access public
     * @var EmployeeAccruedTimeAccrualMethod
     */
    protected $accrualMethod;

    /**
     * @access public
     * @var float
     */
    protected $maximumAccruedHours;

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
    	"accruedHours" => "float",
    	"accrualRate" => "float",
    	"monetaryRate" => "float",
    	"resetAccruedHoursAtYearEnd" => "boolean",
    	"accrualMethod" => "EmployeeAccruedTimeAccrualMethod",
    	"maximumAccruedHours" => "float",
    	"inactive" => "boolean",
    	"effectiveDate" => "dateTime",
    	"expirationDate" => "dateTime",
    );

    /**
     * Set accruedHours
     *
     * @param float $accruedHours
     * @return EmployeeAccruedTime
     */
    public function setAccruedHours($accruedHours) {
        $this->accruedHours = $accruedHours;
        return $this;
    }

    /**
     * Get accruedHours
     *
     * @return float
     */
    public function getAccruedHours() {
        return $this->accruedHours;
    }


    /**
     * Set accrualRate
     *
     * @param float $accrualRate
     * @return EmployeeAccruedTime
     */
    public function setAccrualRate($accrualRate) {
        $this->accrualRate = $accrualRate;
        return $this;
    }

    /**
     * Get accrualRate
     *
     * @return float
     */
    public function getAccrualRate() {
        return $this->accrualRate;
    }


    /**
     * Set monetaryRate
     *
     * @param float $monetaryRate
     * @return EmployeeAccruedTime
     */
    public function setMonetaryRate($monetaryRate) {
        $this->monetaryRate = $monetaryRate;
        return $this;
    }

    /**
     * Get monetaryRate
     *
     * @return float
     */
    public function getMonetaryRate() {
        return $this->monetaryRate;
    }


    /**
     * Set resetAccruedHoursAtYearEnd
     *
     * @param boolean $resetAccruedHoursAtYearEnd
     * @return EmployeeAccruedTime
     */
    public function setResetAccruedHoursAtYearEnd($resetAccruedHoursAtYearEnd) {
        $this->resetAccruedHoursAtYearEnd = $resetAccruedHoursAtYearEnd;
        return $this;
    }

    /**
     * Get resetAccruedHoursAtYearEnd
     *
     * @return boolean
     */
    public function getResetAccruedHoursAtYearEnd() {
        return $this->resetAccruedHoursAtYearEnd;
    }


    /**
     * Set accrualMethod
     *
     * @param EmployeeAccruedTimeAccrualMethod $accrualMethod
     * @return EmployeeAccruedTime
     */
    public function setAccrualMethod(EmployeeAccruedTimeAccrualMethod $accrualMethod) {
        $this->accrualMethod = $accrualMethod;
        return $this;
    }

    /**
     * Get accrualMethod
     *
     * @return EmployeeAccruedTimeAccrualMethod
     */
    public function getAccrualMethod() {
        return $this->accrualMethod;
    }


    /**
     * Set maximumAccruedHours
     *
     * @param float $maximumAccruedHours
     * @return EmployeeAccruedTime
     */
    public function setMaximumAccruedHours($maximumAccruedHours) {
        $this->maximumAccruedHours = $maximumAccruedHours;
        return $this;
    }

    /**
     * Get maximumAccruedHours
     *
     * @return float
     */
    public function getMaximumAccruedHours() {
        return $this->maximumAccruedHours;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return EmployeeAccruedTime
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
     * @return EmployeeAccruedTime
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
     * @return EmployeeAccruedTime
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