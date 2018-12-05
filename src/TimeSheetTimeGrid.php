<?php

namespace Nzolt\NetSuite;

class TimeSheetTimeGrid
{

    /**
     * @var TimeEntry $sunday
     */
    protected $sunday = null;

    /**
     * @var TimeEntry $monday
     */
    protected $monday = null;

    /**
     * @var TimeEntry $tuesday
     */
    protected $tuesday = null;

    /**
     * @var TimeEntry $wednesday
     */
    protected $wednesday = null;

    /**
     * @var TimeEntry $thursday
     */
    protected $thursday = null;

    /**
     * @var TimeEntry $friday
     */
    protected $friday = null;

    /**
     * @var TimeEntry $saturday
     */
    protected $saturday = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TimeEntry
     */
    public function getSunday()
    {
      return $this->sunday;
    }

    /**
     * @param TimeEntry $sunday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setSunday($sunday)
    {
      $this->sunday = $sunday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getMonday()
    {
      return $this->monday;
    }

    /**
     * @param TimeEntry $monday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setMonday($monday)
    {
      $this->monday = $monday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getTuesday()
    {
      return $this->tuesday;
    }

    /**
     * @param TimeEntry $tuesday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setTuesday($tuesday)
    {
      $this->tuesday = $tuesday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getWednesday()
    {
      return $this->wednesday;
    }

    /**
     * @param TimeEntry $wednesday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setWednesday($wednesday)
    {
      $this->wednesday = $wednesday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getThursday()
    {
      return $this->thursday;
    }

    /**
     * @param TimeEntry $thursday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setThursday($thursday)
    {
      $this->thursday = $thursday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getFriday()
    {
      return $this->friday;
    }

    /**
     * @param TimeEntry $friday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setFriday($friday)
    {
      $this->friday = $friday;
      return $this;
    }

    /**
     * @return TimeEntry
     */
    public function getSaturday()
    {
      return $this->saturday;
    }

    /**
     * @param TimeEntry $saturday
     * @return \Nzolt\NetSuite\TimeSheetTimeGrid
     */
    public function setSaturday($saturday)
    {
      $this->saturday = $saturday;
      return $this;
    }

}
