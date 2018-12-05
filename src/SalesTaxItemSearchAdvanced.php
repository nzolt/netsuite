<?php

namespace Nzolt\NetSuite;

class SalesTaxItemSearchAdvanced extends SearchRecord
{

    /**
     * @var SalesTaxItemSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var SalesTaxItemSearchRow $columns
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
     * @return SalesTaxItemSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesTaxItemSearch $criteria
     * @return \Nzolt\NetSuite\SalesTaxItemSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return SalesTaxItemSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param SalesTaxItemSearchRow $columns
     * @return \Nzolt\NetSuite\SalesTaxItemSearchAdvanced
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearchAdvanced
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
     * @return \Nzolt\NetSuite\SalesTaxItemSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
