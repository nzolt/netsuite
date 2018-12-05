<?php

namespace Nzolt\NetSuite;

class ItemAccountMappingSearchAdvanced extends SearchRecord
{

    /**
     * @var ItemAccountMappingSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ItemAccountMappingSearchRow $columns
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
     * @return ItemAccountMappingSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemAccountMappingSearch $criteria
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ItemAccountMappingSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ItemAccountMappingSearchRow $columns
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
