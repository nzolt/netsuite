<?php

namespace Nzolt\NetSuite;

class JobMilestones
{

    /**
     * @var string $milestoneName
     */
    protected $milestoneName = null;

    /**
     * @var string $milestoneOrder
     */
    protected $milestoneOrder = null;

    /**
     * @var \DateTime $milestoneEstComplete
     */
    protected $milestoneEstComplete = null;

    /**
     * @var boolean $milestoneCompleted
     */
    protected $milestoneCompleted = null;

    /**
     * @var string $milestoneComments
     */
    protected $milestoneComments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMilestoneName()
    {
      return $this->milestoneName;
    }

    /**
     * @param string $milestoneName
     * @return \Nzolt\NetSuite\JobMilestones
     */
    public function setMilestoneName($milestoneName)
    {
      $this->milestoneName = $milestoneName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneOrder()
    {
      return $this->milestoneOrder;
    }

    /**
     * @param string $milestoneOrder
     * @return \Nzolt\NetSuite\JobMilestones
     */
    public function setMilestoneOrder($milestoneOrder)
    {
      $this->milestoneOrder = $milestoneOrder;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMilestoneEstComplete()
    {
      if ($this->milestoneEstComplete == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->milestoneEstComplete);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $milestoneEstComplete
     * @return \Nzolt\NetSuite\JobMilestones
     */
    public function setMilestoneEstComplete(\DateTime $milestoneEstComplete = null)
    {
      if ($milestoneEstComplete == null) {
       $this->milestoneEstComplete = null;
      } else {
        $this->milestoneEstComplete = $milestoneEstComplete->format(\DateTime::ATOM);
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
     * @return \Nzolt\NetSuite\JobMilestones
     */
    public function setMilestoneCompleted($milestoneCompleted)
    {
      $this->milestoneCompleted = $milestoneCompleted;
      return $this;
    }

    /**
     * @return string
     */
    public function getMilestoneComments()
    {
      return $this->milestoneComments;
    }

    /**
     * @param string $milestoneComments
     * @return \Nzolt\NetSuite\JobMilestones
     */
    public function setMilestoneComments($milestoneComments)
    {
      $this->milestoneComments = $milestoneComments;
      return $this;
    }

}
