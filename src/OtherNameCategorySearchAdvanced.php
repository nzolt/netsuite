<?php

namespace Nzolt\NetSuite;

class OtherNameCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var OtherNameCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var OtherNameCategorySearchRow $columns
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
     * @return OtherNameCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param OtherNameCategorySearch $criteria
     * @return \Nzolt\NetSuite\OtherNameCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return OtherNameCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param OtherNameCategorySearchRow $columns
     * @return \Nzolt\NetSuite\OtherNameCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\OtherNameCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\OtherNameCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
