<?php

namespace Nzolt\NetSuite;

class CustomerMessageSearchAdvanced extends SearchRecord
{

    /**
     * @var CustomerMessageSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CustomerMessageSearchRow $columns
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
     * @return CustomerMessageSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CustomerMessageSearch $criteria
     * @return \Nzolt\NetSuite\CustomerMessageSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CustomerMessageSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CustomerMessageSearchRow $columns
     * @return \Nzolt\NetSuite\CustomerMessageSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomerMessageSearchAdvanced
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
     * @return \Nzolt\NetSuite\CustomerMessageSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
