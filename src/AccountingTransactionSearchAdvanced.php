<?php

namespace Nzolt\NetSuite;

class AccountingTransactionSearchAdvanced extends SearchRecord
{

    /**
     * @var AccountingTransactionSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var AccountingTransactionSearchRow $columns
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
     * @return AccountingTransactionSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param AccountingTransactionSearch $criteria
     * @return \Nzolt\NetSuite\AccountingTransactionSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return AccountingTransactionSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param AccountingTransactionSearchRow $columns
     * @return \Nzolt\NetSuite\AccountingTransactionSearchAdvanced
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchAdvanced
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
     * @return \Nzolt\NetSuite\AccountingTransactionSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
