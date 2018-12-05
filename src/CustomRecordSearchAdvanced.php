<?php

namespace Nzolt\NetSuite;

class CustomRecordSearchAdvanced extends SearchRecord
{

    /**
     * @var CustomRecordSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CustomRecordSearchRow $columns
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
     * @return CustomRecordSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomRecordSearch $criteria
     * @return \Nzolt\NetSuite\CustomRecordSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CustomRecordSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CustomRecordSearchRow $columns
     * @return \Nzolt\NetSuite\CustomRecordSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomRecordSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomRecordSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
