<?php

namespace Nzolt\NetSuite;

class SubsidiarySearchAdvanced extends SearchRecord
{

    /**
     * @var SubsidiarySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var SubsidiarySearchRow $columns
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
     * @return SubsidiarySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SubsidiarySearch $criteria
     * @return \Nzolt\NetSuite\SubsidiarySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return SubsidiarySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param SubsidiarySearchRow $columns
     * @return \Nzolt\NetSuite\SubsidiarySearchAdvanced
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
     * @return \Nzolt\NetSuite\SubsidiarySearchAdvanced
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
     * @return \Nzolt\NetSuite\SubsidiarySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
