<?php

namespace Nzolt\NetSuite;

class LocationBusinessHours
{

    /**
     * @var \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @var boolean $isSunday
     */
    protected $isSunday = null;

    /**
     * @var boolean $isMonday
     */
    protected $isMonday = null;

    /**
     * @var boolean $isTuesday
     */
    protected $isTuesday = null;

    /**
     * @var boolean $isWednesday
     */
    protected $isWednesday = null;

    /**
     * @var boolean $isThursday
     */
    protected $isThursday = null;

    /**
     * @var boolean $isFriday
     */
    protected $isFriday = null;

    /**
     * @var boolean $isSaturday
     */
    protected $isSaturday = null;

    /**
     * @var \DateTime $sameDayPickupCutOffTime
     */
    protected $sameDayPickupCutOffTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->startTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startTime
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setStartTime(\DateTime $startTime = null)
    {
      if ($startTime == null) {
       $this->startTime = null;
      } else {
        $this->startTime = $startTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->endTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endTime
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setEndTime(\DateTime $endTime = null)
    {
      if ($endTime == null) {
       $this->endTime = null;
      } else {
        $this->endTime = $endTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSunday()
    {
      return $this->isSunday;
    }

    /**
     * @param boolean $isSunday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsSunday($isSunday)
    {
      $this->isSunday = $isSunday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMonday()
    {
      return $this->isMonday;
    }

    /**
     * @param boolean $isMonday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsMonday($isMonday)
    {
      $this->isMonday = $isMonday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTuesday()
    {
      return $this->isTuesday;
    }

    /**
     * @param boolean $isTuesday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsTuesday($isTuesday)
    {
      $this->isTuesday = $isTuesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWednesday()
    {
      return $this->isWednesday;
    }

    /**
     * @param boolean $isWednesday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsWednesday($isWednesday)
    {
      $this->isWednesday = $isWednesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsThursday()
    {
      return $this->isThursday;
    }

    /**
     * @param boolean $isThursday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsThursday($isThursday)
    {
      $this->isThursday = $isThursday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFriday()
    {
      return $this->isFriday;
    }

    /**
     * @param boolean $isFriday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsFriday($isFriday)
    {
      $this->isFriday = $isFriday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSaturday()
    {
      return $this->isSaturday;
    }

    /**
     * @param boolean $isSaturday
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setIsSaturday($isSaturday)
    {
      $this->isSaturday = $isSaturday;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSameDayPickupCutOffTime()
    {
      if ($this->sameDayPickupCutOffTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->sameDayPickupCutOffTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $sameDayPickupCutOffTime
     * @return \Nzolt\NetSuite\LocationBusinessHours
     */
    public function setSameDayPickupCutOffTime(\DateTime $sameDayPickupCutOffTime = null)
    {
      if ($sameDayPickupCutOffTime == null) {
       $this->sameDayPickupCutOffTime = null;
      } else {
        $this->sameDayPickupCutOffTime = $sameDayPickupCutOffTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
