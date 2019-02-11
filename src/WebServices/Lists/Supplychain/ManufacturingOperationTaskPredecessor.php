<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Supplychain;

use Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingOperationTaskPredecessorPredecessorType;
use Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingLagType;

/**
 * ManufacturingOperationTaskPredecessor
 */
class ManufacturingOperationTaskPredecessor {

    /**
     * @access public
     * @var RecordRef
     */
    public $task;

    /**
     * @access public
     * @var ManufacturingOperationTaskPredecessorPredecessorType
     */
    protected $type;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var ManufacturingLagType
     */
    protected $lagType;

    /**
     * @access public
     * @var integer
     */
    protected $lagAmount;

    /**
     * @access public
     * @var string
     */
    protected $lagUnits;

    static $paramtypesmap = array(
    	"task" => "RecordRef",
    	"type" => "ManufacturingOperationTaskPredecessorPredecessorType",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"lagType" => "ManufacturingLagType",
    	"lagAmount" => "integer",
    	"lagUnits" => "string",
    );

    /**
     * Set type
     *
     * @param ManufacturingOperationTaskPredecessorPredecessorType $type
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setType(ManufacturingOperationTaskPredecessorPredecessorType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return ManufacturingOperationTaskPredecessorPredecessorType
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set lagType
     *
     * @param ManufacturingLagType $lagType
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagType(ManufacturingLagType $lagType) {
        $this->lagType = $lagType;
        return $this;
    }

    /**
     * Get lagType
     *
     * @return ManufacturingLagType
     */
    public function getLagType() {
        return $this->lagType;
    }


    /**
     * Set lagAmount
     *
     * @param integer $lagAmount
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagAmount($lagAmount) {
        $this->lagAmount = $lagAmount;
        return $this;
    }

    /**
     * Get lagAmount
     *
     * @return integer
     */
    public function getLagAmount() {
        return $this->lagAmount;
    }


    /**
     * Set lagUnits
     *
     * @param string $lagUnits
     * @return ManufacturingOperationTaskPredecessor
     */
    public function setLagUnits($lagUnits) {
        $this->lagUnits = $lagUnits;
        return $this;
    }

    /**
     * Get lagUnits
     *
     * @return string
     */
    public function getLagUnits() {
        return $this->lagUnits;
    }

}