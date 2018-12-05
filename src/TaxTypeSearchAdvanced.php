<?php

namespace Nzolt\NetSuite;

class TaxTypeSearchAdvanced extends SearchRecord
{

    /**
     * @var TaxTypeSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var TaxTypeSearchRow $columns
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
     * @return TaxTypeSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxTypeSearch $criteria
     * @return \Nzolt\NetSuite\TaxTypeSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return TaxTypeSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param TaxTypeSearchRow $columns
     * @return \Nzolt\NetSuite\TaxTypeSearchAdvanced
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
     * @return \Nzolt\NetSuite\TaxTypeSearchAdvanced
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
     * @return \Nzolt\NetSuite\TaxTypeSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
