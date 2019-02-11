<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * BillingScheduleMilestone
 */
class BillingScheduleMilestone {

    /**
     * @access public
     * @var integer
     */
    protected $milestoneId;

    /**
     * @access public
     * @var float
     */
    protected $milestoneAmount;

    /**
     * @access public
     * @var RecordRef
     */
    public $milestoneTerms;

    /**
     * @access public
     * @var RecordRef
     */
    public $projectTask;

    /**
     * @access public
     * @var dateTime
     */
    protected $milestoneDate;

    /**
     * @access public
     * @var boolean
     */
    protected $milestoneCompleted;

    /**
     * @access public
     * @var dateTime
     */
    protected $milestoneActualCompletionDate;

    /**
     * @access public
     * @var string
     */
    protected $comments;

    static $paramtypesmap = array(
    	"milestoneId" => "integer",
    	"milestoneAmount" => "float",
    	"milestoneTerms" => "RecordRef",
    	"projectTask" => "RecordRef",
    	"milestoneDate" => "dateTime",
    	"milestoneCompleted" => "boolean",
    	"milestoneActualCompletionDate" => "dateTime",
    	"comments" => "string",
    );

    /**
     * Set milestoneId
     *
     * @param integer $milestoneId
     * @return BillingScheduleMilestone
     */
    public function setMilestoneId($milestoneId) {
        $this->milestoneId = $milestoneId;
        return $this;
    }

    /**
     * Get milestoneId
     *
     * @return integer
     */
    public function getMilestoneId() {
        return $this->milestoneId;
    }


    /**
     * Set milestoneAmount
     *
     * @param float $milestoneAmount
     * @return BillingScheduleMilestone
     */
    public function setMilestoneAmount($milestoneAmount) {
        $this->milestoneAmount = $milestoneAmount;
        return $this;
    }

    /**
     * Get milestoneAmount
     *
     * @return float
     */
    public function getMilestoneAmount() {
        return $this->milestoneAmount;
    }


    /**
     * Set milestoneDate
     *
     * @param \DateTime $milestoneDate
     * @return BillingScheduleMilestone
     */
    public function setMilestoneDate(\DateTime $milestoneDate) {
        $this->milestoneDate = $milestoneDate->format('c');
        return $this;
    }

    /**
     * Get milestoneDate
     *
     * @return \DateTime
     */
    public function getMilestoneDate() {
        return new \DateTime($this->milestoneDate);
    }


    /**
     * Set milestoneCompleted
     *
     * @param boolean $milestoneCompleted
     * @return BillingScheduleMilestone
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
     * Set milestoneActualCompletionDate
     *
     * @param \DateTime $milestoneActualCompletionDate
     * @return BillingScheduleMilestone
     */
    public function setMilestoneActualCompletionDate(\DateTime $milestoneActualCompletionDate) {
        $this->milestoneActualCompletionDate = $milestoneActualCompletionDate->format('c');
        return $this;
    }

    /**
     * Get milestoneActualCompletionDate
     *
     * @return \DateTime
     */
    public function getMilestoneActualCompletionDate() {
        return new \DateTime($this->milestoneActualCompletionDate);
    }


    /**
     * Set comments
     *
     * @param string $comments
     * @return BillingScheduleMilestone
     */
    public function setComments($comments) {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments() {
        return $this->comments;
    }

}