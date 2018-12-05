<?php

namespace Nzolt\NetSuite;

class ContactRoleSearchAdvanced extends SearchRecord
{

    /**
     * @var ContactRoleSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ContactRoleSearchRow $columns
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
     * @return ContactRoleSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ContactRoleSearch $criteria
     * @return \Nzolt\NetSuite\ContactRoleSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ContactRoleSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ContactRoleSearchRow $columns
     * @return \Nzolt\NetSuite\ContactRoleSearchAdvanced
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
     * @return \Nzolt\NetSuite\ContactRoleSearchAdvanced
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
     * @return \Nzolt\NetSuite\ContactRoleSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
