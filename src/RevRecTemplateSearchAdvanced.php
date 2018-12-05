<?php

namespace Nzolt\NetSuite;

class RevRecTemplateSearchAdvanced extends SearchRecord
{

    /**
     * @var RevRecTemplateSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var RevRecTemplateSearchRow $columns
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
     * @return RevRecTemplateSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param RevRecTemplateSearch $criteria
     * @return \Nzolt\NetSuite\RevRecTemplateSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return RevRecTemplateSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param RevRecTemplateSearchRow $columns
     * @return \Nzolt\NetSuite\RevRecTemplateSearchAdvanced
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchAdvanced
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
