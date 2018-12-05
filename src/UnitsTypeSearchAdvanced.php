<?php

namespace Nzolt\NetSuite;

class UnitsTypeSearchAdvanced extends SearchRecord
{

    /**
     * @var UnitsTypeSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var UnitsTypeSearchRow $columns
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
     * @return UnitsTypeSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param UnitsTypeSearch $criteria
     * @return \Nzolt\NetSuite\UnitsTypeSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return UnitsTypeSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param UnitsTypeSearchRow $columns
     * @return \Nzolt\NetSuite\UnitsTypeSearchAdvanced
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchAdvanced
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
     * @return \Nzolt\NetSuite\UnitsTypeSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
