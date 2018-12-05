<?php

namespace Nzolt\NetSuite;

class PayrollItemSearchAdvanced extends SearchRecord
{

    /**
     * @var PayrollItemSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PayrollItemSearchRow $columns
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
     * @return PayrollItemSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PayrollItemSearch $criteria
     * @return \Nzolt\NetSuite\PayrollItemSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PayrollItemSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PayrollItemSearchRow $columns
     * @return \Nzolt\NetSuite\PayrollItemSearchAdvanced
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
     * @return \Nzolt\NetSuite\PayrollItemSearchAdvanced
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
     * @return \Nzolt\NetSuite\PayrollItemSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
