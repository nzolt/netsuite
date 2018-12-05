<?php

namespace Nzolt\NetSuite;

class RevRecScheduleRecurrenceList
{

    /**
     * @var RevRecScheduleRecurrence[] $revRecScheduleRecurrence
     */
    protected $revRecScheduleRecurrence = null;

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
     * @return RevRecScheduleRecurrence[]
     */
    public function getRevRecScheduleRecurrence()
    {
      return $this->revRecScheduleRecurrence;
    }

    /**
     * @param RevRecScheduleRecurrence[] $revRecScheduleRecurrence
     * @return \Nzolt\NetSuite\RevRecScheduleRecurrenceList
     */
    public function setRevRecScheduleRecurrence(array $revRecScheduleRecurrence = null)
    {
      $this->revRecScheduleRecurrence = $revRecScheduleRecurrence;
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
     * @return \Nzolt\NetSuite\RevRecScheduleRecurrenceList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
