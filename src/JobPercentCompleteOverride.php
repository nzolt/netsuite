<?php

namespace Nzolt\NetSuite;

class JobPercentCompleteOverride
{

    /**
     * @var RecordRef $period
     */
    protected $period = null;

    /**
     * @var float $percent
     */
    protected $percent = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPeriod()
    {
      return $this->period;
    }

    /**
     * @param RecordRef $period
     * @return \Nzolt\NetSuite\JobPercentCompleteOverride
     */
    public function setPeriod($period)
    {
      $this->period = $period;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->percent;
    }

    /**
     * @param float $percent
     * @return \Nzolt\NetSuite\JobPercentCompleteOverride
     */
    public function setPercent($percent)
    {
      $this->percent = $percent;
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
     * @return \Nzolt\NetSuite\JobPercentCompleteOverride
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

}
