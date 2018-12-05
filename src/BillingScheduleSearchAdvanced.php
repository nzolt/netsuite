<?php

namespace Nzolt\NetSuite;

class BillingScheduleSearchAdvanced extends SearchRecord
{

    /**
     * @var BillingScheduleSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var BillingScheduleSearchRow $columns
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
     * @return BillingScheduleSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param BillingScheduleSearch $criteria
     * @return \Nzolt\NetSuite\BillingScheduleSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return BillingScheduleSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param BillingScheduleSearchRow $columns
     * @return \Nzolt\NetSuite\BillingScheduleSearchAdvanced
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchAdvanced
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
