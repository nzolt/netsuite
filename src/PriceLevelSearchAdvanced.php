<?php

namespace Nzolt\NetSuite;

class PriceLevelSearchAdvanced extends SearchRecord
{

    /**
     * @var PriceLevelSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PriceLevelSearchRow $columns
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
     * @return PriceLevelSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PriceLevelSearch $criteria
     * @return \Nzolt\NetSuite\PriceLevelSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PriceLevelSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PriceLevelSearchRow $columns
     * @return \Nzolt\NetSuite\PriceLevelSearchAdvanced
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
     * @return \Nzolt\NetSuite\PriceLevelSearchAdvanced
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
     * @return \Nzolt\NetSuite\PriceLevelSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
