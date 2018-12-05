<?php

namespace Nzolt\NetSuite;

class ConsolidatedExchangeRateSearchAdvanced extends SearchRecord
{

    /**
     * @var ConsolidatedExchangeRateSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ConsolidatedExchangeRateSearchRow $columns
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
     * @return ConsolidatedExchangeRateSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ConsolidatedExchangeRateSearch $criteria
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ConsolidatedExchangeRateSearchRow $columns
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchAdvanced
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchAdvanced
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
     * @return \Nzolt\NetSuite\ConsolidatedExchangeRateSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
