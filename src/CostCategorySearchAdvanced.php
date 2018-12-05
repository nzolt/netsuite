<?php

namespace Nzolt\NetSuite;

class CostCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var CostCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CostCategorySearchRow $columns
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
     * @return CostCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CostCategorySearch $criteria
     * @return \Nzolt\NetSuite\CostCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CostCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CostCategorySearchRow $columns
     * @return \Nzolt\NetSuite\CostCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\CostCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\CostCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
