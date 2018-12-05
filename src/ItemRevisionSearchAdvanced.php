<?php

namespace Nzolt\NetSuite;

class ItemRevisionSearchAdvanced extends SearchRecord
{

    /**
     * @var ItemRevisionSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ItemRevisionSearchRow $columns
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
     * @return ItemRevisionSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemRevisionSearch $criteria
     * @return \Nzolt\NetSuite\ItemRevisionSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ItemRevisionSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ItemRevisionSearchRow $columns
     * @return \Nzolt\NetSuite\ItemRevisionSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemRevisionSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
