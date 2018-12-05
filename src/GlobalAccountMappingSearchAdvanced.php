<?php

namespace Nzolt\NetSuite;

class GlobalAccountMappingSearchAdvanced extends SearchRecord
{

    /**
     * @var GlobalAccountMappingSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var GlobalAccountMappingSearchRow $columns
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
     * @return GlobalAccountMappingSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GlobalAccountMappingSearch $criteria
     * @return \Nzolt\NetSuite\GlobalAccountMappingSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return GlobalAccountMappingSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param GlobalAccountMappingSearchRow $columns
     * @return \Nzolt\NetSuite\GlobalAccountMappingSearchAdvanced
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
     * @return \Nzolt\NetSuite\GlobalAccountMappingSearchAdvanced
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
     * @return \Nzolt\NetSuite\GlobalAccountMappingSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
