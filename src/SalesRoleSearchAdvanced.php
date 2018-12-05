<?php

namespace Nzolt\NetSuite;

class SalesRoleSearchAdvanced extends SearchRecord
{

    /**
     * @var SalesRoleSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var SalesRoleSearchRow $columns
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
     * @return SalesRoleSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SalesRoleSearch $criteria
     * @return \Nzolt\NetSuite\SalesRoleSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return SalesRoleSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param SalesRoleSearchRow $columns
     * @return \Nzolt\NetSuite\SalesRoleSearchAdvanced
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
     * @return \Nzolt\NetSuite\SalesRoleSearchAdvanced
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
     * @return \Nzolt\NetSuite\SalesRoleSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
