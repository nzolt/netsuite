<?php

namespace Nzolt\NetSuite;

class ManufacturingCostTemplateSearchAdvanced extends SearchRecord
{

    /**
     * @var ManufacturingCostTemplateSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ManufacturingCostTemplateSearchRow $columns
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
     * @return ManufacturingCostTemplateSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ManufacturingCostTemplateSearch $criteria
     * @return \Nzolt\NetSuite\ManufacturingCostTemplateSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ManufacturingCostTemplateSearchRow $columns
     * @return \Nzolt\NetSuite\ManufacturingCostTemplateSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingCostTemplateSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingCostTemplateSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
