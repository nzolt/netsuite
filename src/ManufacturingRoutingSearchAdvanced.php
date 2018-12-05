<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingSearchAdvanced extends SearchRecord
{

    /**
     * @var ManufacturingRoutingSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ManufacturingRoutingSearchRow $columns
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
     * @return ManufacturingRoutingSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ManufacturingRoutingSearch $criteria
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ManufacturingRoutingSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ManufacturingRoutingSearchRow $columns
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
