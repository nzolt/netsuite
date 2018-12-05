<?php

namespace Nzolt\NetSuite;

class OpportunitySearchAdvanced extends SearchRecord
{

    /**
     * @var OpportunitySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var OpportunitySearchRow $columns
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
     * @return OpportunitySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param OpportunitySearch $criteria
     * @return \Nzolt\NetSuite\OpportunitySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return OpportunitySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param OpportunitySearchRow $columns
     * @return \Nzolt\NetSuite\OpportunitySearchAdvanced
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
     * @return \Nzolt\NetSuite\OpportunitySearchAdvanced
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
     * @return \Nzolt\NetSuite\OpportunitySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
