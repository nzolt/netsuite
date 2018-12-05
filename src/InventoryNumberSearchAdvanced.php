<?php

namespace Nzolt\NetSuite;

class InventoryNumberSearchAdvanced extends SearchRecord
{

    /**
     * @var InventoryNumberSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var InventoryNumberSearchRow $columns
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
     * @return InventoryNumberSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InventoryNumberSearch $criteria
     * @return \Nzolt\NetSuite\InventoryNumberSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return InventoryNumberSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param InventoryNumberSearchRow $columns
     * @return \Nzolt\NetSuite\InventoryNumberSearchAdvanced
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchAdvanced
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
     * @return \Nzolt\NetSuite\InventoryNumberSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
