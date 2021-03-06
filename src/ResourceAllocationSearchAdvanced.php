<?php

namespace Nzolt\NetSuite;

class ResourceAllocationSearchAdvanced extends SearchRecord
{

    /**
     * @var ResourceAllocationSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ResourceAllocationSearchRow $columns
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
     * @return ResourceAllocationSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ResourceAllocationSearch $criteria
     * @return \Nzolt\NetSuite\ResourceAllocationSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ResourceAllocationSearchRow $columns
     * @return \Nzolt\NetSuite\ResourceAllocationSearchAdvanced
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchAdvanced
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
     * @return \Nzolt\NetSuite\ResourceAllocationSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
