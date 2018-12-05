<?php

namespace Nzolt\NetSuite;

class CustomerStatusSearchAdvanced extends SearchRecord
{

    /**
     * @var CustomerStatusSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CustomerStatusSearchRow $columns
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
     * @return CustomerStatusSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerStatusSearch $criteria
     * @return \Nzolt\NetSuite\CustomerStatusSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CustomerStatusSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CustomerStatusSearchRow $columns
     * @return \Nzolt\NetSuite\CustomerStatusSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomerStatusSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomerStatusSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
