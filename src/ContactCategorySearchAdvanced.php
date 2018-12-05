<?php

namespace Nzolt\NetSuite;

class ContactCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var ContactCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ContactCategorySearchRow $columns
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
     * @return ContactCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ContactCategorySearch $criteria
     * @return \Nzolt\NetSuite\ContactCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ContactCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ContactCategorySearchRow $columns
     * @return \Nzolt\NetSuite\ContactCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\ContactCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\ContactCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
