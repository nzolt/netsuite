<?php

namespace Nzolt\NetSuite;

class BillingScheduleMilestone
{

    /**
     * @var int $milestoneId
     */
    protected $milestoneId = null;

    /**
     * @var float $milestoneAmount
     */
    protected $milestoneAmount = null;

    /**
     * @var RecordRef $milestoneTerms
     */
    protected $milestoneTerms = null;

    /**
     * @var RecordRef $projectTask
     */
    protected $projectTask = null;

    /**
     * @var \DateTime $milestoneDate
     */
    protected $milestoneDate = null;

    /**
     * @var boolean $milestoneCompleted
     */
    protected $milestoneCompleted = null;

    /**
     * @var \DateTime $milestoneActualCompletionDate
     */
    protected $milestoneActualCompletionDate = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getMilestoneId()
    {
      return $this->milestoneId;
    }

    /**
     * @param int $milestoneId
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneId($milestoneId)
    {
      $this->milestoneId = $milestoneId;
      return $this;
    }

    /**
     * @return float
     */
    public function getMilestoneAmount()
    {
      return $this->milestoneAmount;
    }

    /**
     * @param float $milestoneAmount
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneAmount($milestoneAmount)
    {
      $this->milestoneAmount = $milestoneAmount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMilestoneTerms()
    {
      return $this->milestoneTerms;
    }

    /**
     * @param RecordRef $milestoneTerms
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneTerms($milestoneTerms)
    {
      $this->milestoneTerms = $milestoneTerms;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectTask()
    {
      return $this->projectTask;
    }

    /**
     * @param RecordRef $projectTask
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setProjectTask($projectTask)
    {
      $this->projectTask = $projectTask;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMilestoneDate()
    {
      if ($this->milestoneDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->milestoneDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $milestoneDate
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneDate(\DateTime $milestoneDate = null)
    {
      if ($milestoneDate == null) {
       $this->milestoneDate = null;
      } else {
        $this->milestoneDate = $milestoneDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMilestoneCompleted()
    {
      return $this->milestoneCompleted;
    }

    /**
     * @param boolean $milestoneCompleted
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneCompleted($milestoneCompleted)
    {
      $this->milestoneCompleted = $milestoneCompleted;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMilestoneActualCompletionDate()
    {
      if ($this->milestoneActualCompletionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->milestoneActualCompletionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $milestoneActualCompletionDate
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setMilestoneActualCompletionDate(\DateTime $milestoneActualCompletionDate = null)
    {
      if ($milestoneActualCompletionDate == null) {
       $this->milestoneActualCompletionDate = null;
      } else {
        $this->milestoneActualCompletionDate = $milestoneActualCompletionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Nzolt\NetSuite\BillingScheduleMilestone
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

}
