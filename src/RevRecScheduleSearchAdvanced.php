<?php

namespace Nzolt\NetSuite;

class RevRecScheduleSearchAdvanced extends SearchRecord
{

    /**
     * @var RevRecScheduleSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var RevRecScheduleSearchRow $columns
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
     * @return RevRecScheduleSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param RevRecScheduleSearch $criteria
     * @return \Nzolt\NetSuite\RevRecScheduleSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return RevRecScheduleSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param RevRecScheduleSearchRow $columns
     * @return \Nzolt\NetSuite\RevRecScheduleSearchAdvanced
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchAdvanced
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
