<?php

namespace Nzolt\NetSuite;

class TimeSheetSearchAdvanced extends SearchRecord
{

    /**
     * @var TimeSheetSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var TimeSheetSearchRow $columns
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
     * @return TimeSheetSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TimeSheetSearch $criteria
     * @return \Nzolt\NetSuite\TimeSheetSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return TimeSheetSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param TimeSheetSearchRow $columns
     * @return \Nzolt\NetSuite\TimeSheetSearchAdvanced
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
     * @return \Nzolt\NetSuite\TimeSheetSearchAdvanced
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
     * @return \Nzolt\NetSuite\TimeSheetSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
