<?php

namespace Nzolt\NetSuite;

class WinLossReasonSearchAdvanced extends SearchRecord
{

    /**
     * @var WinLossReasonSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var WinLossReasonSearchRow $columns
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
     * @return WinLossReasonSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param WinLossReasonSearch $criteria
     * @return \Nzolt\NetSuite\WinLossReasonSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return WinLossReasonSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param WinLossReasonSearchRow $columns
     * @return \Nzolt\NetSuite\WinLossReasonSearchAdvanced
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
     * @return \Nzolt\NetSuite\WinLossReasonSearchAdvanced
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
     * @return \Nzolt\NetSuite\WinLossReasonSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
