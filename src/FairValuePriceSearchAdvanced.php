<?php

namespace Nzolt\NetSuite;

class FairValuePriceSearchAdvanced extends SearchRecord
{

    /**
     * @var FairValuePriceSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var FairValuePriceSearchRow $columns
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
     * @return FairValuePriceSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param FairValuePriceSearch $criteria
     * @return \Nzolt\NetSuite\FairValuePriceSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return FairValuePriceSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param FairValuePriceSearchRow $columns
     * @return \Nzolt\NetSuite\FairValuePriceSearchAdvanced
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchAdvanced
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
