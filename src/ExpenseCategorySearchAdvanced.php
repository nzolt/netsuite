<?php

namespace Nzolt\NetSuite;

class ExpenseCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var ExpenseCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ExpenseCategorySearchRow $columns
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
     * @return ExpenseCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ExpenseCategorySearch $criteria
     * @return \Nzolt\NetSuite\ExpenseCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ExpenseCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ExpenseCategorySearchRow $columns
     * @return \Nzolt\NetSuite\ExpenseCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\ExpenseCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\ExpenseCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
