<?php

namespace Nzolt\NetSuite;

class ProjectTaskSearchAdvanced extends SearchRecord
{

    /**
     * @var ProjectTaskSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ProjectTaskSearchRow $columns
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
     * @return ProjectTaskSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ProjectTaskSearch $criteria
     * @return \Nzolt\NetSuite\ProjectTaskSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ProjectTaskSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ProjectTaskSearchRow $columns
     * @return \Nzolt\NetSuite\ProjectTaskSearchAdvanced
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchAdvanced
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
     * @return \Nzolt\NetSuite\ProjectTaskSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
