<?php

namespace Nzolt\NetSuite;

class CalendarEventSearchAdvanced extends SearchRecord
{

    /**
     * @var CalendarEventSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CalendarEventSearchRow $columns
     */
    protected $columns = null;

    /**
     * @var string $savedSearchId
     */
    protected $savedSearchId = null;

    /**
     * @var string $savedSearchScriptId
     */
    protected $savedSearchScriptId = null;

    /**
     * @param string $savedSearchId
     * @param string $savedSearchScriptId
     */
    public function __construct($savedSearchId, $savedSearchScriptId)
    {
      $this->savedSearchId = $savedSearchId;
      $this->savedSearchScriptId = $savedSearchScriptId;
    }

    /**
     * @return CalendarEventSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CalendarEventSearch $criteria
     * @return \Nzolt\NetSuite\CalendarEventSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CalendarEventSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CalendarEventSearchRow $columns
     * @return \Nzolt\NetSuite\CalendarEventSearchAdvanced
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId()
    {
      return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchId
     * @return \Nzolt\NetSuite\CalendarEventSearchAdvanced
     */
    public function setSavedSearchId($savedSearchId)
    {
      $this->savedSearchId = $savedSearchId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId()
    {
      return $this->savedSearchScriptId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return \Nzolt\NetSuite\CalendarEventSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
