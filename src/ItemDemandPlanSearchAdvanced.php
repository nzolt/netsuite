<?php

namespace Nzolt\NetSuite;

class ItemDemandPlanSearchAdvanced extends SearchRecord
{

    /**
     * @var ItemDemandPlanSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ItemDemandPlanSearchRow $columns
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
     * @return ItemDemandPlanSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ItemDemandPlanSearch $criteria
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ItemDemandPlanSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ItemDemandPlanSearchRow $columns
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchAdvanced
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
