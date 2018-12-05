<?php

namespace Nzolt\NetSuite;

class EntityGroupSearchAdvanced extends SearchRecord
{

    /**
     * @var EntityGroupSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var EntityGroupSearchRow $columns
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
     * @return EntityGroupSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param EntityGroupSearch $criteria
     * @return \Nzolt\NetSuite\EntityGroupSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return EntityGroupSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param EntityGroupSearchRow $columns
     * @return \Nzolt\NetSuite\EntityGroupSearchAdvanced
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
     * @return \Nzolt\NetSuite\EntityGroupSearchAdvanced
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
     * @return \Nzolt\NetSuite\EntityGroupSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
