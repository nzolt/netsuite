<?php

namespace Nzolt\NetSuite;

class CurrencyRateSearchAdvanced extends SearchRecord
{

    /**
     * @var CurrencyRateSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CurrencyRateSearchRow $columns
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
     * @return CurrencyRateSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CurrencyRateSearch $criteria
     * @return \Nzolt\NetSuite\CurrencyRateSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CurrencyRateSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CurrencyRateSearchRow $columns
     * @return \Nzolt\NetSuite\CurrencyRateSearchAdvanced
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
     * @return \Nzolt\NetSuite\CurrencyRateSearchAdvanced
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
     * @return \Nzolt\NetSuite\CurrencyRateSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
