<?php

namespace Nzolt\NetSuite;

class TimeEntrySearchAdvanced extends SearchRecord
{

    /**
     * @var TimeEntrySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var TimeEntrySearchRow $columns
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
     * @return TimeEntrySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TimeEntrySearch $criteria
     * @return \Nzolt\NetSuite\TimeEntrySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return TimeEntrySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param TimeEntrySearchRow $columns
     * @return \Nzolt\NetSuite\TimeEntrySearchAdvanced
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
     * @return \Nzolt\NetSuite\TimeEntrySearchAdvanced
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
     * @return \Nzolt\NetSuite\TimeEntrySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
