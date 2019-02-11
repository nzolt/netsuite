<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskPredecessorPredecessorType;

/**
 * ProjectTaskPredecessor
 */
class ProjectTaskPredecessor {

    /**
     * @access public
     * @var RecordRef
     */
    public $task;

    /**
     * @access public
     * @var ProjectTaskPredecessorPredecessorType
     */
    protected $type;

    /**
     * @access public
     * @var float
     */
    protected $lagDays;

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

    static $paramtypesmap = array(
    	"task" => "RecordRef",
    	"type" => "ProjectTaskPredecessorPredecessorType",
    	"lagDays" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    );

    /**
     * Set type
     *
     * @param ProjectTaskPredecessorPredecessorType $type
     * @return ProjectTaskPredecessor
     */
    public function setType(ProjectTaskPredecessorPredecessorType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return ProjectTaskPredecessorPredecessorType
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set lagDays
     *
     * @param float $lagDays
     * @return ProjectTaskPredecessor
     */
    public function setLagDays($lagDays) {
        $this->lagDays = $lagDays;
        return $this;
    }

    /**
     * Get lagDays
     *
     * @return float
     */
    public function getLagDays() {
        return $this->lagDays;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ProjectTaskPredecessor
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
     * @return ProjectTaskPredecessor
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

}