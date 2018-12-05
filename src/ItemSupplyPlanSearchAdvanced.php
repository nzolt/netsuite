<?php

namespace Nzolt\NetSuite;

class ItemSupplyPlanSearchAdvanced extends SearchRecord
{

    /**
     * @var ItemSupplyPlanSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ItemSupplyPlanSearchRow $columns
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
     * @return ItemSupplyPlanSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemSupplyPlanSearch $criteria
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ItemSupplyPlanSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ItemSupplyPlanSearchRow $columns
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemSupplyPlanSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
