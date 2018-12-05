<?php

namespace Nzolt\NetSuite;

class BillingAccountSearchAdvanced extends SearchRecord
{

    /**
     * @var BillingAccountSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var BillingAccountSearchRow $columns
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
     * @return BillingAccountSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param BillingAccountSearch $criteria
     * @return \Nzolt\NetSuite\BillingAccountSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return BillingAccountSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param BillingAccountSearchRow $columns
     * @return \Nzolt\NetSuite\BillingAccountSearchAdvanced
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
     * @return \Nzolt\NetSuite\BillingAccountSearchAdvanced
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
     * @return \Nzolt\NetSuite\BillingAccountSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
