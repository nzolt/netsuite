<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRecurrenceRecurrenceUnits;

/**
 * BillingScheduleRecurrence
 */
class BillingScheduleRecurrence {

    /**
     * @access public
     * @var integer
     */
    protected $recurrenceId;

    /**
     * @access public
     * @var integer
     */
    protected $count;

    /**
     * @access public
     * @var BillingScheduleRecurrenceRecurrenceUnits
     */
    protected $units;

    /**
     * @access public
     * @var boolean
     */
    protected $relativeToPrevious;

    /**
     * @access public
     * @var dateTime
     */
    protected $recurrenceDate;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var RecordRef
     */
    public $paymentTerms;

    static $paramtypesmap = array(
    	"recurrenceId" => "integer",
    	"count" => "integer",
    	"units" => "BillingScheduleRecurrenceRecurrenceUnits",
    	"relativeToPrevious" => "boolean",
    	"recurrenceDate" => "dateTime",
    	"amount" => "float",
    	"paymentTerms" => "RecordRef",
    );

    /**
     * Set recurrenceId
     *
     * @param integer $recurrenceId
     * @return BillingScheduleRecurrence
     */
    public function setRecurrenceId($recurrenceId) {
        $this->recurrenceId = $recurrenceId;
        return $this;
    }

    /**
     * Get recurrenceId
     *
     * @return integer
     */
    public function getRecurrenceId() {
        return $this->recurrenceId;
    }


    /**
     * Set count
     *
     * @param integer $count
     * @return BillingScheduleRecurrence
     */
    public function setCount($count) {
        $this->count = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount() {
        return $this->count;
    }


    /**
     * Set units
     *
     * @param BillingScheduleRecurrenceRecurrenceUnits $units
     * @return BillingScheduleRecurrence
     */
    public function setUnits(BillingScheduleRecurrenceRecurrenceUnits $units) {
        $this->units = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return BillingScheduleRecurrenceRecurrenceUnits
     */
    public function getUnits() {
        return $this->units;
    }


    /**
     * Set relativeToPrevious
     *
     * @param boolean $relativeToPrevious
     * @return BillingScheduleRecurrence
     */
    public function setRelativeToPrevious($relativeToPrevious) {
        $this->relativeToPrevious = $relativeToPrevious;
        return $this;
    }

    /**
     * Get relativeToPrevious
     *
     * @return boolean
     */
    public function getRelativeToPrevious() {
        return $this->relativeToPrevious;
    }


    /**
     * Set recurrenceDate
     *
     * @param \DateTime $recurrenceDate
     * @return BillingScheduleRecurrence
     */
    public function setRecurrenceDate(\DateTime $recurrenceDate) {
        $this->recurrenceDate = $recurrenceDate->format('c');
        return $this;
    }

    /**
     * Get recurrenceDate
     *
     * @return \DateTime
     */
    public function getRecurrenceDate() {
        return new \DateTime($this->recurrenceDate);
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return BillingScheduleRecurrence
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }

}