<?php

namespace Nzolt\NetSuite;

class SiteCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var SiteCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var SiteCategorySearchRow $columns
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
     * @return SiteCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SiteCategorySearch $criteria
     * @return \Nzolt\NetSuite\SiteCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return SiteCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param SiteCategorySearchRow $columns
     * @return \Nzolt\NetSuite\SiteCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\SiteCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\SiteCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
