<?php

namespace Nzolt\NetSuite;

class SupportCaseSearchAdvanced extends SearchRecord
{

    /**
     * @var SupportCaseSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var SupportCaseSearchRow $columns
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
     * @return SupportCaseSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param SupportCaseSearch $criteria
     * @return \Nzolt\NetSuite\SupportCaseSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return SupportCaseSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param SupportCaseSearchRow $columns
     * @return \Nzolt\NetSuite\SupportCaseSearchAdvanced
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
     * @return \Nzolt\NetSuite\SupportCaseSearchAdvanced
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
     * @return \Nzolt\NetSuite\SupportCaseSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
