<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * JobMilestones
 */
class JobMilestones {

    /**
     * @access public
     * @var string
     */
    protected $milestoneName;

    /**
     * @access public
     * @var string
     */
    protected $milestoneOrder;

    /**
     * @access public
     * @var dateTime
     */
    protected $milestoneEstComplete;

    /**
     * @access public
     * @var boolean
     */
    protected $milestoneCompleted;

    /**
     * @access public
     * @var string
     */
    protected $milestoneComments;

    static $paramtypesmap = array(
    	"milestoneName" => "string",
    	"milestoneOrder" => "string",
    	"milestoneEstComplete" => "dateTime",
    	"milestoneCompleted" => "boolean",
    	"milestoneComments" => "string",
    );

    /**
     * Set milestoneName
     *
     * @param string $milestoneName
     * @return JobMilestones
     */
    public function setMilestoneName($milestoneName) {
        $this->milestoneName = $milestoneName;
        return $this;
    }

    /**
     * Get milestoneName
     *
     * @return string
     */
    public function getMilestoneName() {
        return $this->milestoneName;
    }


    /**
     * Set milestoneOrder
     *
     * @param string $milestoneOrder
     * @return JobMilestones
     */
    public function setMilestoneOrder($milestoneOrder) {
        $this->milestoneOrder = $milestoneOrder;
        return $this;
    }

    /**
     * Get milestoneOrder
     *
     * @return string
     */
    public function getMilestoneOrder() {
        return $this->milestoneOrder;
    }


    /**
     * Set milestoneEstComplete
     *
     * @param \DateTime $milestoneEstComplete
     * @return JobMilestones
     */
    public function setMilestoneEstComplete(\DateTime $milestoneEstComplete) {
        $this->milestoneEstComplete = $milestoneEstComplete->format('c');
        return $this;
    }

    /**
     * Get milestoneEstComplete
     *
     * @return \DateTime
     */
    public function getMilestoneEstComplete() {
        return new \DateTime($this->milestoneEstComplete);
    }


    /**
     * Set milestoneCompleted
     *
     * @param boolean $milestoneCompleted
     * @return JobMilestones
     */
    public function setMilestoneCompleted($milestoneCompleted) {
        $this->milestoneCompleted = $milestoneCompleted;
        return $this;
    }

    /**
     * Get milestoneCompleted
     *
     * @return boolean
     */
    public function getMilestoneCompleted() {
        return $this->milestoneCompleted;
    }


    /**
     * Set milestoneComments
     *
     * @param string $milestoneComments
     * @return JobMilestones
     */
    public function setMilestoneComments($milestoneComments) {
        $this->milestoneComments = $milestoneComments;
        return $this;
    }

    /**
     * Get milestoneComments
     *
     * @return string
     */
    public function getMilestoneComments() {
        return $this->milestoneComments;
    }

}