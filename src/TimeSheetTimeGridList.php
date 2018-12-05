<?php

namespace Nzolt\NetSuite;

class TimeSheetTimeGridList
{

    /**
     * @var TimeSheetTimeGrid[] $timeSheetTimeGrid
     */
    protected $timeSheetTimeGrid = null;

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
     * @return TimeSheetTimeGrid[]
     */
    public function getTimeSheetTimeGrid()
    {
      return $this->timeSheetTimeGrid;
    }

    /**
     * @param TimeSheetTimeGrid[] $timeSheetTimeGrid
     * @return \Nzolt\NetSuite\TimeSheetTimeGridList
     */
    public function setTimeSheetTimeGrid(array $timeSheetTimeGrid = null)
    {
      $this->timeSheetTimeGrid = $timeSheetTimeGrid;
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
     * @return \Nzolt\NetSuite\TimeSheetTimeGridList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
