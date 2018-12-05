<?php

namespace Nzolt\NetSuite;

class JobMilestonesList
{

    /**
     * @var JobMilestones[] $milestones
     */
    protected $milestones = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return JobMilestones[]
     */
    public function getMilestones()
    {
      return $this->milestones;
    }

    /**
     * @param JobMilestones[] $milestones
     * @return \Nzolt\NetSuite\JobMilestonesList
     */
    public function setMilestones(array $milestones = null)
    {
      $this->milestones = $milestones;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\JobMilestonesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
