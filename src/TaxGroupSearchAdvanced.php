<?php

namespace Nzolt\NetSuite;

class TaxGroupSearchAdvanced extends SearchRecord
{

    /**
     * @var TaxGroupSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var TaxGroupSearchRow $columns
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
     * @return TaxGroupSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param TaxGroupSearch $criteria
     * @return \Nzolt\NetSuite\TaxGroupSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return TaxGroupSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param TaxGroupSearchRow $columns
     * @return \Nzolt\NetSuite\TaxGroupSearchAdvanced
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
     * @return \Nzolt\NetSuite\TaxGroupSearchAdvanced
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
     * @return \Nzolt\NetSuite\TaxGroupSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
